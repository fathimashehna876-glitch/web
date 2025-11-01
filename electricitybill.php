<html>
    <body>
        <h1>Electricity Bill</h1>
        <form method="POST" action="#">
            consumerID:<input type="number" name="id"><br>
            name:<input type="text" name="name"><br>
            previous reading:<input type="number" name="prev"><br>
            current reading:<input type="number" name="pres"><br>
            <br><input type="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $prev=$_POST['prev'];
                $pres=$_POST['pres'];
                $units=$pres-$prev;
                echo"==============================<br>";
                echo"<h3>Kerala state electricity board(KSEB)</h3><br>";
                echo"<br><br>";
                echo"Consumer ID:".$id."<br>";
                echo"Consumer Name:".$name."<br>";
                echo"Units Consumed:".$units."<br>";
                if($units<=100)
                {
                    $amt=$units*3;
                }
                else if($units>100&&$units<=200)
                {
                    $amt=$units*4;
                }
                else if($units>200&&$units<=300)
                {
                    $amt=$units*5;
                }
                else{
                    $amt=$units*5;
                }
                echo"Total amount:".($amt)."<br>";
                echo"==============================<br>";
                }
                ?>

    </body>
</html>