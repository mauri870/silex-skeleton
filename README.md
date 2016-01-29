## Silex App Skeleton
[![Build Status](https://travis-ci.org/mauri870/silex-skeleton.svg?branch=master)](https://travis-ci.org/mauri870/silex-skeleton)

![Silex](http://s30.postimg.org/h4pdtgpk1/silex.png)

#### What is this?
A simple Silex skeleton for organize your project.

#### Installation
```
git clone https://github.com/mauri870/silex-skeleton.git
```

### File Structure
This is just the beginning, all suggestions are welcome.
```
project -
        ├── composer.json
        ├── composer.lock
        ├── config
        │   └── providers.php  - Store all the providers
        ├── public
        │   ├── css
        │   ├── favicon.ico
        │   ├── img
        │   │   └── silex-logo.png
        │   ├── index.php  -- Initialize  application
        │   └── js
        ├── storage
        │   └── cache -- Symfony Web Profiler cache
        ├── src
        │   └── Http
                └── routes.php  - Application Routes
        │   └── app.php  - Connect all application endpoints
        ├── tests
        │   └── BasicSkeletonTest.php  - Test if application can boot and return response
        │   └── CreateApplicationTrait.php  - Create an application instance
        └── resources
            └── views
                ├── index.html.twig  -- Index test page
                └── layouts
                    └── app.html.twig  -- Test layout
```
