# Nova TextLinked custom field

Nova Text Field with a link to a resource (or any URL) on index screen.

Nova links ID fields to a resource by default. 
The custom field is useful if you're using a [text ID field](https://github.com/laravel/nova-issues/issues/268) 
or want to **link a resource's title**, as shown below.

## Screenshot

![Nova TextLinked Field Example](https://github.com/nikans/nova-text-linked-field/blob/master/nova-text-linked-field-example.png "Nova TextLinked Field Example")

## Installation

```
composer require nikans/nova-text-linked-field
```

## Usage options

### Automatically link a resource to a title or text ID field

```
TextLinked::make('Title', 'title')
    ->link($this),
    
TextLinked::make('ID')
    ->link($this),
```

### Link a resource by `uriKey` and `id`

```
TextLinked::make('Title', 'title')
    ->linkResource($this->uriKey(), $this->id),
```

### Add a random URL

```
TextLinked::make('ID')
    ->url("https://novapackages.com"),
```
