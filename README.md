# laravel_meta

Simple meta tags helper

----------

## Installation

$ composer require trikey/laravel_meta

After that - add Provider and Alias 

```php
'providers' => array(
    Trikey\Meta\MetaServiceProvider::class,
)
```

```php
'aliases' => array(
    'Meta'   => Trikey\Meta\Facades\Meta::class,
)
```

## Example

#### app/Http/Controllers/Controller.php

```php
Route::get('/', function () {
    Meta::set('title', 'Main page');
    return view('welcome');
});
```

#### resources/views/welcome.blade.php

```
<title>{{ Meta::get('title') }}</title>
```
