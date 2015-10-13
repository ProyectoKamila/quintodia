<?php get_header('');?>
<?php wp_reset_query();?>
<section class="galeria">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="title-galeria">Galeria Quinto Dia</h1>
                <ul class="nav nav-pills categorias">
                    <li><a href="" class="">Todos</a></li>
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
                <p class="breadcum"><a href="<?php echo home_url('galeria');?>">Galerias</a> / Todo</p>
            </div>
            <?php while(have_posts()){ the_post();?>
                    <div class="col-xs-6">
                        <div class="image-galeria">
                                <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <a href="<?php the_permalink(); ?>"data-fancybox-group="g1" class="" title="<?php the_title();?>"><img src="<?php echo $feat; ?>" title="<?php the_title();?>"/>
                                <div class="layer">
                                        <h2 class="layer-title"><?php the_title();?></h2>
                                        <div class="line"></div>
                                </div>
                                </a>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer('');?>