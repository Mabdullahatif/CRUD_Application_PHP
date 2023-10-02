
# Book Catalog CRUD Application in PHP

This repository contains a simple CRUD (Create, Read, Update, Delete) web application written in PHP for managing a book catalog. It allows you to add, edit, and delete books from a MySQL database.
## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Setup](#setup)
3. [Features](#features)
4. [Usage](#usage)
5. [Contributing](#contributing)
6. [Initial Contributor](#initial-contributor)
7. [Acknowledgments](#acknowledgments)
 
## Prerequisites

Before running the application, make sure you have the following prerequisites installed:

- PHP
- MySQL
- Web server (e.g., Apache)

## Setup

1. Clone this repository to your local machine:

   ```bash
   git clone <https://github.com/Mabdullahatif/CRUD_Application_PHP.git>
   ```

2. Create a MySQL database named `books` and configure the database connection settings in the PHP code:

   ```php
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "books";
   ```

3. Import the SQL schema from `database.sql` into the `books` database to create the necessary table.

4. Start your web server.

5. Open the application in your web browser by navigating to `http://localhost/path/to/repository/book_catalog.php`.

## Features

- **List Books**: View a list of books stored in the database.
  - <img src="https://github.com/Mabdullahatif/CRUD_Application_PHP/assets/113658337/e02fcb99-687d-4755-8884-80358e366231" alt="Main Screen" width="600" height="300">


- **Add Book**: Add a new book to the catalog by providing the title, author, and price.
  - <img src="https://github.com/Mabdullahatif/CRUD_Application_PHP/assets/113658337/c290f746-6e65-457b-b918-d1c521eee1db" alt="Main Screen" width="600" height="300">

- **Edit Book**: Edit an existing book's information.

- **Delete Book**: Remove a book from the catalog.

## Usage

1. Launch the application in your web browser.

2. To add a new book, fill in the "Title," "Author," and "Price" fields in the "Add/Edit Book" section and click the "Add Book" button.

3. To edit an existing book, enter the book's ID along with the updated title, author, and price in the "Add/Edit Book" section and click the "Edit Book" button.

4. To delete a book, click the "Delete" button next to the book's entry in the list.


## Contributing

Feel free to contribute to this project by submitting bug reports, feature requests, or pull requests. Let's keep the spirit of Assembly programming alive!

## Initial Contributor

So far, all the work in this repository is purely done by me.

## Acknowledgments

This project was created as a basic example of a CRUD application in PHP. Feel free to use and modify it as needed for your own projects.

## LinkedIn &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Facebook &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Instagram &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Twitter

<a href="https://www.linkedin.com/in/muhammad-abdullah-atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/social-icon-3/512/social_style_3_in-306.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

<a href="https://www.facebook.com/abdullahatif362/">
    <img height="50" src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/facebook-64.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="https://www.instagram.com/abdullah._.atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_3-instagram-64.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

<a href="https://www.twitter.com/abd_allah_atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/threads-by-instagram/24/x-logo-twitter-new-brand-64.png"/>
</a>

