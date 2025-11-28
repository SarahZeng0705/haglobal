<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions & Services</title>
    <?php include 'base.php'; ?>

    <link rel="stylesheet" href="css/across.css?v=12345">
    <link rel="stylesheet" href="css/service.css?v=12346">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php'; ?>

    <main>
        <h1>Solutions & Services</h1>
        <div class="services">
            <div class="service">
                <img src="images/ESG.png" alt="ESG picture">
                <div class="service-description">
                    <h3>ESG Consultancy</h3>
                    <p>Strategic sustainability and reporting</p>
                    <a class="learn-more" href="services/esg.php">Learn more</a>
                </div>
            </div>
            <div class="service">
                <img src="images/fire.png" alt="Fire safety picture">
                <div class="service-description">
                    <h3>Fire Safety</h3>
                    <p>Advanced, false-alarm-free detection systems</p>
                    <a class="learn-more" href="services/fire.php">Learn more</a>
                </div>
            </div>
        </div>

    </main>

    <?php include 'templates/footer.php'; ?>
</body>



</html>