<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Validation</title>
   
</head>
<body>
     <?php
    $name = $website = $position = $experiance = $estatus = $comments = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $_name = val($_POST["name"]);
        $_Website = val($_POST["website"]);
        $_position = val($_POST["position"]);
        $_experiance = val($_POST["experiance"]);
        $_estatus = val($_POST["estatus"]);
        $_comments = val($_POST["comments"]);
    }
    function val($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 
    ?> 
 <!-- done -->

    <form class="employment"  action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]) ;?>" method="post">
    <table width="600" cellspacing="1" cellpadding="1">
    <tr>
        <td>
            <h2>Employment Application</h2>
        </td>
        <td></td>
    </tr>

    <tr>
        <td>Name</td>
        <td><input type="text" name="name" maxlength="50"></td>
    </tr>
    <tr>
        <td>Website</td>
        <td><input type="text" name="website" maxlength="50"></td>
    </tr>
    <tr>
        <td>Position</td>
        <td>
            <select name="position" id="">
                <option value="Accountant">Accoutant</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Administrator">Administrator</option>
                <option value="Supervisor">Supervisor</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Experiance Level</td>
        <td>
            <select name="experiance" id="">
            <option value="Entry Level">Entry Level</option>
                <option value="MediumLevel">MediumLevel</option>
                <option value="Expert">Expert</option>
                <option value="SuperExpert">SuperExpert</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Employment Status
        </td>
        <td>
            <input type="radio" name="estatus" value="employed" checked/>employed
            <input type="radio" name="estatus" value="unemployed" />unemployed
            <input type="radio" name="estatus" value="Student" />Student
        </td>
    </tr>
    <tr>
        <td>Queries</td>
        <td>
     <textarea name="comments" id="" cols="30" rows="5"></textarea>
    </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value ="submit">
            <input type="reset" name="reset" value ="reset">
        </td>
    </tr>
    
    </table>

    </form>
    <?php
   echo"<h2>User Input</h2>";
   echo " Name :" . $name;
   echo" </br>" ;
   echo " website :" . $website;
   echo" </br>" ;
   echo " Position :" . $position;
   echo" </br>" ;
   echo " Experiance :" . $experiance;
   echo" </br>" ;
   echo " estatus :" . $estatus;
   echo" </br>" ;
   echo " comments :" . $comments;
   ?> 
    
</body>
</html>