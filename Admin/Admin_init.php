<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$STUDENT_ADD='student_add';
$FACULTY_ADD='faculty_add';
$USER='root';
$PASSWORD='';

$ADMIN_NAME='admin_name';
$ADMIN_CONTACT='admin_contact';
$ADMIN_EMAIL='admin_email';
$ADMIN_PASSWORD='admin_password';

$FACULTY_MNO='faculty_mno';
$FACULTY_NAME='faculty_name';
$FACULTY_EMAIL='faculty_email';
$FACULTY_PASSWORD='faculty_password';
$FACULTY_QUALIFICATION='faculty_qualification';

$STUDENT_MNO='student_mno';
$STUDENT_NAME='student_name';
$STUDENT_EMAIL='student_email';
$STUDENT_PASSWORD='student_password';
$STUDENT_RESULT='student_result';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>