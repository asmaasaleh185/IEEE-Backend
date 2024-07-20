# Request Lifecycle
- *The goal of this document is to give  a good high-level overview of how the Laravel framework works. By getting to know the overall framework better, everything feels less "magical" and you will be more confident building your applications.*
## *First Steps*
- *All requests to a Laravel application enter through the `public/index.php` file, which loads the Composer autoloader and retrieves the Laravel application instance from `bootstrap/app.php`. The application/service container is then created.*
## *HTTP / Console Kernels*
- *Requests are routed to either the HTTP kernel or the console kernel based on their type. The HTTP kernel initializes bootstrappers for error handling, logging, and environment detection before handling requests. It then processes the requests through the application's middleware stack, handling tasks such as HTTP sessions, maintenance mode checks, and CSRF token verification. The kernel receives a Request and returns a Response.*
## *Service Providers*
- *Service providers bootstrap and configure Laravel's various components, such as database, queue, validation, and routing. Laravel instantiates and registers service providers, then calls their boot methods. This process is critical for the framework's functionality. User-defined or third-party service providers are listed in `bootstrap/providers.php`.*
## *Routing*
- *Once the application is bootstrapped and service providers are registered, the request is dispatched to a route or controller by the router. Middleware filters or examines HTTP requests. For example, authentication middleware redirects unauthenticated users to the login screen. The route's controller method executes and returns a response, which travels back through the middleware.*
## *Finishing Up*
- *After the route or controller method returns a response, it travels back through the middleware. The HTTP kernel's handle method returns the response object, which is then sent to the user's web browser, completing the request lifecycle.*
## *Focus on Service Providers*
- *Service providers are key to bootstrapping a Laravel application. They register and initialize the application instance, making the framework functional. User-defined service providers are stored in the `app/Providers` directory, and the `AppServiceProvider` is a common place to add custom bootstrapping and service container bindings. Large applications may benefit from multiple service providers for more granular bootstrapping.*
<hr>

# Facades
- *Facades provide a static interface to classes that are available in the application’s service container (which is a place to store variables and objects to use them when we need). Which mean that we can use functions without making an object from class.*
- *Facades make code faster to write, easier to read and more organized.*
- *Laravel includes many built-in facades such as Route, Cache, DB, Auth, and Config. Each of these facades provides a static interface to different components of the framework.*
<hr>

# laravel routing
- *In Laravel, all requests are mapped with the help of routes. Basic routing routes the request to the associated controllers. Routing in Laravel includes the following categories:*
## *Basic Routing*
- *All the application routes are registered within the app/routes.php file. This file tells Laravel for the URIs it should respond to and the associated controller will give it a particular call*
```php
Route::get('/', function () {
    return view('welcome');
});
```
## *Route Parameters*
- *Sometimes in the web application, you may need to capture the parameters passed with the URL. For this, you should modify the code in routes.php file.*
```php
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
```
- *Optional parameters can be specified with a `?`:*
```php
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
```
## *Named Routes*
- *Named routes allow a convenient way of creating routes. The chaining of routes can be specified using name method onto the route definition.*
```php
Route::get('user/profile', 'UserController@showProfile')->name('profile');
```
<hr>

# Blade Templates and how it works
- *The Blade is a powerful templating engine in a Laravel framework. The blade allows to use the templating engine easily, and it makes the syntax writing very simple. The blade templating engine provides its own structure such as conditional statements and loops.*
- *To create a blade template, you just need to create a view file and save it with a .blade.php extension instead of .php extension.*
## Template Inheritance
- *Blade allows you to define a master layout that can be extended by other views. This is useful for defining a common structure for your application.*
- *The `@extends` directive is used to specify the layout a view extends.*
- *The `@section` directive defines a section of content, and the `@yield` directive is used in the master layout to output the sections from the child views.*

```php
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

<!-- resources/views/child.blade.php -->
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <p>This is my body content.</p>
@endsection 
```
## Displaying Data
- *If you want to print the value of a variable, then you can do so by simply enclosing the variable within the curly brackets.*
- Syntax:  `{{$variable}}; ` 
## Blade Template Control Statements
- *Blade templating engine also provides the control statements in laravel as well as shortcuts for the control statements.*
```php
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@for ($i = 0; $i < 10; $i++)
    <p>The current value is {{ $i }}</p>
@endfor

@while (true)
    <p>I'm looping forever.</p>
@endwhile
```

## Benefits of Blade
- *Clean Syntax: Blade provides a clean and concise syntax for writing views.*
- *Reusable Components: With components and slots, you can create reusable and maintainable pieces of HTML.*
- *Template Inheritance: Blade’s template inheritance makes it easy to create a consistent look and feel across your application.*

# Resources
- Request Lifecycle
  - https://laravel.com/docs/11.x/lifecycle

- Facades
  - https://medium.com/@sanaatrash09/what-is-facades-in-laravel-and-why-do-we-use-them-215b52898a78

- Facades
  - https://www.tutorialspoint.com/laravel/laravel_routing.htm
- Blade Templates and how it works
  - https://www.javatpoint.com/laravel-blade-template