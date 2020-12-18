---
description: User services management.
---

# Services

{% api-method method="get" host="https://api.rahona.network" path="/services" %}
{% api-method-summary %}
List services
{% endapi-method-summary %}

{% api-method-description %}
Retrieves the list of services.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Services successfully retrieved.
{% endapi-method-response-example-description %}

```php
[
    {
         "id": 123,
         "name": "vm1",
         "expire": 1589879028,
         "status": "active"  
    },
    {
         "id": 1234,
         "name": "example.com",
         "expire": 1589642018,
         "status": "suspended"  
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find any services
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find any services"}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/services/:id" %}
{% api-method-summary %}
service details
{% endapi-method-summary %}

{% api-method-description %}
Retrieves additional information from the service, such as price, technical specifications...
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
service id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Service details successfully retrieved.
{% endapi-method-response-example-description %}

```php
{
    "id": 123,
    "title": "VPS2",
    "category": "VP2",
    "description": "FR-VPS-2",
    "details": {
        "cpu": "2vCPU",
        "ram": "4 Go RAM",
        "ddos": "Anti-DDoS Pro",
        "disk": "100 Go HDD (SoftRaid)",
        "network": "250 Mb/s (Best effort)",
        "bandwidth": "Bande passante illimitée"
    },
    "name": "vm1",
    "status": "active",
    "expire": 1589879028, 
    "price": 7.99
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find service details.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find service details"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



