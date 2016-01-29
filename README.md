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
        ├── app
        │   └── app.php  - Store all application logic
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
        ├── tests
        └── views
            ├── index.html.twig  -- Index test page
            └── layouts
                └── app.html.twig  -- Test layout
```
