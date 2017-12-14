## Team Indigo - Lab Project
The repistory for the SEG lab project for Team Indigo.

## Team Members
- Omar Farooqi
- Dimitris Papatheodoulou
- Pragya Sinha
- Amin Moradi
- Agnieszka Raksimowicz

## Heroku Container URL
https://indigo-lab.herokuapp.com/

**Note:** We experienced some connection issues every now and then when using a free Heroku container which led to a Request Time Out error when connecting to the database, so the page may have to be refreshed until it successfully connects to it.

## Web Stack Used
* **PHP 7** - The back-end language
* **MySQL** - the database
* **HTML/CSS/JS with Bootstrap** - for the front-end

## Running Test Cases
The test cases were made using the PHPUnit library, and was setup & installed using [Composer](https://getcomposer.org/).

To run the tests, a test database with the name ```test-indigo``` must be created for the tests to run successfully. Since we do not want to run the tests on the main database to interfere with the deployable application, we use a test database to test all functionality with mock data.

Use the following command to run a test:
```
vendor/bin/phpunit tests/PostsTest.php
```
replacing ```PostsTest.php``` with any other files to test on as they appear in the ```tests/``` directory

In case you get issues running the test cases, delete the vendor directory and run composer update to re-install all the required packages and clean out the composer install and run the first command again.

## Schedule Of Work
* **Week 1**: Agreed on using PHP and MySQL as the main stack. Wireframed designs and how the web app would work on a high-level, using a top-down approach to break it down as we become more familiar with the tools and what needs to be built. Everyone was given resources to use to learn about the framework and how it all works together. Setup GitHub.
* **Week 2**: Once we had a basic understanding of how PHP worked, we setup our local environments using MAMP to emulate a web server locally and made the basic UI for the application for the front-end to start adding functionality to later.
* **Week 3**: Started working on a very basic prototype prototype with minimial CRUD functions with a prototype database along with setting up PHPUnit and writing basic test cases.
* **Week 4**: Further refined and added functionality to the application by working on the login/signup pages and making a better database architecture storing relevant info about the user, posts & replies. Deployed the basic version on Heroku to see how the environment worked and to make sure it was working there as well.
* **Week 5**: Redid login/signup to use Microsoft Graph API instead for better user validation and to have the application more tailored to KCL students. Had issues linking all the libraries together using Composer but fixed it with a clean install.
* **Week 6**: Refactored all the code, fixed all small bugs we could find, finalized all the documents, deployed final version to Heroku and submitted all documents.

Kanban board used (KCL GitHub's Projects): https://github.kcl.ac.uk/k1631089/SEG_LabProject/projects

## Additional APIs And Libraries Used
* [PHPUnit](https://phpunit.de/) - To run the unit tests, we used the PHPUnit library as it is the most documented and solid testing library available for PHP

* [Microsoft Graph](https://developer.microsoft.com/en-us/graph) - We used this for the login/signup functionality. Since the application is aimed at King's College London students/staff members, they would use their university email to login which is connected to Outlook. Once they log in/sign up, their email and name is stored in the application's database which is used to identify them in posts/replies later on

* [OAuth 2.0](https://oauth.net/2/) - The Microsoft Graph API uses this for successfully authenticating a user's credentials when logging in and registering

* [Bootstrap](https://getbootstrap.com/) - The design was built using this HTML/CSS/JS framework for quick prototyping
