<html>
    <head></head>
    <title></title>
    <body>
        <form method="POST" action="#">
            enter From<input type="text" name="fromp"><br>
            enter Airline<input type="text" name="airline"><br>
            enter Departure Date<input type="date" name="departuredate"><br>
            enter Arrival Date<input type="date" name="arrival"><br>
             enter To<input type="text" name="topp"><br>
              enter Flight Number<input type="text" name="flightnumber"><br>
               enter Terminal<input type="text" name="terminal"><br>
              <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airdb";
$tbname="air";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>FLIGHT DETAILS</h2><br>";
}
    $from=$_POST['fromp'];
    $airline=$_POST['airline'];
    $departure=$_POST['departuredate'];
    $arrival=$_POST['arrival'];
    $to=$_POST['topp'];
    $flightnumber=$_POST['flightnumber'];
    $terminal=$_POST['terminal'];
    $query="INSERT INTO air(fromp,airline,departuredate,arrival,topp,flightnumber,terminal)VALUES('$from','$airline',' $departure','$arrival','$to','$flightnumber','$terminal')";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        echo"Submitted Successfully";
    }
    else
    {
        echo"ERROR";
    }
    
$sql="SELECT*FROM air";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    echo"<table border=2 align=center>";
    echo"<tr><th>From</th>";
    echo"<th>Airline</th>";
    echo"<th>Departure date</th>";
    echo"<th>Arrival date</th>";
    echo"<th>To</th>";
    echo"<th>Flight Number</th>";
    echo"<th>Terminal</th></tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<tr><td>$row[fromp]</td>";
        echo"<td>$row[airline]</td>";
        echo"<td>$row[departuredate]</td>";
        echo"<td>$row[arrival]</td>";
        echo"<td>$row[topp]</td>";
        echo"<td>$row[flightnumber]</td>";
        echo"<td>$row[terminal]</td></tr>"; 
    }
        echo"</table>";
}
        else
        {
            echo"0 results";
}
            mysqli_close($conn);
            ?>