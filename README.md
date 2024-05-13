[Portuguese Version](https://github.com/skay1994/portifolio-my-application/blob/master/README_PT.md)

# My application

This application is made with my [framework](https://github.com/skay1994/portifolio-my-framework).

This example with basic resources to make a simple application.

## Features

This is a list of all available resources. Other features will be added over time. See more at [framework](https://github.com/skay1994/portifolio-my-framework)

- [x] Tests with PestPHP: The base code for make tests with PestPHP

- [x] Service Container: The service container is already functional and tested, it's in an initial state with the following features:
    - [x] Class Resolver: The container will create an instance of the class and return the instance.
    - [x] Constructor Parameter: If the class has parameters in the constructor, they will be resolved/injected, if they are other classes, the container will repeat the process to return the instance to the constructor of the initial class.
    - [x] Bindings: Creates a link to a string to an instance of a class/function/others, for easy retrieval from anywhere in the application.

- [x] Facades: These are classes to facilitate access to other classes, acting as shortcuts.

- [x] Routes: A routing system using PHP 8 attributes
    - [x] Exact Routes
    - [x] Routes with parameters
    - [x] Routes with multiple HTTP methods