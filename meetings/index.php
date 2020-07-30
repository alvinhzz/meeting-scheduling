<?php
include('database.php');
$result = mysqli_query($connect, "SELECT * FROM meetings ORDER BY meeting_date ASC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="v_insert.php">Add New Schedule</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Meeting Id</th> <th>Group Id</th> <th>Meeting Name</th> <th>Meeting Date</th> <th>Meeting Start</th> <th>Meeting End</th> <th>Meeting Place</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['meeting_id']."</td>";
        echo "<td>".$user_data['group_id']."</td>";
        echo "<td>".$user_data['meeting_name']."</td>";
        echo "<td>".$user_data['meeting_date']."</td>";
        echo "<td>".$user_data['meeting_start']."</td>";
        echo "<td>".$user_data['meeting_end']."</td>";
        echo "<td>".$user_data['meeting_place']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[meeting_id]'>Edit</a> | <a href='delete.php?id=$user_data[meeting_id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>