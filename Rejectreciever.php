<html>
    <body>
        <?php
        $id=$_GET['id'];
        $con=mysqli_connect('localhost','root','Vibha0803@','BLOODBANKPHP');
        $query="update reciever set status='reject' where name='$id'";
        $rs=mysqli_query($con,$query);
        if ($rs)
        echo "rejected!!!!!";
    else
    echo "not rejected";

?>
</form>
</body>
</html>