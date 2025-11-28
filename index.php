<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&A Global Consulting</title>
    <?php include 'base.php'; ?>

    <link rel="stylesheet" href="css/across.css">
    <link rel="stylesheet" href="css/index.css?v=12346">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php'; ?>

    <main>

        <h1 class="company-name">H&A Global Consulting Group Limited</h1>
        <p class="description">Your Trusted Partner in Fire Safety, Energy Management & ESG Excellence</p>
        <img src="images/ESG.png" alt="ESG picture" id="esg-pic">

        <div class="about">
            <h2>About Us</h2>
            <span>
                <img src="images/ESG.png" alt="ESG picture" id="pc-esg">
            </span>
            <p class="aboutSum">Established in 2014 by a group of IT expertise, H&A Global Consulting Group
                Limited
                is a
                leading consulting and engineering solutions and service provider, offering a unique combination
                of
                fire
                safety systems, energy management solutions, ESG consultancy and talent development programs.
            </p>
            <div class="aboutExpanded">
                <p>
                    With a strong presence in Hong Kong and Macau, we serve a diverse clientele and help
                    them to meet their safety, sustainability, and governance goals. We are committed to
                    delivering
                    customer-centric, technologically innovative solutions that help our clients navigate the
                    challenges
                    of AI, Web 3.0, and Industry 4.0.</p>
                <p>
                    We are also proud to represent Protec Fire Detection PLC, supplying their cutting-edge
                    Cirrus
                    Series
                    Aspirating Smoke Detectors, known globally for their accuracy, reliability, and zero false
                    alarm
                    performance.</p>
            </div>
            <p class="learn-more">Learn more...</p>
        </div>

        <script>
            $(".learn-more").click(function () {
                $(".aboutExpanded").fadeToggle(300);

                if ($(this).text() === "Learn more...") {
                    $(this).text("Show less...");
                } else {
                    $(this).text("Learn more...");
                }
            });

        </script>

        <div class="coop-direction">
            <h2>Corporate Direction:</h2>
            <ul id="direction">
                <li><em>Versatile</em>: Experts in Smart E&M Engineering, Smart Buildings Management, and Incipient
                    Fire
                    Detection.
                </li>
                <li><em>Capable</em>: Proven experience in Project Management, Change Management, and Business
                    Re-engineering.
                </li>
                <li><em>ESG Focused</em>: Dedicated to Energy Efficiency, Carbon Reduction, and Governance
                    Excellence
                    and able to support enterprises to accomplish ESG compliance and enhance their ESG performance.
                </li>
            </ul>
        </div>

        <div class="why">
            <h2>Why H&A?</h2>
            <ul id="reasons">
                <li>Customer Centric & Forward Looking</li>
                <li>Founded by Engineers, Driven by Innovation</li>
                <li>Extensive exposure in energy management and fire safety projects</li>
                <li>Certified Expertise (ISO, PMP, ESG Planner)</li>
                <li>Wealth of experience in corporate management and talent development</li>
            </ul>
        </div>
    </main>

    <?php include 'templates/footer.php'; ?>
</body>

</html>