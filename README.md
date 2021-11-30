# Registration & Login Demo

This is a demonstration of a secure registration and login system built with PHP and SQL.

This demo has been tested with PHP 7.4.4.

# About This Project

I wanted to make a 'generic' template for a registration/login system that I could use across different projects, but I wanted the opportunity to clean up my code a little bit more. I'm sure this could use more work, so maybe I'll come back to it from time to time with improvements.

# Features

- Email activation link sent upon signup.
- Stores passwords as randomly generated md5 hashes.
- Uses PHP prepared statements for queries.
- Uses parameterized SQL statements for protection against injection.
- Includes a 'forgot password?' link that prompts for username and emails a reset code.
- Includes a 'forgot username?' link that prompts for e-mail and emails a list of associated usernames.
- Allows users to create alternate accounts with the same e-mail address (I wanted to challenge myself to develop this feature specifically, because it's one I like to see.)

# Struggles

By far the hardest thing with this project was trying to keep the PHP code separate from the view templates. I didn't realize you could just echo some text and include the template right beneath it to make the text appear on the same page. At first I was looking into AJAX solutions but it turns out I didn't even need them.

# How to Install (Local Windows)

### Install Xampp

Xampp lets you run PHP and a SQL database locally.

1. Install [https://www.apachefriends.org/download.html](Xampp)
2. In `C:\xampp\` click on `xampp-control.exe` to run.
3. When the control panel starts up, click **Start** next to Apache and MySQL.

### Clone Repo

We need to clone the repo first so you can grab the database table schema.

1. Clone this repo to `C:\xampp\htdocs`.
2. In a browser, navigate to `localhost/phpmyadmin`
3. On the left sidebar, click **New**, enter a name for your database and then click **Create**. 
4. Click on **Import** at the top.
5. Click on **Choose File**, and locate `c:\xampp\htdocs\login-demo\schema\db-tables.sql` and click **Go**.

### Edit `config.php`

This file tells your project which database to use.

1. Open `c:\xampp\htdocs\login-demo\config.php` in a code editor and update the `$dbname` variable to match what you named your database.
2. Open a browser and navigate to `localhost/login-demo` - you should see the main homepage.

### IF you decide to change the directory name (so it's no longer login-demo)

- Open `c:\xampp\htdocs\login-demo\templates\nav.php`
- Change the 'login-demo' part of the links to match your new directory name.

### Notes about Email Notifications
- The email notifications will only work once you are hosted on a server with a mailserver setup. They do not work locally.
- If you do want to use the email functionality, you'll need to change a few things:
    - The app generates emails with LINKS from the following files:
    - `/login-demo/register/index.php`
    - `/login-demo/forgot-password/index.php`
    - Be sure to update the link to match the path included.
