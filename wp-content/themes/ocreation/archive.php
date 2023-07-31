<?php get_header();
// Variable globale Wordpress
global $wp_query;

// Je récupère le nombre de posts qu'il y a dans la boucle
$nbpost = $wp_query->found_posts;

// Il y a que ... posts sur la dernière ligne
$nbpostFin = $nbpost%3;

// On commence la transformation à partir de ce post
$postBizarre = $nbpost-$nbpostFin;

?>
<!-- Ma page -->
<!-- Contenu -->
<div class="row">
    <div class="col-md-3 col-sm-0 col-xs-0"></div>
    <div class="taxonomy col-md-9 col-sm-12 col-xs-12 pd-0">
        <?php if (have_posts()) :
            $i=1;
            while (have_posts()) : the_post();?>
            <section class="grayscale">
                <a href="<?php the_permalink(); ?>">
                    <?php $gallery = get_field('image'); ?>
                    <div class="col-sm-<?php echo $i > $postBizarre && $nbpostFin != 0 ? 12/$nbpostFin : '4'  ; ?> half-height background-cover" style="background-image: url('<?php echo $gallery[0]['url']; ?>');">
                        <div class="center">
                            <div class="title-taxonomy"><?php the_title(); ?></div>
                        </div>
                        <div class="<?php echo $i%2 == 1 ? 'voile' : 'voile-darker'; ?>"></div>
                    </div>
                </a>
            </section>
        <?php $i++; endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
