<?php
// include database connection file
include_once("database.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $gid = $_POST['group_id'];
        $min = $_POST['group_name'];
    // update user data
    $result = mysqli_query($connect, "UPDATE meeting_groups SET group_name='$min' WHERE group_id='$gid'");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM meeting_groups WHERE group_id=$id");

while($user_data = mysqli_fetch_array($result))
{
        $gid = $user_data['group_id'];
        $min = $user_data['group_name'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">

            <tr> 
                <td>Group ID</td>
                <td><input type="text" name="group_id" value="<?=$gid?>" readonly></td>
            </tr>
            <tr>
                <td>Meeting Name</td>
                <td><input type="text" name="group_name" value="<?=$min?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>