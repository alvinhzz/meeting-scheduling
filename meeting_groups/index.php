<?php
include('database.php');
$result = mysqli_query($connect, "SELECT * FROM meeting_groups ORDER BY group_id ASC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="v_insert.php">Add New Schedule</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Group Id</th> <th>Group Name</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['group_id']."</td>";
        echo "<td>".$user_data['group_name']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[group_id]'>Edit</a> | <a href='delete.php?id=$user_data[group_id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>