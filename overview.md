# Overview

## Authentication

There is currently one way to authenticate through Rahona API v1: authentication key. A **key** can be created in the user account settings.

This **key** can then be used in the `Headers` section of your HTTP request:

All requests must include both **X-Rahona-Key** and **X-Rahona-Email** headers to authenticate.

{% tabs %}
{% tab title="Exemple" %}
```bash
curl -X GET "https://api.rahona.network/servers/123" \
     -H "Content-Type:application/json" \
     -H "X-Rahona-Key:1234567893feefc5f0q5000bfo0c38d90bbeb" \
     -H "X-Rahona-Email:example@example.com"
```
{% endtab %}
{% endtabs %}

## Errors

Rahona API uses conventional HTTP response codes to indicate the success or failure of an API request.

As a general rule:

* Codes in the `2xx` range indicate success
* Codes in the `4xx` range indicate incorrect or incomplete parameters \(e.g., a required parameter was omitted, an operation failed with a 3rd party, etc.\)
* Codes in the `5xx` range indicate an error with Rahona Hosting servers

Rahona API also outputs an error message and an error code formatted in JSON:

{% code title="Exemple" %}
```php
{    "error": "Can't find any servers"    }
```
{% endcode %}

## Limits

#### Data accessibility <a id="data-accessibility"></a>

The Rahona API is available to all Rahona Hosting users; however, users on larger plans have access to a greater selection of data sets and can query over broader historical intervals.

#### Staff Docs <a id="data-accessibility"></a>

Some endpoints are **only usable by the staff**, please ignore them from this docs.



| Endpoints | Client | Premium | Reseller |
| :--- | :---: | :---: | :---: |
| User | ✔️ | ✔️ | ✔️ |
| Invoices | ✔️ | ✔️ | ✔️ |
| Tickets | ✔️ | ✔️ | ✔️ |
| Servers | ✔️ | ✔️ | ✔️ |
| Servers actions | ❌ | ✔️ | ✔️ |
| Servers graphs | ❌ | ✔️ | ✔️ |
| API - ADMIN | ❌ | ❌ | ❌ |

