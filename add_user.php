<?php
include 'conn.php';

$sql="insert into user (first_name,last_name,email,password)
values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]',
'$_POST[reg_date]')";
if(!mysqli_query($conn, $sql)){
    echo "Failed to connect to MySQL: ";
    exit();
}
echo "1 record successfully added...";

mysqli_free_result($sql);
mysqli_close($conn);
?>