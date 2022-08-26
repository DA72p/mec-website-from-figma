<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="php-ruleset.css">
        <title>MIT Entrepreneurship Club</title>
        <meta name="description" content="Welcome to MIT's Premier Entrepreneurship Club!">
        <link rel="icon" type="image/png" href="MEC airplane.png">
    </head>

    <body>
        <!-- MEC HEADER -->
        <nav id="mec-header">
            <a href="index.html" class="nav-left-link">
                <img src="MEC with airplane logo.png" class="mec-logo-image" alt="MEC Logo" width="150">
            </a>
            <div id="mec-right-header">
                <a href="startup-fair/index.html" class="nav-right-link">
                    <div class="nav-right-item">Startup Fair</div>
                </a>
                <a href="join-us/index.html" class="nav-right-link">
                    <div class="nav-right-item">Join Us</div>
                </a>
                <a href="for-members/index.html" class="nav-right-link">
                    <div class="nav-right-item">For Members</div>
                </a>
                <a href="resources/index.html" class="nav-right-link">
                    <div class="nav-right-item">Resources</div>
                </a>
                <a href="blog/index.html" class="nav-right-link">
                    <div class="nav-right-item">Blog</div>
                </a>
                <a href="contact-us/index.html" class="nav-right-button">
                    <div class="nav-right-item">Contact Us</div>
                </a>
            </div>
        </nav>
        <!-- END MEC HEADER -->

        <!-- SUCCESSFULLY ADDED TO NEWSLETTER -->
        <div class="success-message">
            Thank you, <?php echo $_POST["first-name"] ?> <?php echo $_POST["last-name"] ?>, for 
            subscribing to invite week notifications! You will receive emails at 
            <?php echo $_POST["email"] ?>.
        </div>

        <?php
        $fname=$_POST["first-name"];
        $lname=$_POST["last-name"];
        $email=$_POST["email"];
        $reason=$_POST["reason"];
        $space=" ";
        $newline="\n";
        $fp=fopen('.hidden/list-of-invite-week.txt', 'a');
        fwrite($fp, $fname);
        fwrite($fp, $space);
        fwrite($fp, $lname);
        fwrite($fp, $space);
        fwrite($fp, $email);
        fwrite($fp, $newline);
        fwrite($fp, $reason);
        fwrite($fp, $newline);
        fwrite($fp, $newline);
        fclose($fp);
        ?>

        <!-- END SUCCESSFULLY ADDED TO NEWSLETTER -->

        <!-- FOOTER -->
        <div class="footer">

            <div class="footer-information-clickable">

                <div class="communications">
                    <div class="newsletter-join">
                        <p id="notify-upcoming-events">Get notified about upcoming events.</p>
                        <h2 id="join-newsletter-description">Join Our Newsletter</h2>
                        <form action="joined-newsletter.php" method="POST">
                            <label for="email"></label>
                            <input id="email" type="email" name="email" placeholder="Your Email" required>
                            <button>Submit</button>
                        </form>
                    </div>

                    <div class="follow-us">
                        <p>Follow Us</p>
                        <a href="insert-linkedin-here" class="follow-us-link button-link">
                            <img class="button-image footer-sm-image" src="Linkedin icon.png" alt="LinkedIn">
                        </a>
                        <a href="insert-facebook-here" class="follow-us-link button-link">
                            <img class="button-image footer-sm-image" src="Facebook icon.png" alt="Facebook">
                        </a>

                    </div>
                </div>

                <div class="links-sitemap">
                    <div class="links-4">
                        <a href="#about-mec">About</a>
                        <a href="startup-school/index.html">Startup School</a>
                        <a href="join-us/index.html">Join MEC</a>
                        <a href="resources/index.html">Events</a>
                    </div>

                    <div class="links-4">
                        <a href="for-members/index.html">For Members</a>
                        <a href="resources/index.html#resources">E-Ship Resources</a>
                        <a href="blog/index.html">Blog</a>
                        <a href="contact-us/index.html">Contact Us</a>
                    </div>
                </div>

                <div class="action-items">
                    <a href="join-us/index.html" class="button-link">
                        <p class="button-text">Join Us</p>
                    </a>
                    <a href="for-members/index.html" class="button-link">
                        <p class="button-text">Log In</p>
                    </a>
                </div>
            </div>

            <hr>

            <div class="ending-information">
                <span>(c) MIT Entrepreneurship Club 2022</span>
                <span>292 Main Street, Cambridge, MA 02142</span>
            </div>
        </div>
        <!-- END FOOTER -->

    </body>
</html>