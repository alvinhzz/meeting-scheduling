<?php
include('database.php');
$result = mysqli_query($connect, "SELECT * FROM meeting_attendance ORDER BY id ASC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="addattedence.php">Add New attedence</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>ID</th><th>Meeting Id</th> <th>Member Id</th> <th>Group Id</th> <th>Member Name</th> <th>status</th> <th>Attendence time</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['meeting_id']."</td>";
        echo "<td>".$user_data['member_id']."</td>";
        echo "<td>".$user_data['group_id']."</td>";
        echo "<td>".$user_data['member_name']."</td>";
        echo "<td>".$user_data['status']."</td>";
        echo "<td>".$user_data['attendance_time']."</td>";
 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>