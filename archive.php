<?php get_header('');?>
<?php wp_reset_query();?>
<div class="container category">
    <div class="row ">
        <?php //debug($cat,false);?>
        <?php $x=0;?>
        <?php while(have_posts()){ the_post();?>
            <?php if($x==0){ ?>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 0 ">
                <div class="news">
                <div class="title-cat">
                  <h2><?php echo get_cat_name( $cat ); ?></h2>
               </div>
               <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
               <div class="image">
                    <img src="<?php echo $feat; ?>" alt="" class="img-full">
               </div>
                <div class="title"><h2><?php the_title();?></h2></div>
                <div class="mini-content">
                    <p><?php echo max_charlength(get_the_content(),200,"");?> <a href="<?php the_permalink();?>">Leer más</a></p>
                </div>
            </div>
        </div>
            <?php $x=1; $z=0; } elseif($x==1 ){?>
                 <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <?php if($z==0){ ?>
                      <div class="title-cat" style="margin-top: 20px;">
                          <h2>Recientes</h2>
                       </div>
                   <?php $z=1121; } ?>
                    <div class="list-indice">
                        <section class="item">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <div class="miniatura">
                                                                    <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                    <img src="<?php echo $feat;?>" class="img-full" alt="<?php the_title();?>">

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <h2><?php echo max_charlength(get_the_title(),60, "")?></h2>
                                                                 <h4><?php echo max_charlength(get_the_content(),90, "")?> </h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </section>
                    </div>
                 </div>
                 <?php $x=1;?>
            <?php } ?>
         <?php } ?>
    </div>
</div>
<?php get_footer('');?>