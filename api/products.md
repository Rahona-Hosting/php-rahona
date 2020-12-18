---
description: Get orderable products.
---

# Products

{% api-method method="get" host="https://api.rahona.network" path="/products" %}
{% api-method-summary %}
List products
{% endapi-method-summary %}

{% api-method-description %}
Return all products in an array.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Products orderable successfully retrieved.
{% endapi-method-response-example-description %}

```php
[
    {
       "id": 123,
       "title": "VPS1",
       "category": "VPS",
       "description": "FR-VPS-1",
       "price": 4.99
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find any products.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find any products"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/products/:id" %}
{% api-method-summary %}
Product details
{% endapi-method-summary %}

{% api-method-description %}
Get products details
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
product id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return all product details.
{% endapi-method-response-example-description %}

```php
{
    "id": 123,
    "title": "VPS1",
    "category": "VPS",
    "description": "FR-VPS-1",
    "details": {
       "cpu": "1vCPU",
       "ram": "2 Go RAM",
       "ddos": "Anti-DDoS Pro",
       "disk": "50 Go HDD (SoftRaid)",
       "network": "100 Mb/s (Best effort)",
       "bandwidth": "Bande passante illimitée"
    },
    "price": 4.99
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find this product.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find this product"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



