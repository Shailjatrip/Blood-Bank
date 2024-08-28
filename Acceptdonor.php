<html>
    <body>
        <?php
        $id=$_GET['id'];
        $con=mysqli_connect('localhost','root','Vibha0803@','BLOODBANKPHP');
        $query="update donor set status='accept' where name='$id'";
        $rs=mysqli_query($con,$query);
        if ($rs)
        echo "accepted!!!!!";
    else
    echo "not accepted";

?>
</form>
</body>
</html>