# Hybrid\\Attr

Hybrid Attr is an HTML attributes class system. The purpose is to provide devs a system for adding filterable attributes. This is sort of like `body_class()`, `post_class()`, and `comment_class()` on steroids. However, it can handle attributes for any elements.

## Requirements

* WordPress 5.7+.
* PHP 5.6+ (preferably 7+).
* [Composer](https://getcomposer.org/) for managing PHP dependencies.

## Documentation

You need to register the service provider during your bootstrapping process.  In your bootstrapping code, you should have something like the following:

```php
$slug = new \Hybrid\Core\Application();
```

After that point, you can register the service provider:

```php
$slug->provider( \Hybrid\Attr\Provider::class );
```

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2021 &copy; [Justin Tadlock](https://themehybrid.com).
