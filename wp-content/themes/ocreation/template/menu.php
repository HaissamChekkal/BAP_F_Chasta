<?php

$termId = '';
$tax = '';
global $tax;
if( is_tax() || is_category() ) {
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $termId = $term->term_id;
    $tax = $term->taxonomy;
}elseif(is_single()){
    // Récupérer $term_id;
    global $post;
    if($post->post_type == 'creation')
        $term = wp_get_post_terms( get_the_ID(), 'type-de-creation');
    elseif($post->post_type == 'post')
        $term = wp_get_post_terms( get_the_ID(), 'category');

    $termId = isset($term[0]) ? $term[0]->term_id : '';
    $tax = isset($term[0]) ? $term[0]->taxonomy : '';
} ?>
<!-- Menu -->
<button type="button" data-toggle="false" id="navbar-toggle" class="navbar-toggle">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<div class="background-menu"></div>
<aside id="aside">
    <ul class="sociaux">
        <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square"></i></a></li>
        <li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
        <li><a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="<?php the_field('vimeo', 'option'); ?>" target="_blank" rel="nofollow"><i class="fa fa-vimeo-square"></i></a></li>
    </ul>
    <ul class="menu-top" id="menu-top">
        <li><a class="<?php echo is_singular('post') || is_category() ? 'active' : ''; ?>" href="#" id="category">Actualités</a></li>
        <li><a class="<?php echo is_page(40) ? 'active' : ''; ?>" href="<?php echo get_permalink(42); ?>">Origine</a></li>
        <li><a class="<?php echo is_singular('creation') || is_tax('type-de-creation') ? 'active' : ''; ?>" href="#" id="type-de-creation">Univers</a></li>
        <li><a class="<?php echo is_page(6) ? 'active' : ''; ?>" href="<?php echo get_permalink(6); ?>">Contact</a></li>
    </ul>

    <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_white_315px.png" alt="Logo">
    </a>

    <div class="row">
        <ul id="submenu" class="submenu">
            <?php foreach($tax_creations as $creation){ ?>
                <li class="<?php echo $creation->taxonomy; ?>"><a class="<?php echo $termId == $creation->term_id ? 'active' : ''; ?>" href="<?php echo get_term_link($creation); ?>"><?php echo $creation->name; ?></a></li>
            <?php } ?>
            <?php foreach($tax_actu as $creation){ ?>
                <li class="<?php echo $creation->taxonomy; ?>"><a class="<?php echo $termId == $creation->term_id ? 'active' : ''; ?>" href="<?php echo get_term_link($creation); ?>"><?php echo $creation->name; ?></a></li>
            <?php } ?>
        </ul>
        <ul class="subsubmenu" id="subsubmenu" data-tax="<?php echo $tax; ?>">
            <?php
            $args = [
                'posts_per_page' => -1,
                'post_type' => ['post','creation'],
                'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
                    array(
                        'taxonomy' => $tax,                //(string) - Taxonomy.
                        'field' => 'id',                    //(string) - Select taxonomy term by ('id' or 'slug')
                        'terms' => array($termId ),    //(int/string/array) - Taxonomy term(s).
                        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
                    ),
                ),
            ];
            $my_query = new WP_Query($args);
            ?>
            <?php // Je récupère l'id seulement si c'est un single ?>
            <?php $monpostId = is_single() ? get_the_ID() : 'banane'; ?>

            <?php if ( $my_query->have_posts() ) :
                while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <li><a class="<?php echo get_the_ID() == $monpostId ? 'active' : '' ; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
        </ul>
    </div>

</aside>