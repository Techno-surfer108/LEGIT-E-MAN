<?php
    include_once 'header.php';
    include 'includes/library.php';

    // On loading home page, make 'accounts' table if it does not already exist
    make_table();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: grey;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        main {
            margin-top: 30px;
        }

        .library-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .library-image {
            margin: 20px;
            text-align: center;
            max-width: 25%; /* Set max-width to 25% for a quarter of the size */
        }

        footer {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <header>
        <h1 class="text-dark">Investment Portfolio</h1>
    </header>

    <main>
        <div class="library-images">
            <div class="library-image">
                <img src="pic1.jpg" alt="Book 1" class="img-fluid">
                <p>Invest in the stock market and watch your money grow.</p>
            </div>
            <div class="library-image">
                <img src="pic2.jpg" alt="Book 2" class="img-fluid">
                <p>Invest now and secure your financial future!</p>
            </div>
            <div class="library-image">
                <img src="pic3.jpg" alt="Book 3" class="img-fluid">
                <p>Start building your wealth today with our investment portfolio.</p>
            </div>
            <div class="library-image">
                <img src="additional-pic1.jpg" alt="Additional Image 1" class="img-fluid">
                <p>Discover diverse investment opportunities with us.</p>
            </div>
            <div class="library-image">
                <img src="additional-pic2.jpg" alt="Additional Image 2" class="img-fluid">
                <p>Our expert advice ensures your financial success.</p>
            </div>
        </div>
        <h1 id="logo" class="text-primary">NATIONAL SCAMMING SERVICES</h1>
    </main>

    <footer class="text-light">
        <p>Contact Information:</p>
        <p>123 Investment Street, Nairobi, Kenya</p>
        <p>Email: info@investmentportfolio.com</p>
    </footer>
     <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

