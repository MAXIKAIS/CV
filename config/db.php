<?php

define("DSN","mysql:host=localhost;dbname=myFirstProject");
define("USER","root");
define("PASS","iroshiba");

$pdo = new PDO(DSN, USER, PASS);