<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Update</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #780606;
            color: white;
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
            <?php
            $a = $_GET["t1"];
            $b = $_GET["t2"];
            $c = $_GET["t3"];
            $d = $_GET["t4"];
            $e = $_GET["t5"];
            $f = $_GET["t6"];
            $g = 'pending';

            $con = mysqli_connect('localhost', 'root', 'Vibha0803@', 'BLOODBANKPHP');
            $query = "update donor set email='$b', contact='$c', address='$d', bg='$e', password='$f' where name='$a'";
            $rs = mysqli_query($con, $query);

            if ($rs) {
                echo "<td>" . $a . "</td>";
                echo "<td>" . $b . "</td>";
                echo "<td>" . $c . "</td>";
                echo "<td>" . $d . "</td>";
                echo "<td>" . $e . "</td>";
                echo "<td>" . $f . "</td>";
                echo "<td>Updated</td>";
            } else {
                echo "<td>" . $a . "</td>";
                echo "<td>" . $b . "</td>";
                echo "<td>" . $c . "</td>";
                echo "<td>" . $d . "</td>";
                echo "<td>" . $e . "</td>";
                echo "<td>" . $f . "</td>";
                echo "<td>Not Updated</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>