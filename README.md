# Easy API (PHP)
In this repository you will find the necessary instructions to deploy and do some tests 
on a simple REST API made with PHP, without any framework, it is the simplest possible CRUD.

## Tools needed:
* xampp
* postman

## Deploy:
* In phpMyAdmin, execute "apitest.sql"
* In "C:\xampp\htdocs\01php", add the folder called "API"

## Some tests (APIv1):
* (INSERT) In postman, set "POST", "raw", in the body {"nombre":"jorgito"}, and send to http://localhost/01php/API/APIv1/insertp.php
* (DELETE) set "DELETE", send to http://localhost/API/APIv1/deletep.php?id=4
* (UPDATE) set "PUT",in the body {"nombre":"jorgito"}, send to http://localhost/API/APIv1/updatep.php?id=3
* (GET ALL) set GET, http://localhost/01php/API/APIv1/readp.php
* (GET BY ID) set GET, http://localhost/01php/API/APIv1/readp.php?id=1
* (GET BY Name) set GET, http://localhost/01php/API/APIv1/readp.php?nombre=Mauro



