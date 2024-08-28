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

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                width: 300px;
            }

            label {
                font-size: 16px;
                color: #333;
                margin-bottom: 10px;
                display: block;
            }

            input[type="text"], input[type="number"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0 20px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #8B0000;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            }

            input[type="submit"]:hover {
                background-color: #A52A2A;
            }
        </style>
    </head>
    <body>
        <form action="donateB1.php" method="GET">
            <label for="bg">Blood Group:</label>
            <input type='text' id='bg' name='t1' required>

            <label for="quantity">Quantity to Donate:</label>
            <input type='number' id='quantity' name='t3' min="1" required>

            <input type="submit" value="OK">
        </form>
    </body>
</html>
