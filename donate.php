<html>
    <head>
        <style>
            body {
                background-color: #8B0000; /* Blood red background */
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                margin: 0;
                padding: 0;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
                padding: 20px;
            }
            table {
                border-collapse: collapse;
                width: 60%;
                margin-top: 20px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
                border-radius: 10px;
                overflow: hidden;
            }
            th, td {
                border: 2px solid white;
                text-align: left;
                padding: 12px;
            }
            th {
                background-color: #B22222;
                font-size: 20px;
                text-transform: uppercase;
            }
            td {
                background-color: #CD5C5C;
                font-size: 18px;
            }
            tr:hover {
                background-color: #A52A2A;
            }
            img {
                width: 120px;
                height: auto;
                margin-bottom: 20px;
                border-radius: 50%;
                box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
            }
            h1 {
                font-size: 36px;
                margin-bottom: 10px;
                color: #FFD700;
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            }
            p {
                font-size: 20px;
                margin-bottom: 30px;
                text-align: center;
                max-width: 600px;
            }
            .btn {
                background-color: #B22222;
                color: white;
                padding: 12px 24px;
                text-align: center;
                text-decoration: none;
                font-size: 18px;
                margin-top: 20px;
                border-radius: 8px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
            }
            .btn:hover {
                background-color: #A52A2A;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to the Blood Bank</h1>
            <p>Your details are important to us. Please review your information below:</p>
            <img src="bb1.png" alt="Blood Bank Logo">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Blood Group</th>
                    <th>Password</th>
                    <th>Status</th>
                </tr>
                <?php
                session_start();
                $a = $_SESSION['n'];
                $con = mysqli_connect('localhost', 'root', 'Vibha0803@', 'BLOODBANKPHP');
                $query = "SELECT * FROM donor WHERE name='$a'";
                $rs = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($rs)) {
                    echo "<tr>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[contact]</td>
                        <td>$row[address]</td>
                        <td>$row[bg]</td>
                        <td>$row[password]</td>
                        <td>$row[status]</td>
                    </tr>";
                }
                ?>
            </table>
            <a href="donateB.php" class="btn">Donate</a>
        </div>
    </body>
</html>
