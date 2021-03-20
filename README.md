# Nova TextLinked custom field

Nova custom Text Field with a link to a resource (or any URL) on index screen.

Nova links ID fields to a resource by default. 
The custom field is useful if you're using a [text ID field](https://github.com/laravel/nova-issues/issues/268) 
or want to **link a resource's title**, as shown below.

The field behaves just like the default text field on detail and form screens.

## Screenshot

![Nova TextLinked Field Example](https://github.com/nikans/nova-text-linked-field/blob/master/nova-text-linked-field-example.png "Nova TextLinked Field Example")

## Installation

```bash
composer require nikans/text-linked
```

## Usage options

### Automatically link a resource to a title or text ID field

```php
TextLinked::make('Title', 'title')
    ->link($this),
    
TextLinked::make('ID')
    ->link($this),
```

### Link a resource by `uriKey` and `id`

```php
TextLinked::make('Title', 'title')
    ->linkResource($this->uriKey(), $this->id),
```

### Add a random URL

```php
TextLinked::make('ID')
    ->url("https://novapackages.com"),
```
