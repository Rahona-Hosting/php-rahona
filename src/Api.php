<?php

namespace Rahona;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

use Rahona\Exceptions\AuthException;

class Api
{
    /**
     * Contain the client key
     *
     * @var string
     */
    private $rahona_key = null;

    /**
     * Contain the client email
     *
     * @var string
     */
    private $rahona_email = null;

    /**
     * Contain the Rahona endpoint
     *
     * @var string
     */
    private $endpoint = "https://dev-api.rahona.network";

    /**
     * @var null
     */
    private $http_client = null;

    /**
     * Api constructor.
     * @param $rahona_key     Manage your key on the API section : https://panel.rahona-hosting.com/api
     * @param $rahona_email   Manage your email on your account  : https://panel.rahona-hosting.com/account
     * @param Client|null $http_client instance of http client
     * @throws AuthException
     */
    public function __construct($rahona_key, $rahona_email, Client $http_client = null)
    {
        if(!isset($http_client))
        {
            $http_client = new Client([
                'timeout' => 30,
                'connect_timeout' => 5
            ]);
        }
        if(!isset($rahona_key))
        {
            throw new AuthException("Rahona key missing");
        }

        if(!isset($rahona_email)){
            throw new AuthException("Rahona Email missing");
        }

        $this->rahona_key = $rahona_key;
        $this->rahona_email = $rahona_email;
        $this->http_client = $http_client;
    }

    /**
     * Main method
     *
     * @param string $method HTTP method (GET|POST|DELETE)
     * @param string $path relative url of API request
     * @param array $content body of the request
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws Exceptions\InvalidParameterException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function rawCall($method, $path, $content = null, $headers = null)
    {
        if (!isset($this->rahona_key)) {
            throw new Exceptions\InvalidParameterException("Rahona Key parameter is empty");
        }
        if (!isset($this->rahona_email)) {
            throw new Exceptions\InvalidParameterException("Rahona Email parameter is empty");
        }
        $url = $this->endpoint . $path;
        $request = new Request($method, $url);
        if (isset($content) && $method == 'GET') {
            $query_string = $request->getUri()->getQuery();
            $query = array();
            if (!empty($query_string)) {
                $queries = explode('&', $query_string);
                foreach ($queries as $element) {
                    $key_value_query = explode('=', $element, 2);
                    $query[$key_value_query[0]] = $key_value_query[1];
                }
            }
            $query = array_merge($query, (array)$content);
            // rewrite query args to properly dump true/false parameters
            foreach ($query as $key => $value) {
                if ($value === false) {
                    $query[$key] = "false";
                } elseif ($value === true) {
                    $query[$key] = "true";
                }
            }

            $query = \GuzzleHttp\Psr7\build_query($query);
            $url     = $request->getUri()->withQuery($query);
            $request = $request->withUri($url);
            $multipart    = [];
        } elseif (isset($content)) {
            // write the form-data form
            $multipart = [];
            if(is_array($content)){
                foreach($content as $key => $value){
                    $multipart[] = [
                        'name' => $key,
                        'contents' => $value
                    ];
                }
            }
        } else {
            $multipart = [];
        }
        if(!is_array($headers)) {
            $headers = [];
        }

        if (isset($this->rahona_key) && isset($this->rahona_key)) {
            $headers['X-Rahona-Key']  = $this->rahona_key;
            $headers['X-Rahona-Email'] = $this->rahona_email;
        }

        /** @var Response $response */
        return $this->http_client->send($request, [
            'multipart' => $multipart,
            'headers'  => $headers
        ]);
    }

    /**
     * Decode the response API object body to a array
     * @param Response $response
     * @return array
     */
    private function decodeResponse(Response $response)
    {
        return json_decode($response->getBody(), true);
    }

    /**
     * Wrap call to Rahona API for GET requests
     *
     * @param string $path
     * @param array $content
     * @param null $headers
     * @return array
     * @throws Exceptions\InvalidParameterException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($path, $content = null, $headers = null)
    {
        if(preg_match('/^\/[^\/]+\.json$/', $path))
        {
            return $this->decodeResponse(
                $this->rawCall("GET", $path, $content, false, $headers)
            );
        }
        else
        {
            return $this->decodeResponse(
                $this->rawCall("GET", $path, $content, $headers)
            );
        }
    }

    /**
     * Wrap call to Rahona API for POST requests
     *
     * @param string $path
     * @param array $content
     * @param null $headers
     * @return array
     * @throws Exceptions\InvalidParameterException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($path, $content = null, $headers = null)
    {
        return $this->decodeResponse(
            $this->rawCall("POST", $path, $content, $headers)
        );
    }

    /**
     * Return instance of http client
     */
    public function getHttpClient()
    {
        return $this->http_client;
    }
}