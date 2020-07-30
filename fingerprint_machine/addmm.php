<?php
    include('koneksi.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $mid = $_POST['machine_id'];
        $mcd = $_POST['machine_code'];
        $mxid = $_POST['max_id_numbers'];
        $gid = $_POST['group_id'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO fingerprint_machine(machine_id,machine_code,max_id_numbers,group_id) VALUES('$mid','$mcd','$mxid','$gid')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>