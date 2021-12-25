<!DOCTYPE html>  
<html>  
<head>  
    <title>Baby Form Add</title>  
</head>  
<body>  
    <form method="post" action="<?php echo site_url('baby_form/savingdata'); ?>">  
        <table>  
            <tr>  
                <td>Name:</td>  
                <td>:</td>  
                <td><input type="text" name="name"></td>  
            </tr>  
            <tr>  
                <td>Meaning:</td>  
                <td>:</td>  
                <td><input type="text" name="meaning"></td>  
            </tr>  
            <tr>  
                <td>Gender:</td>  
                <td>:</td>  
                <td><input type="text" name="gender"></td>  
            </tr>  
            <tr>  
                <td>Religion:</td>  
                <td>:</td>  
                <td><input type="text" name="religion"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" value="Save">  
            </tr>  
        </table>  
    </form>  
</body>  
</html>  