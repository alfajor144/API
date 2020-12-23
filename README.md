# Easy API (PHP)
In this repository you will find the necessary instructions to deploy and do some tests on a simple REST API made with PHP, without framework, it is the simplest possible CRUD.

## Tools needed:
* xampp
* postman

## Deploy:
* In phpMyAdmin, execute "apitest.sql"
* In "C:\xampp\htdocs\01php", add the folder called "API"

## Some test:
* In postman, set "POST", "raw", in the body {"nombre":"jorgito"}, and send to http://localhost/01php/API/APIv1/incertp.php
* set "DELETE", send to http://localhost/API/APIv1/deletep.php?id=4



