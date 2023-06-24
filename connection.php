<?php

try {
    $con = new PDO("mysql:host=localhost:3306;dbname=revphp","root","");
} catch (PDOException $th) {
    echo  ("Error :".$th->getMessage());
}



?>