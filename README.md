# TCC
 Bachalor Thesis - a project for the University 

 Running PHPUnit Tests ( Step-by-Step )

1) install the Composer 
### composer install

2) test dependencies should be installed
 ### composer require --dev phpunit/phpunit

3) Create the alias in Composer
### composer dump-autoload

4) Run the Unit Test
### vendor/bin/phpunit tests/Unit/RegistrationTest.php
