<?php wp_head(); ?>
<?php the_post();?>
<?php
$cate = get_the_category();
if(!empty($cate)){
$cat_family = explode(',',get_category_parents($cate[0]->term_id,false,','));
}
//debug($cat_family,false);
//echo $cat_family[0];
//debug($cat_family,false);

if($cat_family[0] !== 'VSD' ){
?>
<?php get_header('');?>
<?php } else {?>
<?php get_header('vsd');?>
<?php } ?>
<div class="container sin-padding single">
    <div class="row ">

        <?php //debug($post,false);?>
<article class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
             <section class="col-xs-12">
                    <div class="title-cat">
                            <h2><?php
                            // $cate = get_the_category();
                             echo $cate[0]->name;
                            $idcat = $cate[0]->term_id;  ?> </h2>
                    </div>
                  <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="image">
                   <img src="<?php echo $feat;?>" class="img-full "/>
                </div>
                <div class="title">
                       <h1><?php the_title();?></h1>
                 </div>
                     <div class="texto">
                     <?php the_content();?>
                     <!-- Go to www.addthis.com/dashboard to customize your tools -->
                     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c426acefac69a8" async="async"></script>
                     <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                     </div>
                </section>

</article>

       <section class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
             <div class="title-cat" style="margin-top: 0px;">
                          <h2>Recientes</h2>
              </div>
                  <div class="list-indice">
                      <?php $string = "-".$post->id; ?>
                      <?php query_posts(array('category_name'=>$cate[1]->name,'posts_per_page'=>4,'exclude'=> $string));?>
                      <?php while(have_posts()){ the_post();?>
                        <section class="item">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <div class="miniatura">
                                                                    <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                     <a href="<?php the_permalink();?>">  <img src="<?php echo $feat;?>" class="img-full" alt="<?php the_title();?>"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <a href="<?php the_permalink();?>"><h2><?php echo max_charlength(get_the_title(),60, "")?></h2></a>
                                                                 <h4><?php echo max_charlength(get_the_content(),90, "")?> </h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                        </section>
                                    <?php } ?>
                    </div>
<div class="title-cat" style="margin-top: 0px;">
                          <h2>Enlaces Patrocinados</h2>
              </div>
                         <?php $sid1 = query_posts(array('posts_type'=>'publicidad','posicion'=>'lateral-1','posts_per_page'=>1));?>
                        <?php if(!empty($sid1)){?>
                        <?php while(have_posts()){?>
                       <?php the_post();?>
                            <div class="publicidad-sidebar">
                                <a href="<?php the_field("enlace");?>">
                                        <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <img src="<?php echo $feat; ?>" alt="titl"/>
                                </a>
                            </div>
                            <?php } ?>
                            <?php } ?>

                                   <?php $sid1 = query_posts(array('posts_type'=>'publicidad','posicion'=>'lateral-2','posts_per_page'=>1));?>
                        <?php if(!empty($sid1)){?>
                        <?php while(have_posts()){?>
                       <?php the_post();?>
                            <div class="publicidad-sidebar">
                                <a href="<?php the_field("enlace");?>">
                                        <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <img src="<?php echo $feat; ?>" alt="titl"/>
                                </a>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <!--fin publicidad-->
                            <?php $sid1 = query_posts(array('posts_type'=>'publicidad','posicion'=>'lateral-3','posts_per_page'=>1));?>
                        <?php if(!empty($sid1)){?>
                        <?php while(have_posts()){?>
                       <?php the_post();?>
                            <div class="publicidad-sidebar">
                                <a href="<?php the_field("enlace");?>">
                                        <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <img src="<?php echo $feat; ?>" alt="title"/>
                                </a>
                            </div>
                                <?php } ?>
                            <?php } ?>
                            <!--fin publicidad-->


    </section>


             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 subcategory ">

            <div class="container-fluid ">
                <div class="row">
 <?php query_posts(array('category_name'=>$cate[0]->slug,'post_not_in' => array($post->ID),'posts_per_page'=>2,'orderby'=>'rand'));?>
 <?php while(have_posts()){ the_post(); ?>
                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


                        <div class="the-subcategory">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-xs-5">
                                    <div class="miniatura">
                                       <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                       <a href="<?php the_permalink();?>"><img src="<?php echo $feat;?>" alt="<?php the_title();?>"/></a>
                                    </div>
                                 </div>
                                 <div class="col-xs-7">
                                    <div class="wrap">
                                          <?php $link = 'seccion/'.$category->slug; ?>
                                    <a href="<?php echo home_url($link);?>"><h3><?php echo max_charlength(get_the_title(),60,"")?></h3></a>
                                    <p><?php echo max_charlength(get_the_content(),90,"");?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                    </article>
                         <?php } ?>

                </div>
            </div>
        </div>

         </div>

</div>

<?php get_footer('');?>
<?php wp_footer()?>