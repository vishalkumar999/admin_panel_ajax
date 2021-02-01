<?PHP
include 'connection.php';
session_start();

if(!isset($_SESSION['username'])){
    die();
}

$sql = "select * from user_data";

$d = mysqli_query($con,$sql);
?>
<table class="table table-bordered table-hover text-center">
<thead>
    <tr>
        <th>S No.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Query</th>
        <th colspan="2">Action</th>
    </tr>
</thead>

<?php
$sn = 1;
while($user_data = mysqli_fetch_array($d)){
    ?>


    <tr>
        <td><?php echo $sn; ?></td>
        <td><?php echo $user_data['name']; ?></td>
        <td><?php echo $user_data['mobile']; ?></td>
        <td><?php echo $user_data['email']; ?></td>
        <td><?php echo $user_data['query']; ?></td>
        <td><a href="update.php?id=<?php echo $user_data['id']; ?>"><i class="far fa-edit"></i></a></td>
        <td><a href="delete.php?id=<?php echo $user_data['id']; ?>"><i class="far fa-trash-alt text-danger"></i></a></td>
    </tr>


<?php
$sn++;
}
?>

</table>



