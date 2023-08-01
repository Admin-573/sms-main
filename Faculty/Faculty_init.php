<?php

$DATABASE_NAME='sms';
$HOST='localhost';

$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';
$FACULTY_ADD='faculty_add';

$FACULTY_NOTICE_ADD='faculty_notice_add';

$FACULTY_NOTICE_DATE='faculty_notice_date';
$FACULTY_NOTICE_NAME='faculty_notice_name';
$FACULTY_NOTICE_DES='faculty_notice_des';

$FC_NOTICE_STUDENT='fc_notice_student';
$FC_STUDENT_NOTICE_DATE='fc_student_notice_date';
$FC_STUDENT_NOTICE_NAME='fc_student_notice_name';
$FC_STUDENT_NOTICE_DES='fc_student_notice_des';

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