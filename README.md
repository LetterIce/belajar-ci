# Belajar CodeIgniter

## What is URI Routing?

URI Routing associates a URI with a controller’s method.

CodeIgniter has two kinds of routing. One is **Defined Route Routing**, and the other is Auto Routing. With Defined Route Routing, you can define routes manually. It allows flexible URL. **Auto Routing** automatically routes HTTP requests based on conventions and execute the corresponding controller methods. There is no need to define routes manually.

## Setting Routing Rules

Routing rules are defined in the **app/Config/Routes.php** file. In it you’ll see that it creates an instance of the RouteCollection class (`$routes`) that permits you to specify your own routing criteria. Routes can be specified using placeholders or Regular Expressions.

When you specify a route, you choose a method to corresponding to HTTP verbs (request method). If you expect a GET request, you use the `get()` method:

```php
<?php

$routes->get('/', 'Home::index');
```
