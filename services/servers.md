---
description: Servers management
---

# Servers

{% api-method method="get" host="https://api.rahona.network" path="/services/servers" %}
{% api-method-summary %}
List servers
{% endapi-method-summary %}

{% api-method-description %}
Retrieves the list of servers.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Listing servers in an array.
{% endapi-method-response-example-description %}

```php
[
    {
        "id": "123",
        "name": "vm1"
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
No servers is present on your account.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find any servers"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/services/servers/:id" %}
{% api-method-summary %}
Get server
{% endapi-method-summary %}

{% api-method-description %}
Retrieves the server.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
server id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Server successfully retrieved.
{% endapi-method-response-example-description %}

```php
{  
     "id": 123
     "name": "vm1",
     "status": "UP",
     "cpus": 2,
     "cpu": 8.39,
     "mem": 3807158272, # Bytes
     "maxmem": 4294967296, # Bytes
     "network": [
          {
               "ip": "198.51.100.71",
               "reverse": "71.100.51.198.ip.rahona.network."
               "mask": "255.255.255.255",
               "mac": "	02:00:00:00:00:00",
               "gateway": "198.51.100.254"
          },
          ...
     ]
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find a servers.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find this server"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/services/servers/:id/start" %}
{% api-method-summary %}
Start server
{% endapi-method-summary %}

{% api-method-description %}
Start the server.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
server id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
The server start successfully.
{% endapi-method-response-example-description %}

```php
{    "message": "Server start successfully"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=500 %}
{% api-method-response-example-description %}
Can't start the server.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not start the server"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/services/servers/:id/restart" %}
{% api-method-summary %}
Restart server
{% endapi-method-summary %}

{% api-method-description %}
Restart the server.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
server id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
The server restart successfully.
{% endapi-method-response-example-description %}

```php
{    "message": "Server restart successfully"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=500 %}
{% api-method-response-example-description %}
Can't restart the server.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not restart the server"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/services/servers/:id/stop" %}
{% api-method-summary %}
Stop server
{% endapi-method-summary %}

{% api-method-description %}
Stop the server.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
server id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
The server stop successfully.
{% endapi-method-response-example-description %}

```php
{    "message": "Server stop successfully"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=500 %}
{% api-method-response-example-description %}
Can't stop the server.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not stop the server"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="post" host="https://api.rahona.network" path="/services/servers/:id/graphs" %}
{% api-method-summary %}
Get server graphics
{% endapi-method-summary %}

{% api-method-description %}
Get servers graphics.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
server id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}

{% api-method-form-data-parameters %}
{% api-method-parameter name="timeframe" type="string" required=true %}
hour \| day \| week \| month
{% endapi-method-parameter %}
{% endapi-method-form-data-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Server graphs successfully retrieved.
{% endapi-method-response-example-description %}

```php
{
    [
        {
            "maxdisk" => 322122547200
            "diskread" => 1888.7111111111
            "diskwrite" => 27991.665777778
            "netout" => 411.74677777778
            "time" => 1589769000
            "maxmem" => 4294967296
            "maxcpu" => 2
            "mem" => 3800528486.4
            "disk" => 0
            "netin" => 646.29266666667
            "cpu" => 0.074558249080812
        },
        {
            "diskwrite" => 32698.481777778
            "diskread" => 3895.7511111111
            "maxdisk" => 322122547200
            "netout" => 346.94211111111
            "time" => 1589830200
            "maxmem" => 4294967296
            "netin" => 611.06288888889
            "disk" => 0
            "mem" => 3815129024.2844
            "maxcpu" => 2
            "cpu" => 0.073981276889674
        }
        ...
    ]
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=400 %}
{% api-method-response-example-description %}
Invalid timeframe.
{% endapi-method-response-example-description %}

```php
{    "error": "Invalid timeframe"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Can't find any graphs for this server.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't find any graphs"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% hint style="warning" %}
## Other error codes
{% endhint %}

{% code title="403" %}
```php
{    "error": "This service is suspended"    }
```
{% endcode %}

Please check in the invoices section.

{% code title="405" %}
```php
{    "error": "Server already running"    }
```
{% endcode %}

You cannot start an already running server 🙄

{% code title="405" %}
```php
{    "error": "Server already stopped"    }
```
{% endcode %}

You cannot stop an already stopped server 🙄

{% code title="405" %}
```php
{    "error": "Server down, could not restart"    }
```
{% endcode %}

You cannot restart an already stopped server 🙄

{% code title="500" %}
```php
{    "error": "Could not connect to the node"    }
```
{% endcode %}

Could not connect to the node : An internal problem has occurred, contact a staff member.

