shorty-framework
================

Base framework for quick website deployment

# Quick Examples:

## Pages
* You can load a page direct from a template (just have the template in the templates directory) e.g. contact.tpl
* You can load a page via a default controller (classes/index.php) e.g. /about and classes/index.php
* You can load via its own class. e.g. classes/login.php

## Config
You can add ini-style configuration settings to .htconfig.ini in the root directory
You can then access these using the Config class

e.g. database config
```
[database]
name=test
host=1.2.3.4
user=username
password=p@ssw0rd
```

```
 $settings = Config::init()->load('database');
$db_host = $settings->host;
```