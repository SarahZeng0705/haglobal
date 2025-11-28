<div class="overlay"></div>

<header>
    <div class="company-info">
        <a href="index.php"><img src="images/logo.jpg" alt="Company Logo"></a>
        <p>Your Trusted ESG Partner</p>
    </div>
    <span id="menu-icon" class="material-symbols-outlined">Menu</span>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li id="service">
                <a href="services.php">Services</a>
                <ul>
                    <li><a href="services/esg.php">ESG Consultancy</a></li>
                    <li><a href="services/fire.php">Fire Safety</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
<div class="wrapper">


    <script>
        $(document).ready(function () {
            /* --- NAV --- */
            $("#menu-icon").click(function () {
                $("nav").toggleClass("after");
                $(".overlay").fadeToggle();

                if ($("nav").hasClass("after")) {
                    $("#menu-icon").text("close");
                } else {
                    $("#menu-icon").text("menu");
                }
            });

            /* ---SHRUNK HEADER--- */
            $(window).on("scroll", function () {
                const scrollTop = $(this).scrollTop();

                if (scrollTop > 50) {
                    $("header").addClass("shrink");
                    $(":root").css("--header-height", "10vh");
                } else if (scrollTop < 20) {
                    $("header").removeClass("shrink");
                    $(":root").css("--header-height", "15vh");
                }
            });

            /*---IMAGE---*/
            $('main img').on('click', function () {
                let overlay = $('<div></div>');
                overlay.css({
                    position: 'fixed',
                    top: 0,
                    left: 0,
                    width: '100vw',
                    height: '100vh',
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    display: 'flex',
                    justifyContent: 'center',
                    alignItems: 'center',
                    zIndex: 9999,
                    opacity: 0
                });

                let img = $('<img>').attr('src', $(this).attr('src'));
                img.css({
                    width: 'auto',
                    height: 'auto',
                    maxWidth: '90vw',
                    maxHeight: '90vh',
                    backgroundColor: 'white',
                    opacity: 0
                });

                overlay.append(img);

                overlay.on('click', function () {
                    overlay.remove();
                });

                $('body').append(overlay);
                overlay.animate({ opacity: 1 }, 300);
                img.animate({ opacity: 1 }, 300);
            });


        });

    </script>