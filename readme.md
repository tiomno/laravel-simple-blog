<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Mission: Create a simple blog system in Laravel

###You will need the following:
1. Git Installed & GitHub Account
2. Homestead / Valet / Vagrant or MAMP to run Laravel
3. IDE (PHPStorm) or Text Editor (i.e. Sublime Text)
4. Terminal or Command Line
5. MySQL Database or SQLite Database

###Estimated Completion Time: Within 2 Hours
Let’s Begin:
1. Please start a fresh 5.x Laravel project
2. Utilise Twitter Bootstrap (CSS & JS)
3. Please create the following functionality for a client:

An **Administrator** may view all existing blog posts **or see a message that no blogs are available**. A logged out user should be able to see all Active blog posts available.

The list of **Active** blogs should show it’s **Title, Excerpt Body, Published Time & Author’s Name.** Upon clicking the blogs **Title**, it should present the full blog article showing **Title, Full Body, Published Time, Author’s Name**.


An Administrator can create a new blog article with fields including **Title, Body** and **Active Status**. An Administrator can edit an existing blog and be able to update it’s **Title, Body** and **Active Status**.

###Example Schema:

 User (default Laravel user migration)        |    Post or Blog (Your choice or naming)
 ------------- | ------------- 
 id      | id  
 name     | user_id - foreign key       
 email | active - boolean
   password    | title
  remember_token     | body
   created_at    | published_at - datetime
updated_at | created_at
           | updated_at

###Todo List:

1. Creation Migrations & fill in Schema
2. Create Models with correct relationships & fillable fields
3. Create Controller with required methods
4. Create FormRequests for controller validation methods
5. Create required views for Index, Create, Edit, Show
6. Commit your code to GIT and upload to GitHub to share your work

###Extras (not required, but advantageous)

1. Delete a blog post
2. Seeder / Factory Setup
3. Basic Testing for main pages and database look-ups

