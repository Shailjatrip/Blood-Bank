<html>
<head>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #780606;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons a {
            padding: 8px 16px;
            text-decoration: none;
            color: white;
            background-color: #780606;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .action-buttons a:hover {
            background-color: #a00b0b;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $a = $_SESSION['n'];
    $con = mysqli_connect('localhost', 'root', 'Vibha0803@', 'BLOODBANKPHP');
    $query = "SELECT * FROM reciever WHERE status='pending'";
    $rs = mysqli_query($con, $query);
    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Blood Group</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($rs)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['bg']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td class="action-buttons">
                    <a href="Acceptreciever.php?id=<?php echo $row['name']; ?>">ACCEPT</a>
                    <a href="Rejectreciever.php?id=<?php echo $row['name']; ?>">REJECT</a>
                    <a href="Updatereciever.php?id=<?php echo $row['name']; ?>">EDIT</a>
                    <a href="Deletereciever.php?id=<?php echo $row['name']; ?>">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
