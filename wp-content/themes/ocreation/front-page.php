<?php
// Contenu de la page d'accueil
get_header();
?>
<!--
    <ul class="sociaux-home">
        <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.png" alt="Facebook"></a></li>
        <li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/pinterest.png" alt="Pinterest"></a></li>
        <li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/instagram.png" alt="Instagram"></a></li>
        <li><a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/linkedin.png" alt="Linkedin"></a></li>
        <li><a href="<?php the_field('vimeo', 'option'); ?>" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/vimeo.png" alt="Vimeo"></a></li>
    </ul>-->
    <ul class="sociaux-home">
        <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square"></i></a></li>
        <li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
        <li><a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="<?php the_field('vimeo', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-vimeo-square"></i></a></li>
    </ul>
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_white_315px.png" id="logo-homepage" class="logo-home logo-absolute" alt="Logo O'Création">
    <div id="owl-demo" class="owl-carousel">
        <?php $images = get_field('galerie_homepage') ?>
        <?php foreach($images as $value){ ?>
            <div class="item home-item" style="background-image:url('<?php echo $value['url']; ?>')">
            </div>
        <?php } ?>
    </div>
<?php get_footer(); ?>