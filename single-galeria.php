<?php get_header('');?>

<section class="galeria">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="title-galeria">Galeria Quinto Dia</h1>
                <ul class="nav nav-pills categorias">
                    <li><a href="<?php echo home_url("");?>" class="">Todos</a></li>
                   <?php

                        $args = array(
                        	'type'                     => 'galeria',
                        	'child_of'                 => 0,
                        	'parent'                   => '',
                        	'orderby'                  => 'name',
                        	'order'                    => 'ASC',
                        	'hide_empty'               => 1,
                        	'hierarchical'             => 1,
                        	'exclude'                  => '',
                        	'include'                  => '',
                        	'number'                   => '',
                        	'taxonomy'                 => 'tipo-galeria',
                        	'pad_counts'               => false
                        );
                    ?>
                    <?php $categories = get_categories( $args ); ?>
                    <?php foreach($categories as $category){ ?>
                        <li> <a href="<?php echo home_url("tipo-galeria/".$category->name."");?>"> <?php echo $category->name;?></a></li>
                    <?php } ?>
                </ul>
                <?php the_post();?>
                <p class="breadcum"><a href="<?php echo home_url('galeria');?>">Galerias</a> /
                <?php $terms = get_the_terms( $post_id, 'tipo-galeria' ); ?>
                <?php if(!empty($terms)){?>
                                   <?php foreach($terms as $term){?>
                               <?php echo  $term->name ." / "; ?>
                    <?php } ?>
                <?php }  ?>
                <?php the_title();?>
                </p>
            </div>

                    <div class="col-xs-6">
                        <div class="image-galeria">
                                <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <a href="<?php echo $feat; ?>"data-fancybox-group="g1" class="fancybox" title="<?php the_title();?>"><img src="<?php echo $feat; ?>" title="<?php the_title();?>"/>
                                <div class="layer">
                                        <h2 class="layer-title"><?php the_title();?></h2>
                                </div>
                                </a>

                        </div>
                    </div>
                    <?php
            if ( get_post_gallery() ) :
            $gallery = get_post_gallery( get_the_ID(), false );

            /* Loop through all the image and output them one by one */
            foreach( $gallery['src'] AS $src )
            {
                ?>
                <div class="col-xs-6">
                <div class="image-galeria">
                    <a href="<?php echo $src; ?>" data-fancybox-group="g1" class="fancybox" title="<?php the_title(); ?>">
                        <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
                        <div class="layer">
                                        <h2 class="layer-title"><?php the_title();?></h2>
                                </div>
                    </a>
                </div>
            </div>
                <?php
            }
        endif;
        ?>
        </div>
    </div>
</section>
<?php get_footer('');?>