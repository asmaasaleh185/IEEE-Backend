## Model-View-Controller Architecture
- *MVC framework is an architectural/design pattern that separates an application into three main logical components Model, View, and Controller.*
- *It was traditionally used for desktop graphical user interfaces (GUIs). Nowadays, MVC is one of the most frequently used industry-standard web development frameworks to create scalable and extensible projects. It is also used for designing mobile apps.*
- *It provides a clear separation of business logic, UI logic, and input logic and offers full control over your HTML and URLs which makes it easy to design web application architecture.*
- *It supports Test Driven Development (TDD).*
- *MVC framework includes the following 3 components: Controller, Model, View.*

## Model in MVC
- *The Model component corresponds to all the data-related logic that the user works with and represent either the data that is being transferred between the View and Controller components or any other business logic-related data.*
- *interacts with the database and gives the required data back to the controller.*

## View in MVC
- *The View component is used for all the UI logic of the application.*
- *Views are created by the data which is collected by the model component but these data aren’t taken directly but through the controller.*
- *It only interacts with the controller.*

## Controller in MVC
- *The controller is the component that enables the interconnection between the views and the model so it acts as an intermediary.*
- *It processes all the business logic and incoming requests, manipulates data using the Model component, and interact with the View to render the final output.*

## Separation of Concerns in MVC
- *Process of dividing the three responsibilities of a class(store data, perform business logic, implement public interface) into separate classes for the purpose of making a design more cohesive, less redundant, and more adaptable.*

## Resources
>Model-View-Controller Architecture
>- https://www.geeksforgeeks.org/mvc-framework-introduction/
>
>Separation of Concerns in MVC
>- https://www.youtube.com/watch?v=uf--1P5haA8&t=53s&ab_channel=SoftwareDesign
>