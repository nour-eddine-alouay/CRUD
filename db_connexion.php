<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbcrud";
//create connection
$mysqli=new mysqli($servername,$username,$password,$dbname);
//check connection
if($mysqli->connect_error){
    die("Connection failed: " . $cnx->connect_error);
}else{
    
echo "Connected successfully<br>";
}
//create data base
/*$sql="CREATE DATABASE dbcrud";
if($cnx->query($sql)===TRUE){
    echo "Data base created successfully<br>";
}else{
    echo "Error creating database: " . $cnx->error . "<br>";
}

//après la creation de la base de données on met les commande concernant la creation de la base de données comme commentaire et on cree la table
$sql="CREATE TABLE authentification(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50))";
if($cnx->query($sql)===TRUE){
    echo "Table authentification created succesfully<br>";
}else{
    echo "Error creating table authentification: " . $cnx->error . "<br>";
}*/
?>