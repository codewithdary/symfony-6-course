# Symfony Course

Every chapter has its own associated repository. The repository will start with the episode number followed by the name. Example: ```4-setting-up-our-project```.

This repository is linked to [this YouTube video](https://www.youtube.com/playlist?list=PLFHz2csJcgk-t8ErN1BHUUxTNj45dkSqS) where we will be covering all topics that are needed to become a Symfony developer.

•	Author: [Code With Dary](https://github.com/codewithdary/) <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Technical Requirements
•	PHP 7.2.5 or higher <br>
•	Composer installed <br>

## Prerequisites
•	Basic PHP knowledge <br>
•	Low level HTML & CSS knowledge <br>
•	Object-Oriented Programming <br>

## Course Overview

| **Episode**   | **Subject** |
| ------------- |-------------|
| Ep. 1         | Introduction to Symfony |
| Ep. 2         | MVC Explained |
| Ep. 3         | Installation & Setup for Mac |
| Ep. 4         | Setting up VS Code for Symfony |
| Ep. 5         | Setting up our project & directory explained |
| Ep. 6         | Controllers in Symfony |
| Ep. 7         | Route Parameters in Symfony |
| Ep. 8         | Views in Symfony |
| Ep. 9         | Twigs layouts & blocks explained |
| Ep. 10        | How to create a database |
| Ep. 11        | Introduction to Doctrine |
| Ep. 13        | Doctrine Relationships Explained |


## 1. Introduction to Symfony

Before we kick off, I do want to let you know that this course is not everything. There are loads of advanced Symfony topics left, this is just an introduction to Symfony.

Make sure that you have a bit experience with front-end technologies like HTML5 and CSS3. JavaScript is not a must, but would make everything a bit more interactive and better looking if you do got experience with it.

For you back-end skills, make sure that you have an outstanding understanding of procedural PHP, and a decent understanding of Object-Oriented PHP since terms such as ```extends```, ```classes```, ```interfaces```, ```objects```, ```scope``` and ```accessibility``` will be used quite a lot.

The most important thing will be MVC. You don’t need to create an MVC structure with your eyes closed (we got Symfony for that) but you do need to know the concepts behind it since it will not be covered.

### **What is Symfony?** <br>
I get a lot of requests from people asking me what Symfony is. Usually, I respond with; **“Symfony is a full-stack PHP framework that uses a set of reusable components”**. Whether you’re a junior or senior developer, it costs a lot of time to create an application from scratch every single time, and that’s where Symfony comes into play.

### **Advantages of Symfony** <br>
1.	Faster Development
2.	Use of Components
3.	Reuse pieces of code

**Coding standards** <br>
Every single programming language has its own set of coding standards. Most of them will be equal to another, but there are some slight changes here and there. Luckily, Symfony created their own coding standards which [you can find right here]( https://symfony.com/doc/current/contributing/code/standards.html). I recommend you to quickly scroll through them and see if you find something that you haven't seen before.

### How to use this course

There are several ways on how you could approach this course. There are a lot of courses out there with more videos, but is that really the key to success?

I like to keep my courses short and straight to the point. Not every single topic in Symfony will have a separate video, because we will be using certain elements within videos.

In this course, we will be covering the following chapters:
-	Introduction
-	Installation & Configuration
-	Controllers & Routes
-	Views & Assets 
-	Databases & Doctrine
-	We’re going to create a project
-	We’re going to talk about Authorization in Symfony
-	Services and Service Containers
-	We’re going to write tests, so Unit Tests, HTTP Tests and database tests
-	We’re going to dive into Mailing and Notifications
-	Then we got some random topics which might be important for you, so the queue, Jobs, Events, Broadcasting, sessions and cookies.

### **Source code** ##

The source code of this course will be available in two ways, and the best possible way is through GitHub!

The main branch will consists of all chapters in one single source code. Every single video I create has its own branch where you will see a pattern, since all branches start with the video number, followed with the title of the video. Example: {4-creating-first-project}.

If you don’t like to work with GitHub, you will also find a zip file attached to every chapter where you will find a PDF file (this one), which will basically be the video written down for you, with the source code.

### **Invest time** ##

This course will not be everything. You need to put extra work into it as well. You can’t just want tutorials on Udemy and YouTube and expect to be a pro in it.

Most advanced developers will agree with me that you develop your skills by running into issues and finding the solutions yourself.

How I like to work is showing you both the happy path and the unhappy path. IF you don’t agree with that, I’m sorry but thank me later.

## How to get in touch

There are multiple ways on how you can get in touch if you’re running into issues. I got to say that it’s difficult at times to maintain and respond to everyone, but I’ll definitely do my best.

### **Github**

The first way is through Github. My username is [Codewithdary](https://www.github.com/codewithdary), where you will find loads of repositories related to Symfony and Laravel.

### **Instagram**

My [Instagram](https://www.instagram.com/codewithdary) username is codewithdary as well, and next to coding issues, you’ll find more personal stuff about me over here.

### **Udemy**

You can of course always reach our on this platform!

### **YouTube**

If you are interested in learning more about coding, you can check me out on [YouTube](https://www.youtube.com/channel/UCkzGZ6ECGCBh0WK9bVUprtw) where you’ll can find me under the name of Code With Dary. I’m a developer and educator who created online courses in PHP, JavaScript, Laravel and TailwindCSS to help everyone out.

### **Patreon**

If you are interested in getting into my Discord group and interact with other up and coming developers (and me) about your coding issues, my [Patreon](https://www.patreon.com/user?u=30307830) will be the right place for you!

## Why should you use a framework?

Early in the days, web development looked completely different than nowadays. Next to the components, developers we’re responsible for writing the code for the business logic as well. Most of you probably know that there are many frameworks and libraries available which will make it a lot easier to code, but it wasn’t always like that.

With PHP, you will be using a lot of components and packages. Frameworks like Symfony and Laravel, prepackage a collection of third-party components together, which will eventually be a custom framework. What will that be? Think about things like: <br>
•	Configuration files <br>
•	Service providers <br>
•	Prescribed directory structures <br>
•	Application bootstraps <br>

All these points will define the benefit of using a framework, since someone else has already make decisions not just about individual components for you, but also about how those components should fit together.

Let’s look at it the other way around. Where would you start yourself if you have to create a framework yourself? Probably somewhere with the route HTTP request, right? Since you need to evaluate all of the HTTP request and response libraries available, and pick the right one. Then what? Well, you need to pick a router, followed with a route configuration file. Where will you be storing these files? And don’t forget, where does the Controller fit? All these questions, are answered when you start using a framework.

## 2. MVC Explained

In the first chapter of this course we have touched on MVC a little bit. In coding, MVC is a design pattern, or better to say a software architecture which stands for Model View Controller. When using MVC, you will structure your application by separating the domain, application, and business logic from the rest of the user interface. 

### **Model**
The model layer manages the fundamental behaviors and data of the application. It will interact with the requests, respond to instructions, and even notify observers in event-driven systems.

### **View**
The view is basically the user interface of your application. What you will be doing is pulling data from the database in the model based on a request from the Controller, and translate it into data that you can use inside the view.

### **Controller**
The Controller will take HTTP requests, so user input from the browser, gets the right data out of the database, validates the user input, and eventually sends a response back to the user.

In the model, you don’t want to use View or Controller code. The other way around as well. You don’t want to perform SQL queries inside your controller, let alone in your view.

All these components, are defined as the MVC design pattern. In my personal opinion, Symfony is huge because it’s using the Model View Controller design pattern. Well, I need to rephrase that, because Symfony contains MVC, but does not constrain it.

## 4. Installation
-- To be Continued --

Symfony has four different ways on how you could create a project. In my personal opinion, using the Symfony installer or the Composer installer are the easiest ways. I’ll be showing how you can create a project through both of them on Mac, Linux and Windows.

### **Symfony installer** <br>
In order to use the Symfony installer, we got to make sure that we create a Binary. Therefore, we need to perform the following command depending on your OS:
```
Mac -  curl -sS https://get.symfony.com/cli/installer | bash
Linux - wget https://get.symfony.com/cli/installer -O - | bash
Windows – Download the setup.exe right here -> https://get.symfony.com/cli/setup.exe
```

As the URL implies, this will pull in Symfony’s CLI installer, which will allow you to install a Symfony project through the CLI. When you perform the command, you'll see that it will ask you to configure Symfony on your local system. I prefer to add a path to my configuration file, so let's copy the line that looks like this:
```
export PATH=”$HOME/.symfony/bin:$PATH”
```

Open a new tab inside the CLI, because we need to access the hidden ```bashrc``` file inside the root of our OS:
```
nano ./bashrc
```

Paste the link that we copied somewhere in the ```bashrc``` file.

If we save our ```./bashrc``` file, we are ready to create our first project. In order to create a new project, you got to write down the keyword symfony, followed with the keyword new, followed with the folder name. In our case, let’s call it ```movies```. Be aware that this will be your project name.
```
symfony new movies
```

You have the option to pass in a ```--full``` flag which will install all packages that you need to build web application, be aware that the size of your project will be a lot bigger.
```
symfony new movies --full
```

You also have the option to change up your version number as well. If you perform the ```symfony new movies``` command, Symfony will always pull in a project with the most up to date version number. You can change this up by adding a ```--version={VERSION_NUMBER}``` flag to it.
```
symfony new movies –version=4.0
```

This command will install a Symfony project with a version number of 4.0.

### **Composer installer** <br>
The second method is to install Symfony through Composer. Make sure that you have Composer installed on your local machine before you perform the following command, otherwise it won’t recognize the keyword ```composer```. Inside the CLI, you need to perform the following command:
```
composer create-project symfony/skeleton movies
```

### **Check if settings are OK** <br>
Like I’ve mentioned at the beginning of this repository, you need PHP 7.2.5 or higher installed on your local machine. In order to perform the command, we got to make sure that we are inside the Symfony folder that we just created. Let’s change directories.
```
cd movies
```

If you’re not sure if you got that installed, you can run the following command to see if your local machine meets the requirements.
```
symfony check:requirements
```

If you have your environment setup correctly, you will be hit with the following message:
```ruby
[OK]
Your system is ready to run Symfony projects
```

### Open project in the browser
Symfony’s CLI comes with a web server that is very easy to use. In order to use it, you need to run the following command inside the project directory:
```
symfony server:start 
```

This will return back a message which says that your web server is indeed listening, and it can be accessed through your localhost. 

```ruby 
EXAMPLE
[OK] Web server listening
	The web server is using PHP FPM 8.0.6
	http://127.0.0.1:8000
```

127.0.0.1 is the standard ipv4 address for projects that run on localhost and :8000 is the first available port.

You can copy the link and paste it inside the browser, or you can perform the following command which will open it directly in the browser through the CLI:
```
symfony open:local
```

## 5. Setting up VS Code for Symfony
Setting up VS Code for Symfony

Once you want to work with a framework such as Symfony, you need to make sure that you’re setting up your code editor in the right way.

We obviously need to make sure that we install Visual Studio Code from their [official website](https://www.code.visualstudio.com).

When you want to install an extension, you need to access the extensions market, this can be done in the left side bar, where you need to click on the 4 squares.

I personally think that the following extensions are Must-Haves when working with Symfony:<br>
•	Community Material Theme (Extra)<br>
•	PHP Intelephense<br>
•	PHPDoc Comment<br>
•	PHP Namespace Resolver<br>
•	HTML Snippets<br>
•	JavaScript (ES6) code snippets<br>
•	Symfony code snippets and Twig Support & yaml<br>
•	Symfony for VSCode<br>
•	Twig<br>
•	Twig Language<br>
•	Twig Language 2VScode Great Icons<br>
•	Bracket Pair Colorizer<br>
•	Emmet Live<br>


## 6. Project structure

If we open our project in any code editor, you can see a very thin project because we pulled in **Symfony’s skeleton**. These are all added in the root directory called ```movies```. The Symfony Skeletion doesn't add many dependencies, but only the components that are needed to run a Symfony project in the browser.

| **Name**       | **Explanation** |
| -------------  |-------------|
| bin            | Has the ```console``` file which is the main entry point |
| config         | Default and sensible configuration files |
| migrations     | Place where you store your database migrations |
| public         | Has the ```index.php``` file which will be the main entry point for all dynamic http resources |
| src            | Most important folder, all code you write will be stored right here |
| var            | Contains all ```caches```, ```logs``` and files that are generated at runtime by the application |
| vendor         | Had the files that you pull in through Composer |
| .env           | You store individual working environment variables that you can use throughout your app |
| composer.json  | Specifies a common project properties, meta data and dependencies |
| composer.lock  | When running ```composer install``` for the first time, or when running ```composer update``` a lock file called composer.lock will be created  |
| symfony.lock   | It is the proper lock file for Symfony recipes instead of trying to guess via the state of composer.lock |


The biggest piece of advice I can give to you is to never update/delete the vendor directory because you’ll be running into conflicts when you need to update your packages. The best way to update/delete the vendor directory is to either overwrite the vendor directory or to overwrite functions, but we will get into that later on.

## 7. Controllers in Symfony

Controllers play a huge role in the MVC pattern since they are basically classes that will organize the logic of one or more route together, **in one place**!

Keep in mind that you don’t need to put all your application’s logic inside the controller, but see it as the traffic cops that route HTTP requests around your in your application.

Before we create our first controller, we need to take a moment to talk about your ```configuration format```. In Symfony, you got the following options:

| **Format**       | **Explanation** |
| -------------  |-------------|
| YAML            | Simple, clean and readable, but not all IDEs support autocompletion and validation for it |
| XML         | Autocompleted/validated by most IDEs and is parsed natively by PHP, but sometimes it generates configuration considered too verbose |
| PHP     | very powerful and it allows you to create dynamic configuration with arrays or a ConfigBuilder |

I’m not going to tell you which one you should use, because every single one of them is a good option. Therefore, I recommend you to use the one you’re most comfortable with. We will be using ```annotations``` in this course so that’s what we will focus on.

A pretty cool feature in Symfony is the console command (which is equal to Artisan in Laravel). It allows you to create certain files through the CLI. What’s the benefit of using Symfony's console command? Well, you don’t need to right click on a folder, create a new file, name it, add PHP tags, give it a namespace and a class name.

Before we can use the make command, we got to make sure that we pull in Doctrine maker through Composer.
```
composer require doctrine maker
```

With Doctrine maker, we can create a controller (and more) with the following command:
```
symfony console make:controller MoviesController
```

The last param will be the name of your class and file. In our case, it will be ```MoviesController```. The output will be a ```success``` message with the path of our Controller. In our case, it will be stored in the ```src/Controller/``` folder where a file has been added with the name of ```MoviesController.php```. 

**Quick note**, keep in mind that the file name needs to be equal to the class name, otherwise you’ll run into some errors.

By default, an new controller file will be using the following three use statements:
```ruby
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
```

The class we created extends the AbstractController, which is needed to return something.
```ruby
class MoviesController extends AbstractController
```

The real magic of our application will happen inside the ```MoviesController``` class, since we’re going to create routes and methods in here.

Right above our ```index()``` method, you’ll see something which might look like a comment, but it’s actually a route as an attribute that will define the route for the method mentioned right below it. 

The first parameter will be the endpoint that you need to add inside the URL. In our case, it will be ```/movies```. The name is an optional parameter, which will define the name of our endpoint. 

```ruby
#[Route('/movies', name: 'movies')]
```

If we navigate to the browser and change our endpoint to ```127.0.0.1:8000/movies```, you will see the JSON response that was automatically added inside the ```index()``` method.

### What will happen if the endpoint does not exist?
This is a pretty interesting question since it will definitely happen that you hit the wrong endpoint. Let’s change our endpoint from ```/movies``` to ```/movie```.

```ruby
#[Route('/movie', name: 'movies')]
```

Let’s refresh the ```127.0.0.1:8000/movies``` endpoint we got open inside the browser, and you can see that we’ve been hit with the following message:
```
No route found for “GET http://127.0.0.:8000/movies”
```

Finally, our first error message. This error message appears because the endpoint does not exist.

### What is the difference with previous Symfony versions?
If you are using an older PHP version or even maybe a better version in the future, your annotations or attributes will probably look different than mine, even if you Google around for issues with your route. 

Annotation methods used to look like this:
```ruby
/**
 * @Route("/movies", name="movies")
*/
public function index(): Response {

}
```

**Quick note**, the route above still works. You are not obligated to use the new method.
 
### What is the logic behind the Controller?
If we open the ```/config/routes/annotations.yaml``` file (which actually isn’t an annotations file but a bundle), you will see that something is being done with a controller.

```ruby
controllers:
    resource: ../../src/Controller/
    type: annotation
```

What this piece of code will do is creating a route from the controller action methods and their route annotations.

## 8. Route Parameters

One of the most common things in Symfony (and any other framework/programming language) are routes with parameters. In the previous chapter, we defined a basic route to ```/movies```. If we take a look at all the HTTP methods down below, you can see that this route should eventually get all available movies in the database.

What if you want to show one specific movie to a user? Let’s say that we have a movie in our database/list with the name of Inception, do you want do define your route for every single movie as shown below?
```ruby
#[Route('/movies/inception', name: 'movies')]
```

Well, the answer is no… here’s when you can use route parameters. It’s basically a route that has a parameter inside the URL structure, which will be a variable. Since it’s a variable, we have the opportunity to change it based on the names we got inside our database.

In order to define a route parameter, you need to wrap your variable inside curly braces right after the actual endpoint. 

```ruby
#[Route('/movies/{name}, name: 'movies')]
```

Be aware that we’re going to pass in the name of a specific movie, but a variable that will represent that specific movie. Once again, this can be an id, name or slug.

If we navigate to the browser and change our endpoint to ```127.0.0.1:8000/movies/inception```, you can indeed see that this works fine.

When working on large web applications, you will probably use tons of endpoints to showcase pages to users. There’s a command in Symfony which will show you all routes that are available in your project.
```
symfony console debug:router
```

Next to the name parameter inside the route, you can add the HTTP verb you want to perform on your route.
```ruby
#[Route('/movie', name: 'movies', methods:[‘GET’, ‘HEAD’)]
```

### Available HTTP methods on a resource

| **Verb**        | **Path**           | **Action**  | **Route Name**        | **Description**   |
| ------------- |-------------| -----| ------------- |-------------|
| GET         | /movies | index | movies.index | Get all movies |
| GET         | /movies/create | create | movies.create | Get new created movies |
| POST         | /movies | store | movies.store | Create a new movie |
| GET         | /movies/{movie} | show | movies.show | Get data of specific movie |
| GET         | /movies/{movie}/edit | edit | movies.edit | Edit specific movie |
| PUT/PATCH         | /movies/{movie} | update | movies.update | Update a specific movies |
| DELETE         | /movies{delete} | destroy | movies.destroy | Delete a specific movie |

## 9. Views

If you have reached it up until this point, you know the basics of controllers. The next logic step is to focus on views. A view represents the template that will be shown to the end user on the screen.

We’re not going to create basic ```.html``` files but we’re going to use a custom templating engine called Twig. Compared to views in PHP, twig has its own syntax and learning curve. 

Views will be shown based on a method in the controller. By default, your ```index()``` methods returns JSON, and it’s finally time to get rid of it.

In order to show a view from the controller, you need to return the ```render()``` method. 
```ruby
#[Route('/movies', name: 'movies')]
public function index(): Response
{
    return $this->render();
}
```

If your using a modern code editor, you will see that the ```render()``` method throws an error. This happens because it accepts the path of a twig template.

By default, twig templates are stored inside the ```/templates``` folder in the root of our directory where you can find a base file called ```base.html.twig```. Let’s create a new file called ```/templates/index.html.twig``` and let’s also add a simple header right here.
```ruby
<h1>
    Welcome to my Symfony course :)
</h1>
```

This obviously won’t work immediately, because remember, we do need to pass in the view inside the ```render()``` method. 

Keep in mind that you don’t need to define the ```/templates``` folder inside the ```render()``` method because it knows that it needs to look inside the templates folder.
```ruby
#[Route('/movies', name: 'movies')]
public function index(): Response
{
    return $this->render('index.html.twig');
}
```

If we refresh our ```127.0.0.1:8000/movies``` endpoint, you’ll see the ```h1``` printed out.

### Optional parameters in the render method
The ```render()``` method accepts another parameter which is optional. Later on, we’ll learn how to interact with the database inside the controller. Obviously, you need to send something back to the view. To do this, we can add a comma after our first parameter (which is the view name), then we’re going to return an array straight into the view.
```ruby
#[Route('/movies', name: 'movies')]
public function index(): Response
{
    return $this->render('index.html.twig', [
        'title' => 'Inception'
    ]);
}
```

It’s a little bit different to print out values inside twig since it needs to be wrapped around a double set of curly braces ```{{ }}```. Then inside the curly braces, we can simply write down the key name from the controller. We do not need to add a $ sign to let our file know that we're working with a variable, twig will automatically identify it as a variable.

```ruby
<h1>
    {{ title }}
</h1>
```

### More info about variables
A pretty cool feature in Symfony is the ```dump()``` method, which is a function that will provide more information about a template variable.
```ruby
<h1>
    {{ dump(title) }}
</h1>
```

If we refresh our ```127.0.0.1:8000/movies``` endpoint, you can see that the data type of our ```title``` is a string.

## 8. Twig layout explained

When developing large scaled web applications, you usually want to reuse components, especially when it comes to layouts. You don’t want to redefine your stylesheet, JavaScript file, font awesome icons and all those other utilities on every single page. 

Even if we dive into the actual content of a page, you don’t want to define your head tags and/or footer tags for every single page. 

What you should be doing instead is using the base.html.twig file as your layout, and add content that changes inside the ```index.html.twig``` file. 

Let’s open our ```base.html.twig``` file and see what we got in here.

```ruby
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
```

Right here, you can see some elements that we haven’t seen before.

| **Code**       | **Explanation** |
| -------------  |-------------|
| {% block {NAME} %} {% endblock &}            |  A block is basically a place or location where a child template can extend their content. If we extend the base file inside the index file, you don’t need to define the title tags but just the blocks in case you want to change the value   |
| {% block body %} {% endblock %}         | Main content of the index page will be replaced with the block body inside the body tags, this is the location where all the magic will happen

Let’s navigate to the ```index.html.twig``` file and remove everything we got. If you want to overwrite the ```base.html.twig``` file, you got to make sure that you extend that page on the first line.
```ruby
{% extends 'base.html.twig' %}
```

What we’re doing right below our extends, is saying that we want to copy the entire ```base.html.twig``` page behind the scenes, and edit certain blocks. 
 
An example might be the following, where we extend the body block.
```python
{% block body %}
    <h1>
        New body extended from the base.html.twig file
    </h1>
{% endblock %}
```

### Loops inside twig

Before we can loop over values inside our twig, we do need to create an array inside the controller that we pass to the view.
```ruby
#[Route('/movie', name: 'movies')]
public function index(): Response
{
    $movies = [ 'Avengers: Endgame', 'Inception' , 'Loki', 'Black Widow'];

    return $this->render('index.html.twig', array(
        'movies' => $movies
    ));
}
```

Adding ```{{ movies }}``` inside the view won’t work because you can’t print out an array as a string, so we got to make sure that we loop over our array values. 

```ruby
{% block body %}
    {% for movie in movies %}
        <li>
            {{ movie }}
        </li>
    {% endfor %}
{% endblock %}
```

If we refresh our ```/movies``` endpoint, you’ll see that all movies have been printed out as a list item. 

### Global variables

When working on projects, you sometimes want to define a variable that you can use throughout your entire application. Instead of passing it through every controller, you can define a global variable inside the ```/config/packages/twig.yaml``` file. 

Inside the ```twig.yaml``` file, we need to create a new section below the ```default_path```. In here, we need to pass in a name and value.

```ruby
twig:
    default_path: '%kernel.project_dir%/templates'
    globals:
        project_title: Code With Dary
```

Printing the value of ```project_title``` out in the view works in the same exact way as printing out any variable.

```ruby
{% block body %}
    {{ project_title }}
{% endblock %}
```
