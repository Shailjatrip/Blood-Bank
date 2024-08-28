<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            form {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                width: 100%;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            label {
                font-weight: bold;
            }

            h2 {
                text-align: center;
                color: #333;
            }
        </style>
    </head>
    <body>
        <form action="adminloginbb1.php">
            <h2>Admin Login</h2>
            <label for="t1">Admin Name</label>
            <input type="text" name="t1" placeholder="Enter your name"><br>
            <label for="t2">Password</label>
            <input type="password" name="t2" placeholder="Enter a password"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
