<?php
// include database connection file
include_once("database.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $id  = $_POST['id'];
        $gid = $_POST['group_id'];
        $min = $_POST['meeting_name'];
        $mid = $_POST['meeting_date'];
        $mis = $_POST['meeting_start'];
        $mie = $_POST['meeting_end'];
        $mip = $_POST['meeting_place'];
    // update user data
    $result = mysqli_query($connect, "UPDATE meetings SET group_id='$gid', meeting_name='$min', meeting_date='$mid', meeting_start='$mis', meeting_end='$mie', meeting_place='$mip' WHERE meeting_id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM meetings WHERE meeting_id=$id");

while($user_data = mysqli_fetch_array($result))
{
        
        $id  = $user_data['meeting_id'];
        $gid = $user_data['group_id'];
        $min = $user_data['meeting_name'];
        $mid = $user_data['meeting_date'];
        $mis = $user_data['meeting_start'];
        $mie = $user_data['meeting_end'];
        $mip = $user_data['meeting_place'];
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
                <td>Meeting ID</td>
                <td><input type="text" name="id" value="<?=$id?>" readonly></td>
            </tr>
            <tr> 
                <td>Group ID</td>
                <td><input type="text" name="group_id" value="<?=$gid?>"></td>
            </tr>
            <tr>
                <td>Meeting Name</td>
                <td><input type="text" name="meeting_name" value="<?=$min?>"></td>
            </tr>
            <tr>
                <td>Meeting Date</td>
                <td><input type="date" name="meeting_date" value="<?=$mid?>"></td>
            </tr>

            <tr>
                <td>Meeting Start</td>
                <td><input type="time" name="meeting_start" value="<?=$mis?>"></td>
            </tr>
            <tr>
                <td>Meeting End</td>
                <td><input type="time" name="meeting_end" value="<?=$mie?>"></td>
            </tr>
            <tr>
                <td>Meeting Place</td>
                <td><input type="text" name="meeting_place" value="<?=$mip?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>