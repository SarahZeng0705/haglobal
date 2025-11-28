<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire Safety</title>
    <?php include '../base.php'; ?>

    <link rel="stylesheet" href="css/across.css?v=12347">
    <link rel="stylesheet" href="css/fire.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include '../templates/header.php'; ?>

    <main>
        <h1>Fire Safety</h1>
        <p class="tagline">Ensuring Safety Through Early Fire Detection</p>
        <div class="gridbox">
            <span>
                <img class="intro-img" src="images/fire.png" alt="">
            </span>
            <h2>Advanced Fire Detection Systems</h2>

            <p>We specialize in the delivery and implementation of advanced incipient fire detection systems. Utilizing
                Protec’s Aspirating Smoke Detector Series, we provide end-to-end solutions including consultancy, system
                design, material supply, installation, testing and commissioning, as well as ongoing support after
                installation.
            </p>
            <p>
                Known for their exceptional reliability and virtually zero false alarms, these systems are
                ideal for mission-critical environments such as data centers, electrical rooms, cold storage facilities,
                warehouses, high-ceiling atriums, heavily polluted areas, clean rooms, and a wide range of industrial
                applications.</p>
        </div>

        <h2>Our Capabilities</h2>
        <ul>
            <li>System Design & Consultancy</li>
            <li>Installation & Commissioning</li>
            <li>Maintenance & Technical Support</li>
            <li>Project Management</li>
            <li>Training & Certification for Contractors</li>
        </ul>

        <h2>Why Choose Cirrus Hybrid ASD?</h2>
        <ul>
            <li>Early Detection: Detects fire at the earliest smoldering stage</li>
            <li>False Alarm Free: Advanced particle analysis ensures reliability</li>
            <li>Robust in Harsh Environments: Operates flawlessly in areas with dust, airflow, or high ceilings</li>
            <li>Compliance: Meets international fire safety standards</li>
        </ul>

        <p>Only authorized and certified contractors are permitted to install and support Protec systems under H&A’s
            supervision.
        </p>

        <h2>Protec ASD’s</h2>
        <p>There are 3 major Protec ASD’s that we are carrying, namely:</p>

        <div class="asd-container">
            <h3>ProPoint Plus</h3>
            <span>
                <img src="images/ppp.png" alt="ppp" class="asd">
            </span>
            <p>The ProPoint Plus is Protec’s high-performance aspirating smoke detector, designed for flexibility and
                scalability. It features multiple sampling points, programmable sensitivity, and advanced filtering,
                making it suitable for a wide range of applications—from small server rooms to large industrial
                facilities. It’s built with user-friendly configuration and maintenance in mind, and supports
                integration with building management systems.</p>
        </div>
        <div class="asd-container">
            <h3>Cirrus CCD (Cloud Chamber Detector)</h3>
            <span>
                <img src="images/ccd.png" alt="ccd" class="asd">
            </span>
            <p>The Cirrus CCD uses unique cloud chamber technology to detect invisible combustion aerosols, which are
                the earliest indicators of fire. It doesn’t rely on visible smoke, making it extremely sensitive and
                capable of identifying an incipient fire long before traditional detectors. This makes it ideal for
                mission-critical environments such as data centers, clean rooms, and high-value asset areas where false
                alarms are unacceptable.</p>
        </div>
        <div class="asd-container">
            <h3>Cirrus Hybrid</h3>
            <span>
                <img src="images/hybrid.png" alt="hybrid" class="asd">
            </span>
            <p>The Cirrus Hybrid combines the strengths of aspirating smoke detection (ASD) with cloud chamber
                detection, offering dual detection of both visible smoke and invisible particles. This hybrid approach
                provides a broader detection capability, suitable for complex environments where both early warning and
                adaptability are crucial. It's especially useful in areas with fluctuating air quality, like industrial
                zones or high-ceiling spaces.</p>
        </div>
        <p><em>Both CCD and Hybrid are ideal for:</em> Atriums, data centers, museums, telecommunications
            facilities, and
            industrial sites.</p>


    </main>

    <?php include '../templates/footer.php'; ?>
</body>



</html>