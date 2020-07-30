<html>
<head>
    <title>Add Meeting Schedule</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="insert.php" method="post" name="inputdata">
        <table width="25%" border="0">
            <tr> 
                <td>Group Id</td>
                <td><input type="text" name="group_id"></td>
            </tr>
            <tr> 
                <td>Meeting Name</td>
                <td><input type="text" name="meeting_name"></td>
            </tr>
            <tr> 
                <td>Meeting Date</td>
                <td><input type="date" name="meeting_date"></td>
            </tr>
            <tr> 
                <td>Meeting Start</td>
                <td><input type="time" name="meeting_start"></td>
            </tr>
            <tr> 
                <td>Meeting End</td>
                <td><input type="time" name="meeting_end"></td>
            </tr>
            <tr> 
                <td>Meeting Place</td>
                <td><input type="text" name="meeting_place"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>