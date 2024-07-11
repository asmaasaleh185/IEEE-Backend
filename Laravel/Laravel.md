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

# Resources
- Request Lifecycle
  - https://laravel.com/docs/11.x/lifecycle

- Facades
  - https://medium.com/@sanaatrash09/what-is-facades-in-laravel-and-why-do-we-use-them-215b52898a78

- Facades
  - https://www.tutorialspoint.com/laravel/laravel_routing.htm