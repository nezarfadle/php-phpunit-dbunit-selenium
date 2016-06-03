This is a "Hello World!" Unit testing, And it shows:

 1. How we can write tests using PHPUnit.
 2. How we can write database tests using PHPUnit and DbUnit.
 3. How we can write User Interface tests using PHPUnit and Selenium.

# Setup

* Create a database and name it unittestingdb.
* Import the database.sql file into the unittestingdb database.
* Download phantomjs and save it in your path, Ex. 

Windows:
C:\Windows\
C:\Windows\System32\

Linux:
/bin/
/usr/local/bin/

[Download phantomjs](http://phantomjs.org/download.html)  

* Clone the repository into your web Server

git clone https://github.com/nezarfadle/phpunit-testsuite.git

* Install the dependencies by running Composer
composer install

* Go to your /working folder/tests/IndexTest.php line ( 16 ) and modify the URL to suit your custom URL
$this->setBrowserUrl('http://localhost:9090');

* Go to your working folder and run Selenium
java -jar vendor/se/selenium-server-standalone/bin/selenium-server-standalone.jar

* Go to your working folder and run phpunit
php vendor/phpunit/phpunit/phpunit --debug --log-junit result.xml


