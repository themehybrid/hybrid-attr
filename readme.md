# Hybrid\\Attr

Hybrid Attr is an add-on package for the [Hybrid Core](https://github.com/themehybrid/hybrid-core) WordPress framework. This is an HTML attributes class system. The purpose is to provide devs a system for adding filterable attributes. This is sort of like `body_class()`, `post_class()`, and `comment_class()` on steroids. However, it can handle attributes for any elements.

## Requirements

* WordPress 4.9+.
* PHP 5.6+ (preferably 7+).
* [Composer](https://getcomposer.org/) for managing PHP dependencies.

## Documentation

This project is a part of the Hybrid Core framework. It may require other packages, which will be installed via Composer.

### Installation

First, you'll need to open your command line tool and change directories to your theme folder.

```bash
cd path/to/wp-content/themes/<your-theme-name>
```

Then, use Composer to install the package.

```bash
composer require themehybrid/hybrid-attr
```

### Register the service provider

You need to register the service provider during your bootstrapping process.  In your bootstrapping code, you should have something like the following:

```php
$themeslug = new \Hybrid\Core\Application();
```

After that point, you can register the service provider:

```php
$themeslug->provider( \Hybrid\Attr\AttrServiceProvider::class );
```

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2021 &copy; [Justin Tadlock](https://themehybrid.com).
