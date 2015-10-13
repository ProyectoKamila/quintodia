<?php

get_header('');?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-tarifas">
             <h2>Resultados de busqueda</h2>
            </div>
        </div>
     <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Que desea buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            	<input type="submit" class="search-submit btn btn-default btn-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
     <?php while(have_posts()){ the_post();?>
     <div class="dual-box ">
                                    <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="page-article">
                                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                            <div class="image">
                                                <a href="<?php the_permalink();?>"><img src="<?php echo $feat;?>" alt="" class="img-responsive img-full"></a>
                                            </div>
                                            <div class="title">
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title('');?>"><h2><?php echo max_charlength(get_the_title(),50,'...');?></h2></a>
                                            </div>
                                            <p class=""><?php echo max_charlength(get_the_content(),320,'');?> <a href="<?php the_permalink();?>">Leer Más</a> </p>
                                        </div>
                                    </article>
             </div>


                                    <?php  } ?>
     </section>
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer('');?>