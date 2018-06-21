# Legacy Operations Bridge

[![Downloads](https://img.shields.io/packagist/dt/netgen/legacy-operations-bridge.svg?style=flat-square)](https://packagist.org/packages/netgen/legacy-operations-bridge/stats)
[![Latest stable](https://img.shields.io/packagist/v/netgen/legacy-operations-bridge.svg?style=flat-square)](https://packagist.org/packages/netgen/legacy-operations-bridge)
[![License](https://img.shields.io/github/license/netgen/legacy-operations-bridge.svg?style=flat-square)](LICENSE)
[![PHP](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg?style=flat-square)](https://secure.php.net/)

This eZ Publish Legacy extension allows override of some operations to be performed using eZ
Platform Repository API. Main motivation behind this is better integration of Legacy Admin UI with
Solr Search Engine, which otherwise requires delayed indexing for some trivial operations, like
adding another Location to Content.

## Caution

eZ Platform uses a database connection separate from eZ Publish Legacy. If you use bridged
operations inside a transaction initiated from eZ Publish Legacy database connection, the
transaction will not apply to them.

## Installation

#### 1. Enable kernel override and kernel override autoload

In the `ezpublish_legacy/config.php` enable kernel override by uncommenting the following constant
definition:

```php
define( 'EZP_AUTOLOAD_ALLOW_KERNEL_OVERRIDE', true );
```

In your `composer.json` add the call to generate kernel override autoload array to the bottom of
`symfony-scripts` array under the `scripts` key:

```yaml
...
"scripts": {
    "symfony-scripts": [
        ...
        "eZ\\Bundle\\EzPublishLegacyBundle\\Composer\\ScriptHandler::generateKernelOverrideAutoloads"
    ],
    ...
},
...
```

#### 2. Install through Composer

Use Composer to install the bundle:

```
composer require netgen/legacy-operations-bridge:^1.0
```

#### 3. Activate legacy `ngoperationsbrige` extension

Add the following in your central `site.ini.append.php` file (usually `ezpublish_legacy/settings/override/site.ini.append.php`):

```ini
[ExtensionSettings]
ActiveExtensions[]=ngoperationsbrige
...
```

## Configuration

See [ngoperationsbridge.ini](settings/ngoperationsbridge.ini) for available configuration
options.
