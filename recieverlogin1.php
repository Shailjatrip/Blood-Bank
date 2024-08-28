<html>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $con=mysqli_connect('localhost','root','Vibha0803@','BLOODBANKPHP');
       echo  $query="select * from reciever where name='$a' AND password='$b'";
        $rs=mysqli_query($con,$query);
        if ($row=mysqli_fetch_array($rs))
       {
        session_start();
        $_SESSION['n']=$a;
        echo "
        <script>
                window.location='recieve.php';
        </script>
    ";
}
else
    echo "invalid";        
?>
    </body>
</html>