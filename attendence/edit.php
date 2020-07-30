<?php
// include database connection file
include_once("database.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
        $id = $_POST['id'];
        $mid = $_POST['meeting_id'];
        $mcd = $_POST['member_id'];
        $mxid = $_POST['group_id'];
        $gid = $_POST['member_name'];
        $gie = $_POST['status'];
        $ade = $_POST['attendance_time'];
    // update user data
    $result = mysqli_query($connect, "UPDATE meeting_attendance SET meeting_id='$mid', member_id='$mcd',  	group_id='$mxid', member_name='$gid', status='$gie', attendance_time='$ade' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM meeting_attendance WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
        
        $mid = $user_data['meeting_id'];
        $mcd = $user_data['member_id'];
        $mxid = $user_data['group_id'];
        $gid = $user_data['member_name'];
        $gie = $user_data['status'];
        $ade = $user_data['attendance_time'];

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
                <td>ID</td>
                <td><input type="text" name="id" value="<?=$id?>" readonly></td>
            </tr>
            <tr> 
                <td>Meeting ID</td>
                <td><input type="text" name="meeting_id" value="<?=$mid?>"></td>
            </tr>
            <tr>
                <td>Member ID</td>
                <td><input type="text" name="member_id" value="<?=$mcd?>"></td>
            </tr>
            <tr>
                <td>Group ID</td>
                <td><input type="text" name="group_id" value="<?=$mxid?>"></td>
            </tr>
            <tr>
                <td>Member Name</td>
                <td><input type="text" name="member_name" value="<?=$gid?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak hadir">Tidak Hadir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Attandence Time</td>
                <td><input type="time" name="attendance_time" value="<?=$ade?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>