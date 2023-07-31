<?php
/*
Template Name: Page Classique
*/
get_header(); ?>

<!-- Contenu -->
<div class="row">
    <div class="col-xs-12">
        <section class="row ">
            <?php $affiche = get_field('afficher_par');
            if (have_posts()) : while (have_posts()) : the_post();
            $image = get_field('image');
            if($affiche == 1): ?>
                <?php if(count($image) <= 1){ ?>
                    <div class="col-xs-12 half-height" style="background-size:cover; background-image: url('<?php echo $image[0]['url']; ?>');"></div>
                <?php }else{?>
                    <div class="col-xs-12 half-height">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <?php
                            foreach ($image as $img) { ?>
                                <div class="item"><img src="<?php echo $img['url']; ?>" alt=""></div> <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>
            <?php else : ?>
                <!-- Partie haute -->
                <?php
                // Je fais une boucle pour afficher toutes les images
                $i=0;
                if(is_array($image)):
                    foreach($image as $img){ ?>
                        <?php if($i >= (int)$affiche)
                            break;
                        ?>
                        <div class="col-sm-<?php echo 12/(int)$affiche; ?> half-height" style="background-size:cover; background-image: url('<?php echo $img['url']; ?>');"></div>
                        <?php $i++; } ?>
                <?php endif; ?>
            <?php endif; ?>
        </section>
        <!-- Partie basse -->

        <section class="row">
            <div class="col-sm-3 degrade half-height"></div>

            <div class="col-md-6 col-sm-8 bg-white no-height-mobile  half-height pd-right-0">
                <div class="border">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <div class="col-md-3 bg-white  col-sm-4 half-height">
                <h2><?php the_field('titre_informatif')?></h2>
                <p><?php the_field('texte_informatif')?></p>
            </div>
        </section>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
