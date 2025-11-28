<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <?php include 'base.php'; ?>

    <link rel="stylesheet" href="css/across.css">
    <link rel="stylesheet" href="css/documentation.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php'; ?>

    <main>
        <h1>Documentation</h1>

        <h2>Instructions</h2>
        <p>
            There are a total of 5 pages on the site: <br>
            <em>Home:</em> Introduces what H&A is and why customers should consider H&A. <br>
            <em>Services:</em> Displays the services currently offered by H&A, each with a short description and a
            button that links to the specific service pages. <br>
            <em>Fire Safety and ESG Consultancy:</em> Provides detailed information about this service. <br>
            <em>Contact Us:</em> Includes a form that users can fill out. Their responses are stored in a database so
            the business owner can reply.
        </p>
        <p>
            Both the header and footer contain a navigation menu with hyperlinks to each page.
        </p>

        <h2>Base Issue</h2>
        <p>
            The site uses root-relative paths for URLs, which may break if the project folder is stored in different
            locations.
            To prevent incorrect linking, a base.php file is created and included in every PHP page.
            Please update the base value inside base.php before running the site.
        </p>

        <h2>Organization and Architecture</h2>
        <p>
            Related content is grouped together for clarity. The header and footer are stored as templates and included
            on every page to maintain consistency.
            The two service detail pages are placed inside the services folder to reflect the site's hierarchy.
        </p>

        <h2>Database, Form validation</h2>
        <p>
            Users can submit a “Contact Us” form, and if the fields pass PHP validation, the data will be stored in the
            database. <br>
            After submission, an inquiry ID is displayed so users can keep it as a reference for future follow-up.
        </p>

        <h2>Animations</h2>
        <p>
            On the mobile version, the header shrinks when the user scrolls. This effect is created using a CSS
            animation applied through the shrink class.
        </p>

        <h2>Grid/Flexbox Layout</h2>
        <p>
            Most desktop layouts use CSS Grid to position and arrange images and text. Lists use Flexbox so they can
            switch between horizontal and vertical alignment as needed.
        </p>

        <h2>jQuery functionality</h2>
        <p>
            On the mobile layout, a menu button is implemented. When clicked, the collapsed navigation appears and the
            background dims.
            A “Learn More” button is also included for the mobile About Us section; the extended content only appears
            when clicked.
            The header shrinking effect is also handled with jQuery.
            Additionally, an image lightbox effect is implemented—when an image is clicked, it appears centered on the
            screen.
        </p>

        <h2>Accessible and responsive</h2>
        <p>
            All images include descriptive alt text, and semantic elements like &lt;nav&gt; are used for accessibility.
            The mobile and desktop layouts are designed separately to accommodate different screen sizes and viewing
            experiences.
        </p>

        <h2>Screenshots of validation</h2>
        <h3>Css Validation</h3>
        <p>
            <img src="images/cssValidate.jpg" alt="css Validate" class="validation">
        </p>
        <h3>HTML Validation</h3>
        <img src="images/htmlValidate.jpg" alt="html Validate" class="validation">

        <h2>Hosting</h2>
        <p>
            This site is currently hosted at
            <a href="https://www.haglobal.net/">https://www.haglobal.net/</a>.
        </p>


        <h1>Source</h1>

        <p>All images and content are provided by H&A Global Consulting Group Limited</p>

    </main>

    <?php include 'templates/footer.php'; ?>
</body>

</html>