<?php get_header('');?>
<?php wp_reset_query();?>
<section class="galeria">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="title-galeria">Videos Quinto Dia</h1>
                <ul class="nav nav-pills categorias">
                    <li><a href="<?php echo home_url('galeria');?>" class="">Todos</a></li>
                   <?php

                        $args = array(
                        	'type'                     => 'video',
                        	'child_of'                 => 0,
                        	'parent'                   => '',
                        	'orderby'                  => 'name',
                        	'order'                    => 'ASC',
                        	'hide_empty'               => 1,
                        	'hierarchical'             => 1,
                        	'exclude'                  => '',
                        	'include'                  => '',
                        	'number'                   => '',
                        	'taxonomy'                 => 'tipo-videos',
                        	'pad_counts'               => false
                        );
                    ?>
                    <?php $categories = get_categories( $args ); ?>
                    <?php foreach($categories as $category){ ?>
                        <li> <a href="<?php echo home_url("tipo-videos/".$category->name."");?>"> <?php echo $category->name;?></a></li>
                    <?php } ?>
                </ul>
                <p class="breadcum"><a href="<?php echo home_url('videos');?>">Videos</a> / <a href="<?php echo home_url("/tipo-galeria/".$term."");?>"><?php echo $term; ?></a></p>
            </div>
                      <?php while(have_posts()){ the_post();?>
                    <div class="col-xs-6">
                        <div class="image-galeria galeria-videos">
                                <?php the_content();?>

                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer('');?>