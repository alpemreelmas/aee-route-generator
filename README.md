
# Route Generator

This is developed for [larabase](https://github.com/alpemreelmas/larabase). This package is one of core packages of larabase which is responsible for creating dynamic routes for modules with a single file.

### ⚠️ Warnings
- Every module should have route_generator.php
## Usage/Examples
In below, you'll see some commands and usage example of the package.
First step create a route_generator.php file at the root of the module folder.
Route_generator.php file should contains your route information which you would like show users.
You should determine title, permission, data-feather-icon, routes as a required properties.
## Nested Route
There are two types of route that we support for now. One of them is nested route which is collapsable. As you can see there is a permission under the title, I will be referring it as a global permission. Under the routes key, you can see two type of usage
One of them is an array format to determine title, route and permission. In this case title and route are required but permission is optional property
Another one is just route using url or route (you can also use laravel helper functions)


```php
<?php

return [
        "title" => "User Management",
        "permission" => "user_access",
        "data-feather-icon" => "users",
        "routes" => [
            [
                "title" => "Users",
                "route" => url("/user-management/users"),
                "permission" => "user_access"
            ],
            [
                "title" => "Roles",
                "route" => url("/user-management/roles"),
                "permission" => "role_access"
            ],
            "Permissions" => url("/user-management/permissions")
        ],
  ];

```

## Single Route

Single route is consist of title, permission, data-feather-icon and routes same as nested route. Difference between nested and single is single route is not collapsable in the sidebar. It consist of just one route as below.

```php
<?php

return [
    "title" => "User Management",
    "permission" => "user_access",
    "data-feather-icon" => "users",
    "routes" => url("/user-management/permissions")
  ];
```

## Generate Dynamic Routes   

To generate dynamic routes, you can use :
```bash
$ php artisan larabase:generate-routes  
```

## Authors

- [@alpemreelmas](https://www.github.com/alpemreelmas)


## 🚀 About Me
I'm a full stack web developer who is also student at [Collegium Da Vinci (CDV)](https://cdv.pl/en/) in Poznan/Poland.

