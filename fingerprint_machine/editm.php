<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
        $mid = $_POST['machine_id'];
        $mcd = $_POST['machine_code'];
        $mxid = $_POST['max_id_numbers'];
        $gid = $_POST['group_id'];
    // update user data
    $result = mysqli_query($conn, "UPDATE fingerprint_machine SET machine_id='$mid',machine_code='$mcd',max_id_numbers='$mxid',group_id='$gid' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM fingerprint_machine WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    
        $mid = $user_data['machine_id'];
        $mcd = $user_data['machine_code'];
        $mxid = $user_data['max_id_numbers'];
        $gid = $user_data['group_id'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="editm.php">
        <table border="0">
            
            <tr> 
                <td>Machine ID</td>
                <td><input type="text" name="machine_id" value="<?=$mid?>"></td>
            </tr>
            <tr> 
                <td>Machine Code</td>
                <td><input type="text" name="machine_code" value="<?=$mcd?>"></td>
            </tr>
            <tr> 
                <td>Max Id Numbers </td>
                <td><input type="text" name="max_id_numbers" value="<?=$mxid?>"></td>

            </tr>
            <tr>
                <td>Group Id</td>
                <td><input type="text" name="group_id" value="<?=$gid?>"></td>

            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>