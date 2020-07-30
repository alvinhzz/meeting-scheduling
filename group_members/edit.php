<?php
// include database connection file
include_once("database.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $id = $_POST['id'];
        $mid = $_POST['member_id'];
        $gid = $_POST['group_id'];
    // update user data
    $result = mysqli_query($conn, "UPDATE group_members SET member_id='$mid', group_id='$gid' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM group_members WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
        
        $mid = $user_data['member_id'];
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
                <td>ID</td>
                <td><input type="text" name="id" value="<?=$id?>" readonly></td>
            </tr>
            <tr> 
                <td>Member ID</td>
                <td><input type="text" name="member_id" value="<?=$mid?>"></td>
            </tr>
            <tr>
                <td>Group ID</td>
                <td><input type="text" name="group_id" value="<?=$gid?>"></td>

            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>