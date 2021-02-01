<?php
include 'links.php';
include 'connection.php';
session_start();

$id =  $_GET['id'];
// select all the required value 
$query = " select * from user_data where id = $id ";
// fire query
mysqli_query($con,$query);

$val = mysqli_fetch_array(mysqli_query($con,$query));

if(isset($_POST['submit'])){

// echo $_SERVER['PHP_SELF']; YEH FUNCTION CURRENT FILE KA PATH RETURN KARTA HAIN

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$query = $_POST['query'];

// this is update query
$query_1 = " UPDATE `user_data` SET `name`='$name',`mobile`='$mobile',`email`='$email',`query`='$query' WHERE id = {$id}";

//fire query
mysqli_query($con,$query_1);

header('location:dashboard.php');

}

?>

<form method="post">
        <label>Name</label>
        <input type="text"  name="name" value="<?php echo $val['name'] ;?>"><br><br>

        <label>Mobile</label>
        <input type="number"  name="mobile" value="<?php echo $val['mobile'] ;?>"><br><br>

        <label>Email</label>
        <input type="email"  name="email" value="<?php echo $val['email'] ;?>"><br><br>

        <label>Query</label>
        <input type="text" name="query" value="<?php echo $val['query'] ;?>"><br><br>

        <button type="submit" name="submit">Update</button>
        &nbsp;
        <button type="reset">Reset</button>
</form>