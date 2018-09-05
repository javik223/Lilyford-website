# Wheel Form plugin for Craft CMS 3.x

Free Form Builder with Database Integration, successor of Free Contact Form Plugin featured on [Straight Up Craft](https://straightupcraft.com/)

![Screenshot](resources/img/form-entries.jpg)

## Requirements

This plugin requires Craft CMS 3.0.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require xpertbot/craft-wheelform

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Wheel Form.

## Features
- reCaptcha Validation
- Export CSV File
- Custom Email HTML Template
- Email Validation based on field type selected
- Required Fields
- Checkbox options
- Honeypot Field
- Ajax and Redirect friendly
- Send Form submissions to multiple emails
- Reordering of fields
- Multiple Translations

## Usage
After successful installation go to Plugin Settings and add the email you would like the forms to send `FROM`. As well as set other useful settings.

Forms are administered at the forms panel main settings. Set where this form should be submitting `TO` as well as name of the form.

Current Field types supported are:
* Text
* Email
* Number
* Checkboxes
* Radio
* Select
* Hidden
* File

Field Settings can be set as Required or not, for validation purposes.

Your form template can look something like this:

```twig
{% macro errorList(errors) %}
    {% if errors %}
        <ul class="errors">
            {% for error in errors %}
                <li>{{ error }}</li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}

{% from _self import errorList %}

    {{ errors['form'] is defined ? errorList(errors['form']) }}

    <form method="post" action="" accept-charset="UTF-8" novalidate="" enctype="multipart/form-data">
    {{ csrfInput() }}
    <input type="hidden" name="action" value="wheelform/message/send">
    <input type="hidden" name="form_id" value="1">
    <input type="hidden" name="redirect" value="{{ 'contact/thanks'|hash }}">

    <h3><label for="from-name">Your Name</label></h3>
    <input id="from-name" type="text" name="name" value="{{ values['name'] ?? '' }}">
    {{ errors['name'] is defined ? errorList(errors['name']) }}

    <h3><label for="from-email">Your Email</label></h3>
    <input id="from-email" type="email" name="email" value="{{ values['email'] ?? '' }}">
    {{ errors['email'] is defined ? errorList(errors['email']) }}

    <h3><label for="phone">Phone</label></h3>
    <input id="phone" type="text" name="phone" value="{{ values['phone'] ?? '' }}">
    {{ errors['phone'] is defined ? errorList(errors['phone']) }}

    <label><input type="checkbox" name="favorite_topping[]" value="Chocolate">Chocolate</label>
    <label><input type="checkbox" name="favorite_topping[]" value="Vanilla">Vanilla</label>
    <label><input type="checkbox" name="favorite_topping[]" value="Strawberry">Strawberry</label>
    {{ errors['favorite_topping'] is defined ? errorList(errors['favorite_topping']) }}

    <h3><label for="message">Message</label></h3>
    <textarea rows="10" cols="40" id="message" name="message">{{ values['message'] ?? '' }}</textarea>
    {{ errors['message'] is defined ? errorList(errors['message']) }}

    <input type="file" name="user_file" id="user_filer">

    {# if using recaptcha settings #}
    <div class="recaptcha-container">
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <div class="g-recaptcha" data-sitekey="{{ site_key }}">
        </div>
    </div>

    <input type="submit" value="Send">
</form>
```

### Redirecting after submit

If you have a ‘redirect’ hidden input, the user will get redirected to it upon successfully sending the email.

Note that if you don’t include a `redirect` input, the current page will get reloaded.

### Displaying flash messages

When a contact form is submitted, the plugin will set a `notice` or `success` flash message on the user session. You can display it in your template like this:

```twig
{% if craft.app.session.hasFlash('notice') %}
    <p class="message notice">{{ craft.app.session.getFlash('notice') }}</p>
{% elseif craft.app.session.hasFlash('error') %}
    <p class="message error">{{ craft.app.session.getFlash('error') }}</p>
{% endif %}
```

### File attachments

If you would like your form to accept file attachments, follow these steps:

1. Make sure your opening HTML `<form>` tag contains `enctype="multipart/form-data"`.
2. Add a `<input type="file" name="{field_name}">` to your form.


### Ajax form submissions

You can optionally post contact form submissions over Ajax if you’d like. Just send a POST request to your site with all of the same data that would normally be sent:

```js
$('#my-form').submit(function(ev) {
    // Prevent the form from actually submitting
    ev.preventDefault();

    var data = $(this).serialize();

    // Send it to the server
    $.post('/wheelform/message/send',
        data,
        function(response) {
            if (response.success) {
                //reponse.message is the message saved in the Form Settings
                $('#thanks').fadeIn();
            } else {
                // response.values will contain user submitted values
                // response.errors will be an array containing any validation errors that occurred, indexed by field name
                // e.g. response.error['email'] => ['Email is required', 'Email is invalid']
                alert('An error occurred. Please try again.');
            }
        }
    );
});
```

If using getCrsfInput() make sure you are submitting it with the rest of your form.

### CSV Export
CSV Exporter can be based on entry date, under Admin > Utilities > Form Export.

### Custom Email Template
Custom Twig templates can be used using these steps:

1. Create `wheelform.php` file inside Craft's config folder.
2. `wheelform.php` expends an array of configuration settings to be returned. Only `template` variable is required, this is a path to the custom TWIG Template. Example:

```php
return [
    'template' => '_emails/custom';
];
```
3. Inside `custom.html` (or the name you chose for your file on above config) you will have access to a `fields` array. Example

```html
<html>
<body>
    <h1>Custom Template</h1>

    <ul>
    {% for field in fields %}
        <li>
        <strong>{{ field.label }}:</strong>
        {% switch field.type %}

        {% case "file" %}
            {# This is an object with file attributes #}
            {{ field.value.name }}

            {% case "checkbox" %}
                {# Array of all choices selected #}
                {{ field.value | join(',')}}

            {% default %}

                {# Text based items #}
                {{ field. value }}

        {% endswitch %}
        </li>
    {% endfor %}
    </ul>
</body>
</html>
```

### Honeypot Field
Honeypot field is a field that is meant to be left blank by humans. Usually hidden by CSS. [More information](https://stackoverflow.com/questions/36227376/better-honeypot-implementation-form-anti-spam) about Honeypot fields.

### Events
(Note: this is mostly for developers that know basic PHP and Composer Packages)

`beforeSend` Event, this allows developers to modify the fields being sent in an email, this event does not modify the values entered in the database. Only the fields being sent to the client.

You can also trigger other custom functionality such as gathering custom field values to add to a Third party service such as a Mailing list.

`Event` class properties:
* `form_id` - Current ID of form being submitted, This allows developers some way to check what fields are being sent.
* `subject` - Subject of the currnet form. This can be modified to make it customizable.
* `message` - Associative Array of different fields with the values submitted.

Example Plugin to handle these events. [wheelformhelper](https://github.com/xpertbot/wheelformhelper)

### Translations
New translations can be submitted using the format inside the translations folder.
