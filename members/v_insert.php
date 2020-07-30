<html>
<head>
    <title>Add Meeting Schedule</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="insert.php" method="post" name="inputdata" require>
        <table width="25%" border="0">
            <tr> 
                <td>Member Name</td>
                <td><input type="text" name="member_name"></td>
            </tr>
            <tr> 
                <td>Member Email</td>
                <td><input type="text" name="member_email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>