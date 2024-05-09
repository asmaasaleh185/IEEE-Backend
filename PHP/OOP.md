## Encapsulation & Abstraction
- *Encapsulation:*
> - *Encapsulation is an approach that joins data members(variables) and implementation details into a single unit called the class that implies class is formed with variables and methods present inside it.*
> - *A protection mechanism for data members present inside the class i.e data members are not accessible by end users.*
> - *Encapsulation is implemented using a private and protected access modifier.*
- *Abstraction:*
> - *The structure of representing necessary features without including the background details is specified as an abstraction.*
> - *It is the process of gaining information.*
## Inheritance
- *It is a concept of accessing the features of one class from another class. If we inherit the class features into another class, we can access both class properties. We can extends the features of a class by using 'extends' keyword.*
- *It enables code reusability and promotes hierarchical relationships between classes.*
- *Note: PHP doesn't support multiple inheritance.*
## PHP Interfaces & Polymorphism
- *Interfaces allow you to specify what methods a class should implement.*
- *Polymorphism in OOP's is a concept that allows you to create classes with different functionalities in a single interface generally, it is of two types:*
>- *compile-time (overloading)*
>- *run time (overriding)*
- *Note: polymorphism in PHP does not support overloading, or in other words, compile-time polymorphism.*
## PHP Traits
- *It is a mechanism of code reuse. Definition of trait is similar to class.*
- *A trait also is similar to an interface. The difference is that interface doesn't provide definition of method inside it, which must be done by implementing class. Trait method however, does provide definition, which may or may not be overridden by class that uses the trait.*
- *It can't be instantiated directly.*
- *Functionality of a trait is made available to a class by "use" keyword.*
## Error Handling In PHP
- *Error handling in PHP is almost similar to error handling in all programming languages. The default error handling in PHP will give file name line number and error type.*
- *Ways to handle PHP Errors:*
>- *Basic error handling: Using die() function which prints a message and exit from current script.*
>- *Custom Error handling: Creating a custom error handler in PHP is quite simple. Create a function that can be called when an error has been occurred in PHP.*

## Late Static Binding & How It Works
- *The concept of late static bindings brings in a new keyword "static" and it used to bind the function to the runtime class or the class where the function was first used. In addition to this, any static function or variable is usually executed during runtime and not during compile time. Hence, if a value needs to be dynamically assigned to a static variable, it happens during runtime.*
## Resources
>1- Encapsulation & Abstraction
>- https://www.tutorialspoint.com/explain-difference-between-abstraction-and-encapsulation-in-php
>
>2- Inheritance
>- https://www.geeksforgeeks.org/what-is-inheritance-in-php/
>
>3- PHP Interfaces & Polymorphism
>- https://dev.to/saravanasai/interfaces-and-polymorphism-in-php-practical-guide-pfc
>
>4- PHP Traits
>- https://www.tutorialspoint.com/php-traits
>
>5- Error Handling In PHP
>- https://www.geeksforgeeks.org/error-handling-in-php/
>
>6- Late Static Binding & How It Works
>- https://www.tutorialspoint.com/what-are-late-static-bindings-in-php
>