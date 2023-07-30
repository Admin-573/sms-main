<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$USER='root';
$PASSWORD='';

$STUDENT_EMAIL='student_email';
$STUDENT_PASSWORD='student_password';

$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>