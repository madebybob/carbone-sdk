# Carbone SDK

This package provides a PHP SDK for the [Carbone.io](https://carbone.io) API.

## About Carbone

Carbone is a powerful and easy to use API to convert documents from a template to a PDF. It is based on LibreOffice and can convert any document supported by LibreOffice. It is also possible to convert HTML to PDF.

## Installation

### Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require madebybob/carbone-sdk
```

## Usage

### Carbone instance

Using the SDK is very easy. You just need to create a new instance of the Carbone class and provide your API key.

```php
use MadeByBob\Carbone\Carbone;

$carbone = new Carbone('YOUR_API_KEY');
```

### Upload a template

You can upload a template to Carbone using the `upload` method. This method takes the contents of the template as a parameter.

```php
$response = $carbone->templates()->upload($content);

$templateId = $response->getTemplateId();
```

### Render a template

You can render a template using the `render` method. This method takes the template ID and the data as parameters.

```php
$response = $carbone->renders()->render($templateId, $data);

$renderId = $response->getRenderId();
```

### Download a rendered template

You can download a rendered template using the `download` method. This method takes the render ID as a parameter.

```php
$response = $carbone->renders()->download($renderId);

// Save the contents of the file yourself on your filesystem
$content = $response->getContent();
```

### Delete a template

You can delete a template using the `delete` method. This method takes the template ID as a parameter.

```php
$response = $carbone->templates()->delete($templateId);
```
