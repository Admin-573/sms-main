<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$USER='root';
$PASSWORD='';

$ADMIN_NAME='admin_name';
$ADMIN_CONTACT='admin_contact';
$ADMIN_EMAIL='admin_email';
$ADMIN_PASSWORD='admin_password';

$FACULTY_EMAIL='faculty_email';
$FACULTY_PASSWORD='faculty_pass';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>