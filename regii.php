<html>
    <head></head>
    <title></title>
    <body>
        <form method="POST" action="#">
            enter id<input type="text" name="eid"><br>
            enter name<input type="text" name="ename"><br>
            enter dept<input type="text" name="dept"><br>
            enter salary<input type="text" name="sal"><br>
              <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
    {
        echo"<br><h2 align=center>connected successfully</h2><br/>";
    }
    $id=$_POST['eid'];
    $name=$_POST['ename'];
    $dept=$_POST['dept'];
    $salary=$_POST['sal'];
    $query="INSERT INTO emp(eid,ename,dept,sal)VALUES('".$id."','".$name."','".$dept."','".$salary."')";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        echo"Submitted Successfully";
    }
    else
    {
        echo"ERROR";
    }
    mysqli_close($conn);
    ?>