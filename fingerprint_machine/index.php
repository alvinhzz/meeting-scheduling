<?php
include('koneksi.php');
$result = mysqli_query($conn, "SELECT * FROM fingerprint_machine ORDER BY id ASC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="addm.php">Add New Machine</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>id</th> <th>Machine id</th> <th>Machine Code</th> <th>Max id number</th> <th>Group ID</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['machine_id']."</td>";
        echo "<td>".$user_data['machine_code']."</td>";
        echo "<td>".$user_data['max_id_numbers']."</td>";
        echo "<td>".$user_data['group_id']."</td>";    
        echo "<td><a href='editm.php?id=$user_data[id]'>Edit</a> | <a href='deletem.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>