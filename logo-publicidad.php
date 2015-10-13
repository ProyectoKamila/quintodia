  <div class="clearfix"></div>

          <div id="elem2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="logo">
                            <a href="<?php echo home_url('');?>">    <img src="<?php echo $logo;?>" class="img-responsive img-ful" alt="Quintodia"></img></a>
                        </div>
                        <p class="date"><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                        <?php $top = query_posts(array('posts_type'=>'publicidad','posicion'=>'top'));?>
                        <?php if(!empty($top)){?>
                        <div class="publicidad">
                                <ul class="bxslider">
                                <?php while(have_posts()){  the_post();?>
                                <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                              <li><a href="<?php the_field('enlace');?>"><img src="<?php echo $feat;?>" class="img-responsive img-full"/></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>