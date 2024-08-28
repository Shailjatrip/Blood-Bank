<html>
    <head>
        <style>
            body {
                background-color: #f4f4f4;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                text-align: center;
                width: 400px;
            }

            h1 {
                color: #8B0000;
                margin-bottom: 20px;
            }

            .stock-info {
                font-size: 18px;
                color: #333;
                margin: 20px 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .stock-info span {
                font-weight: bold;
            }

            .success {
                color: green;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .error {
                color: red;
                font-weight: bold;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            $bg = $_GET['t1'];  
            $dq = $_GET['t3'];  

            if ($dq > 0) {
                $con = mysqli_connect('localhost', 'root', 'Vibha0803@', 'BLOODBANKPHP');
            }
            
                $query = "SELECT quantity FROM stock WHERE bg='$bg'";
                $result = mysqli_query($con, $query);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $cq = $row['quantity'];
                    $nq = $cq + $dq;

                    $updateQuery = "UPDATE stock SET quantity='$nq' WHERE bg='$bg'";
                    $updateResult = mysqli_query($con, $updateQuery);

                    if ($updateResult) {
                        echo "<h1 class='success'>Request sent Successful!</h1>";
                        echo "<div class='stock-info'><span>Blood Group:</span> $bg</div>";
                    } else {
                        echo "<p class='error'>Failed to update the stock.</p>";
                    }
                } else {
                    echo "<p class='error'>Failed to fetch the current stock for $bg.</p>";
                }
            ?>
        </div>
    </body>
</html>
