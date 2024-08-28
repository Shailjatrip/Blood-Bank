<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 300px;
            }

            .container h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .container p {
                font-size: 18px;
                color: #333;
            }

            .container a {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .container a:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
                $a=$_GET['t1'];
                $b=$_GET['t2'];
                $c=$_GET['t3'];
                $d=$_GET['t4'];
                $e=$_GET['t5'];
                $f=$_GET['t6'];
                $g='pending';
                $con=mysqli_connect('localhost','root','Vibha0803@','BLOODBANKPHP');
                $query="insert into reciever value('$a','$b','$c','$d','$e','$f','$g')";
                $rs=mysqli_query($con,$query);
                if ($rs)
                    echo "<h1>Save Successful</h1>";
                else
                    echo "<h1>Error Saving Data</h1>";
            ?>
            <a href="recieverlogin.php">Login</a>
        </div>
    </body>
</html>
