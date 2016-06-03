This is a "Hello World!" Unit testing, And it shows:

 1. How to write Tests using PHPUnit.
 2. How to write Database Tests using PHPUnit and DbUnit.
 3. How to write User Interface Tests using PHPUnit and Selenium.

# Setup

* [Download phantomjs](http://phantomjs.org/download.html) and save it in your path, Ex. 

```
Windows:
C:\Windows\
C:\Windows\System32\

Linux:
/bin/
/usr/local/bin/
```
* Create a database and name it unittestingdb.
* Clone the repository into your web Server
```
git clone https://github.com/nezarfadle/phpunit-testsuite.git
```
* Import the ```database.sql``` file into the ```unittestingdb``` database.
* Install the dependencies by running Composer

``` php ./composer.phar install ```

* Go to your ```/working folder/tests/IndexTest.php``` line ( 16 ) and modify the URL to suit your custom URL

``` $this->setBrowserUrl('http://localhost:9090'); ```

* Go to your ```/working folder/tests/ArticleDaoTest.php``` line ( 16 ) and set the Database credentials

``` $pdo = new \PDO('mysql:host=localhost;dbname=unittestingdb', 'root', 'password'); ```

* Go to your working folder and run Selenium

```java -jar vendor/se/selenium-server-standalone/bin/selenium-server-standalone.jar```

* Go to your working folder and run phpunit

```php vendor/phpunit/phpunit/phpunit --debug --log-junit result.xml```


