---
description: BDEBCO management with the Rahona Hosting System.
---

# BDEBCO

{% hint style="danger" %}
**These endpoints can only be used by the staff of Rahona Hosting !**
{% endhint %}

{% api-method method="get" host="https://api.rahona.network" path="/bdebco" %}
{% api-method-summary %}
List BDEBCO 
{% endapi-method-summary %}

{% api-method-description %}
Get all instances.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return all instances in an array.
{% endapi-method-response-example-description %}

```php
{
    [
        {
            "id": "123",
            "user_id", 123,
            "name": "BDE RT"
        },
        ...
    ]
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find any instances.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find any instances"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/bdebco/:id" %}
{% api-method-summary %}
BDEBCO details
{% endapi-method-summary %}

{% api-method-description %}
Get BDEBCO details.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
instance id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return instance details.
{% endapi-method-response-example-description %}

```php
{
    "id": "123",
    "user_id": 123,
    "name": "BDE RT",
    "status": "on"
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find instance.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find instance"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

