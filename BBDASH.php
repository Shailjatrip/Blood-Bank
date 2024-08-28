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
            border: 3px solid rgb(255,255,255);
            cursor: pointer;
            position: relative;
            background-color: transparent;
            text-decoration: none;
            overflow: hidden;
            z-index: 1;
            font-family: inherit;
            margin-top: 12px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: white;
            color: rgb(120,6,6);
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 160px;
            background-color: rgb(120,6,6);
            padding: 20px 0;
        }

        .title {
            text-align: center;
            margin-top: 50px;
        }

        .title p {
            font-size: 28px;
            font-weight: 700;
            color: rgb(120,6,6);
            margin: 0;
        }

        .content-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .content {
            max-width: 60%;
            margin-right: 20px;
        }

        .content p {
            font-size: 20px;
            line-height: 1.6;
            margin: 0;
        }

        .image {
            max-width: 40%;
            text-align: center;
        }

        .image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .content-image-container {
                flex-direction: column;
                text-align: center;
            }
            .content {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
            .image {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="button-container">
        <form action="donor.php">
            <input type="submit" value="DONOR" class="btn">
        </form>
        <form action="reciever.php">
            <input type="submit" value="RECIEVER" class="btn">
        </form>
        <form action="admindashboard.php">
            <input type="submit" value="ADMIN DASH" class="btn">
        </form>
    </div>
    <div class="title">
        <p><b>"Welcome to Life's Lifeline: Your Trusted Blood Bank Management System"</b></p>
    </div>
    <div class="content-image-container">
        <div class="content">
            <p>At our Blood Bank, we are dedicated to saving lives by ensuring a reliable supply of safe and quality blood. Our state-of-the-art Blood Bank Management System is designed to streamline the process of blood donation, storage, and distribution, ensuring that every drop of blood reaches those in need efficiently and safely.</p>
        </div>
        <div class="image">
            <img src="bb1.png" alt="Blood Bank Image">
        </div>
    </div>
</body>
</html>
