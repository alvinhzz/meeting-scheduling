<html>
<head>
    <title>Add Machine</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="addmm.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Machine ID</td>
                <td><input type="text" name="machine_id"></td>
            </tr>
            <tr> 
                <td>Machine Code</td>
                <td><input type="text" name="machine_code"></td>
            </tr>
            <tr> 
                <td>Max Id Numbers </td>
                <td><input type="text" name="max_id_numbers"></td>

            </tr>
            <tr>
                <td>Group Id</td>
                <td><input type="text" name="group_id"></td>

            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>