<!DOCTYPE html>
<html>
<head>
    <title>Update Donor Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #780606; 
            color: white;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: green; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Blood Group</th>
            <th>Password</th>
        </tr>
        <tr>
            <form action="Updatereciever1.php">
            <?php
            session_start();
            $a = $_GET['id'];
            $con = mysqli_connect('localhost', 'root', 'Vibha0803@', 'BLOODBANKPHP');
            $query = "select * from reciever where name='$a'";
            $rs = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($rs)) {
                echo "<td><input type='text' name='t1' value='" . $row['name'] . "'></td>";
                echo "<td><input type='text' name='t2' value='" . $row['email'] . "'></td>";
                echo "<td><input type='text' name='t3' value='" . $row['contact'] . "'></td>";
                echo "<td><input type='text' name='t4' value='" . $row['address'] . "'></td>";
                echo "<td><input type='text' name='t5' value='" . $row['bg'] . "'></td>";
                echo "<td><input type='text' name='t6' value='" . $row['password'] . "'></td>";
                echo "<td><input type='submit' value='UPDATE'></td>";
            }
            ?>
            </form>
        </tr>
    </table>
</form>
</body>
</html>