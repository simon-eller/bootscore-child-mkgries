<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<footer class="bootscore-footer border-top mt-5">
    <?php if (is_active_sidebar('footer-top')) : ?>
        <div class="<?= apply_filters('bootscore/class/footer/top', 'bg-body-tertiary border-bottom py-5'); ?> bootscore-footer-top">
            <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-top'); ?>">
                <?php dynamic_sidebar('footer-top'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="<?= apply_filters('bootscore/class/footer/columns', 'bg-body-tertiary pt-5 pb-4'); ?> bootscore-footer-columns">
        <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-columns'); ?>">

            <div class="row">

                <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-1'); ?>">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?>
                </div>

                <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-2'); ?>">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php endif; ?>
                </div>

                <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-3'); ?>">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php endif; ?>
                </div>

                <div class="<?= apply_filters('bootscore/class/footer/col', 'col-6 col-lg-3', 'footer-4'); ?>">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <?php dynamic_sidebar('footer-4'); ?>
                    <?php endif; ?>
                </div>

            </div>

        </div>
    </div>

    <img src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/footer-berge.svg'); ?>" alt="Silhouetten der Berge rund um den Wolfendorn in Gries am Brenner" class="rounded-0" style="width: 105%; max-width: 105%; margin-left: -10px; margin-bottom: -3px">
    <div class="<?= apply_filters('bootscore/class/footer/info', 'bg-body-tertiary text-body-secondary border-top py-2 text-center'); ?> bootscore-footer-info">
        <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-info'); ?>">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start">
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                    <?php //get_template_part('template-parts/footer/footer-menu'); ?>
                    <div class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp <?php bloginfo('name'); ?> <?= date('Y'); ?></div>
                    <?php if (is_active_sidebar('footer-info')) : ?>
                        <?php dynamic_sidebar('footer-info'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <div class="pt-2 pt-md-0">
                        Webdesign mit
                        <span class="material-symbols-rounded fs-6">
                        favorite
                        </span>
                        von <a class="text-white" href="https://simon-eller.at">Simon Eller</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- To top button -->
<a href="#" class="<?= apply_filters('bootscore/class/footer/to_top_button', 'btn btn-primary shadow'); ?> position-fixed z-2 top-button"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>