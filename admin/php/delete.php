<?php
include 'connection.php';
//get id 
$id = $_GET['id'];

//delete query
$query = " delete from user_data where id=$id ";
//fire delete query

mysqli_query($con,$query);




?>
<script>
alert("Your data deleted successfully");
location.href = 'dashboard.php';
</script>

   