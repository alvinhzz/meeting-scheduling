<?php
// include database connection file
include_once("database.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $mid = $_POST['member_id'];
        $mname = $_POST['member_name'];
        $memail = $_POST['member_email'];
    // update user data
    $result = mysqli_query($connect, "UPDATE members SET member_name='$mname', member_email='$memail' WHERE member_id='$mid'");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM members WHERE member_id=$id");

while($user_data = mysqli_fetch_array($result))
{
        $mid    = $user_data['member_id'];
        $mname = $user_data['member_name'];
        $memail = $user_data['member_email'];
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
                <td>Member Id</td>
                <td><input type="text" name="member_id" value="<?=$mid?>" readonly></td>
            </tr>
            <tr> 
                <td>Member Name</td>
                <td><input type="text" name="member_name" value="<?=$mname?>"></td>
            </tr>
            <tr>
                <td>Meeting Name</td>
                <td><input type="text" name="member_email" value="<?=$memail?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>