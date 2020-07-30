<?php
include('database.php');
$result = mysqli_query($connect, "SELECT * FROM members ORDER BY member_id ASC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="v_insert.php">Add New attedence</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Member ID</th><th>Memeber Name</th> <th>Member Email</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['member_id']."</td>";
        echo "<td>".$user_data['member_name']."</td>";
        echo "<td>".$user_data['member_email']."</td>";
 
        echo "<td><a href='edit.php?id=$user_data[member_id]'>Edit</a> | <a href='delete.php?id=$user_data[member_id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>