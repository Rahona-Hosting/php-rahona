---
description: Discord management with the Rahona Bot interface.
---

# Discord

{% hint style="danger" %}
**These endpoints can only be used by the staff of Rahona Hosting !**
{% endhint %}

{% api-method method="get" host="https://api.rahona.network" path="/discord/users" %}
{% api-method-summary %}
Get users
{% endapi-method-summary %}

{% api-method-description %}
Return all of users linked accounts.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return all users in array.
{% endapi-method-response-example-description %}

```php
[
    {
        "discord_id": "123456789123654789"
    },
    ...
]
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find any users.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find any users"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/discord/users/:id" %}
{% api-method-summary %}
Check users
{% endapi-method-summary %}

{% api-method-description %}
Checking the presence of a user in the database.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="string" required=true %}
discord id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
User found !
{% endapi-method-response-example-description %}

```php
{ true }
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find user with this id.
{% endapi-method-response-example-description %}

```php
{ false }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://api.rahona.network" path="/discord/:id/infos" %}
{% api-method-summary %}
User details
{% endapi-method-summary %}

{% api-method-description %}
Return all users infos.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="id" type="string" required=true %}
discord id
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Return users details.
{% endapi-method-response-example-description %}

```php
{
    "discord_id": "123456789123654789",
    "discord_avatar": "954126c8745a321985b7452159875212",
    "discord_discriminator": "0001",
    "discord_locale": "fr",
    "discord_mfa_enabled": "true",
    "discord_flags": "0"
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}
Could not find user.
{% endapi-method-response-example-description %}

```php
{    "error": "Could not find this user"    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



