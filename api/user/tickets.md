---
description: User tickets management.
---

# Tickets

{% api-method method="get" host="https://api.rahona.network" path="/me/tickets" %}
{% api-method-summary %}
List tickets
{% endapi-method-summary %}

{% api-method-description %}
Retrieve all tickets.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
List all tickets.
{% endapi-method-response-example-description %}

```php
[
     {
        "id": 123,
        "product_id": 39,
        "departement": "COM",
        "sujet": "test",
        "status": "OPEN",
        "message": "I have a problem...",
        "date": 1589222615
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Can't find any tickets.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't find any tickets"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/me/tickets/:id" %}
{% api-method-summary %}
Get ticket
{% endapi-method-summary %}

{% api-method-description %}
Get all ticket informations and messages.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
ticket id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Ticket retrieved successfully.
{% endapi-method-response-example-description %}

```php
{
    "ticket": {
        "id": 123,
        "product_id": 39,
        "departement": "COM",
        "sujet": "test",
        "status": "OPEN",
        "message": "I have a problem...",
        "date": 1583166986
    },
    "responses": [
        {
            "message": "Answer...",
            "date": 1584628748
        },
        {
            "message": "Other answer...",
            "date": 1583604217
        },
        ...
    ]
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Can't find ticket infos.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't find tickets infos"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="post" host="https://api.rahona.network" path="/me/tickets/:id" %}
{% api-method-summary %}
Reply ticket
{% endapi-method-summary %}

{% api-method-description %}
Reply by sending a message to the ticket.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
ticket id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}

{% api-method-form-data-parameters %}
{% api-method-parameter name="message" type="string" required=true %}
Reply of the ticket
{% endapi-method-parameter %}
{% endapi-method-form-data-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
The message was successfully posted.
{% endapi-method-response-example-description %}

```php
{    "message": "Message successfully posted"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=500 %}
{% api-method-response-example-description %}
Can't post the reply.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't post new reply"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="post" host="https://api.rahona.network" path="/me/tickets/:id/close" %}
{% api-method-summary %}
Close ticket
{% endapi-method-summary %}

{% api-method-description %}
Close ticket.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="integer" required=true %}
ticket id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
The ticket has been closed.
{% endapi-method-response-example-description %}

```php
{    "message": "The ticket has been closed"    }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=500 %}
{% api-method-response-example-description %}
Can't close the ticket.
{% endapi-method-response-example-description %}

```php
{    "error": "Can't close the ticket"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

