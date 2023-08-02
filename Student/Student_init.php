<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT_ADD='student_add';
$ADMIN='admin';
$FACULTY='faculty';
$USER='root';
$PASSWORD='';

$FC_NOTICE_STUDENT='fc_notice_student';
$FC_STUDENT_NOTICE_DATE='fc_student_notice_date';
$FC_STUDENT_NOTICE_NAME='fc_student_notice_name';
$FC_STUDENT_NOTICE_DES='fc_student_notice_des';

$STUDENT_NOTICE_ADD='student_notice_add';
$STUDENT_NOTICE_DATE='student_notice_date';
$STUDENT_NOTICE_NAME='student_notice_name';
$STUDENT_NOTICE_DES='student_notice_des';

$STUDENT_EMAIL='student_email';
$STUDENT_PASSWORD='student_password';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>