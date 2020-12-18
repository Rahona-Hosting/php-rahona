---
description: User invoices management.
---

# Invoices

{% api-method method="get" host="https://api.rahona.network" path="/me/invoices" %}
{% api-method-summary %}
List invoices
{% endapi-method-summary %}

{% api-method-description %}
Return invoices in an array.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
List invoices in array.
{% endapi-method-response-example-description %}

```php
[
    {
        "id": "123",
        "status": "PAYED",
        "total": 4.99
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Can't find any invoices.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't find any invoices"}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/me/invoices/:id" %}
{% api-method-summary %}
Get invoice details
{% endapi-method-summary %}

{% api-method-description %}
Get invoice informations details.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
invoice idReturn 
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return invoice details.
{% endapi-method-response-example-description %}

```php
{
    "id": 123,
    "status": "PAYED",
    "paypal_token": "EC-XXXXXXXXXXXXXXXXX",
    "total": 4.99,
    "date": 1589724360,
    "duedate": 1589724360,
    "datepaid": 1589724403,
    "user_details": {
        "city": "Hartpar",
        "phone": "+120012301",
        "postal": "34000",
        "street": "Main street",
        "country": "France",
        "lastname": "Doe",
        "firstname": "John"
    },
    "items_details": [
        {   # This list may change depending on the products!
            "id": 1,
            "dist": "debian-10",
            "host": "test-eob",
            "price": 4.99,
            "title": "VPS1",
            "description": "FR-VPS-1"
            ...
        },
        ...
    ]
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Can't find invoice details.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't find invoice details"}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



