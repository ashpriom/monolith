<?php
/**
 * @package WordPress
 * @subpackage Monolith_Theme
 */
?>
    <div class="footer-container">
        <div class="container-fluid section-footer">
            <div class="row">
                <div class="col-sm-4">
                    <a href="http://monolith.technology/" target="_blank">
                        <img id="wavecom-logo" src="<?php echo get_template_directory_uri(); ?>/images/monolith.png" title="Monolith" alt="Monolith"
                            onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/monolith.png';"
                            onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/monolith.png';">
                        </img>
                    </a>
                </div>
                <div class="col-sm-4">
                    <ul class="menu nav-menu-footer">
                            <li><a href="http://monolith.technology/">Monolith</a></li>
                            <li><a href="#">Weblaunch</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Tools</a></li>
                            <li><a href="#">Pricing</a></li>
                    </ul>
                    <br />
                    <br />
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <p class="footer-nav-title">Contact</p>
                        <div>
                            <p>2022 rue Bossuet</p>
                            <p>Montreal, H1N 2R7</p>
                            <p><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/images/forma_1_2.png" alt="" />&nbsp;&nbsp;contact@monolith.technology</p>
                            <p><img class="contact-icon" src="<?php echo get_template_directory_uri(); ?>/images/forma_1.png" alt="" />&nbsp;&nbsp;&nbsp;438-929-2026</p>
                        </div>
                    </div>
                    <br class="hidden-xs hidden-sm">
                    <div class="row">
                        <div class="nav-social">
                            <ul class="menu social-links-menu-footer">
                                <li><a class="social-media-icons" href="https://www.facebook.com/monolith.technology/"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-social-icon-white.png" alt="" /></a></li>
                                <li><a class="social-media-icons" href="https://twitter.com/monolith_tech"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-social-icon-white.png" alt="" /></a></li>
                                <li><a class="social-media-icons" href="https://github.com/Monolith-Technology"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-social-icon-white.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/weblaunch.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/stacktable.js"></script>
        <script> $('.the-stack').stacktable(); </script>
    </div>
</body>
</html>

<?php wp_footer(); ?>
