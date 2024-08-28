<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-family: 'Montserrat', sans-serif;
                font-size: 36px;
                color: rgb(120,6,6);
                text-align: center;
                margin-bottom: 30px;
                margin-top: 100px;
                letter-spacing: 1.5px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            }

            .btn {
                display: inline-block;
                padding: 0.9rem 1.8rem;
                font-size: 16px;
                font-weight: 700;
                color: white;
                border: 3px solid rgb(255,255,255);
                cursor: pointer;
                position: relative;
                background-color: transparent;
                text-decoration: none;
                overflow: hidden;
                z-index: 1;
                font-family: 'Montserrat', sans-serif;
                margin-top: 12px;
                transition: all 0.3s ease;
            }

            .button-image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                max-width: 1200px;
                margin: 50px auto;
                margin-top:50px;
                padding: 30px;
                background-color: rgb(120,6,6);
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }

            .btn:hover {
                background-color: white;
                color: rgb(255,0,0);
            }

            .button1 {
                display: flex;
                flex-direction: column;
                align-items: center;
                max-width: 60%;
                margin-right: 20px;
            }

            #lg {
                width: 187px;
            }

            .phrase {
                font-size: 20px;
                color: white;
                text-align: center;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to the Blood Bank</h1>
        <div class="button-image-container">
            <div class="button1">
                <p class="phrase">Already a donor?</p>
                <p class="phrase">Log in to access your account.</p>
                <form action="donorlogin.php">
                    <input type="submit" value="LOGIN" class="btn" id="lg">
                </form>
                <p class="phrase">New here? Register to become a life-saver today!</p>
                <form action="donorreg.php">
                    <input type="submit" value="REGISTRATION" class="btn">
                </form>
            </div>
        </div>
    </body>
</html>
