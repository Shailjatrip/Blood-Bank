<html>
    <body>
        <?php
        $a=$_GET["t1"];
        $con=mysqli_connect('localhost','root','Vibha0803@','BLOODBANKPHP');
        $a1="delete from reciever where name='$a'";
        $rs=mysqli_query($con,$a1);
        if ($rs)
        echo "deleted";
        else
        echo "not deleted";
?>
    </body>
</html>