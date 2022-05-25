<?php
include 'conn.php';

$sql="insert into user (first_name,last_name,email,password)
values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]',
'$_POST[reg_date]')";
if(!mysqli_query($conn, $sql)){
    die('Error: '.mysqli_error());
}
echo "1 record successfully added...";
mysqli_close($conn);
?>