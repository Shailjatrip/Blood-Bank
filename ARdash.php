<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 0.9rem 1.8rem;
            font-size: 16px;
            font-weight: 700;
            color: white;
            border: 3px solid white;
            cursor: pointer;
            position: relative;
            background-color: transparent;
            text-decoration: none;
            overflow: hidden;
            z-index: 1;
            margin-top: 12px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: white;
            color: #780606;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 120px;
            background-color: #780606;
            padding: 20px;
        }

        .title {
            text-align: center;
            margin: 50px 0;
        }

        .title p {
            font-size: 30px;
            font-weight: 700;
            color: #780606;
            margin: 0;
        }

        .content-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .image img {
            width: 50%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .button-container {
                flex-direction: column;
                gap: 20px;
            }

            .content-image-container {
                flex-direction: column;
                padding: 15px;
            }

            .image img {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="button-container">
        <form action="ARdashd.php">
            <input type="submit" value="DONOR's" class="btn">
        </form>
        <form action="ARdashr.php">
            <input type="submit" value="RECIEVER's" class="btn">
        </form>
        <form action="stocks.php">
            <input type="submit" value="STOCKs" class="btn">
        </form>
    </div>
    <div class="title">
        <p><b>"Welcome to Life's Lifeline"</b></p>
    </div>
    <div class="content-image-container">
        <div class="image">
            <img src="bb.jpg" alt="Blood Bank Image">
        </div>
    </div>
</body>
</html>
