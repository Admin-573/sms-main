<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$FACULTY_ADD='faculty_add';
$USER='root';
$PASSWORD='';

$FACULTY_EMAIL='faculty_email';
$FACULTY_PASSWORD='faculty_password';

$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>