<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Freelancer_C2W
 */

?>
<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Khyber Pakhtonkhwa Pakistan
                    <br>Peshawar Pak
                </p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">About</h4>
                <p class="lead mb-0">This is a sample page created to demonstrate Converting Bootstrap Theme to WordPress
                    (<a href="http://5balloons.info">5balloons</a>)</p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy;<?php echo bloginfo('name') ?> <?php echo date('Y') ?></small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<?php wp_footer(); ?>



<!-- Portfolio Modals -->
<?php $loop = new WP_Query(array('post_type' => 'portfolios', 'order_by' =>
'post_id', 'order' => 'ASC')) ?>
<?php while ($loop->have_posts()) :
    $loop->the_post();
?>
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php the_ID(); ?>">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0"><?php the_title(); ?></h2>
                        <hr class="star-dark mb-5">
                        <?php the_post_thumbnail() ?>
                        <!--<img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">-->
                        <p class="mb-5"><?php the_content(); ?> </p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<!-- Bootstrap core JavaScript -->
<script src="<?php bloginfo('stylesheet_directory') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php bloginfo('stylesheet_directory') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php bloginfo('stylesheet_directory') ?>/js/freelancer.min.js"></script>

</body>
</html>