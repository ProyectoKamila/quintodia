<?php
$catid = $wp_query->query_vars['cat'];
$cat_family = array_reverse(explode(',',get_category_parents($catid,false,',')));
//debug($cat_family[2]);
//echo ($cat_family[2]) ? $cat_family[2].' : ' : '';
//echo $cat_family[1];
?>
<?php if(!is_category('vsd') and $cat_family[2] != "VSD"){?>
<?php get_header('');?>
<?php wp_reset_query();?>
<div class="container category">
    <div class="row ">
        <?php //debug($cat,false); ?>
        <?php
        $x=0; $i=0;
        ?>
        <?php
        if ( !have_posts() ):?>
        <br>
      <div class="alert alert-info">
         <p>Lo sentimos no se encontraron publicaciones</p>
      </div>
      </div>
 <?php         endif;

        while(have_posts()){

        the_post();?>
            <?php
        //do{
        if($x==0){ ?>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 <?php echo $i;?> ">
                <div class="news">
                <div class="title-cat">
                  <h2><?php echo get_cat_name( $cat ); ?></h2>
               </div>
               <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
               <div class="image">
<a href="<?php the_permalink();?>"><img src="<?php echo $feat; ?>" alt="" class="img-full"></a>
               </div>
                <div class="title"><h2><?php the_title();?></h2></div>
                <div class="mini-content">
                    <p><?php echo max_charlength(get_the_content(),200,"");?> <a href="<?php the_permalink();?>">Leer más</a></p>
                </div>
            </div>
        </div>
            <?php $x=1; $z=0; } elseif($x==1 ){?>
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php if($z==0){ ?>
                      <div class="title-cat" style="margin-top: 20px;">
                          <h2>Recientes</h2>
                       </div>
                   <?php $z=1121; } ?>
                    <div class="list-indice <?php echo $i;?>">
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
                    </div>
                 </div>
                 <?php if($i==3) {?>

                     <?php $x=2;
                            $z=3;
                     ?>


                 <?php } else { ?>
                     <?php $x=1;?>
                 <?php } ?>
            <?php } ?>
            <?php
            if($x==2){?>
            <?php if($z==3){?>
            <div class="clarfix"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 <?php echo $i;?> ">
  <div class="dual-box <?php echo $i;?>">
                                            <div class="container-fluid sin-padding">
                                                <div class="row">
                <?php $z=500; } ?>
<?php if($i<5){?>
                                                    <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="page-article">
                                                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                            <div class="image">
                                                                <img src="<?php echo $feat;?>" alt="" class="img-responsive img-full">
                                                            </div>
                                                            <div class="title">
                                                                    <h2><?php the_title();?></h2>
                                                            </div>
                                                            <p><?= max_charlength(get_the_content(),200,''); ?> <br/>
                                                            <a href="<?php the_permalink();?>" class="btn btn-default"> > Leer más</a>
                                                            </p>
                                                             <section class="contenido-bajo">
                                                            <div class="container-fluid sin-padding">
                                                                <div class="row">
                                                                    <div class="col-xs-2 ">
                                                                        <div class="icon">
                                                                            <i class="fa fa-user fa-lg"></i>

                                                                            </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        <p><?php the_author(); ?></p>
                                                                    </div>
                                                                    <div class="col-xs-2 ">
                                                                        <div class="icon">
                                                                            <i class="fa fa-calendar fa-lg"></i>

                                                                        </div>
                                                                    </div>
                                                                        <div class="col-xs-4">
                                                                            <p><?php echo get_the_date('d M Y');?></p>
                                                                        </div>

                                                                </div>
                                                            </div>
                                            </section>
                                                        </div>

                                                    </article>
                                                    <?php } ?>
                                                    <?php  $x=2; ?>
                                                    <?php if($i==5){?>
                                                            <?php $x=4;?>
                                                    <?php } ?>




            <?php }?>
         <?php $i++; }
         if($i<4){
         do{
         ?>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 <?= $i;?>" style="height:112px;"></div>

         <?php
         $i++;
         }while($i==4); $s = 1;?>
         <div class="clarfix"></div>

      <?php   }
        //}while($i<=5);
         ?>
                                                        </div><!--a-->
                                                    </div><!--b-->
          <?php
          if($s==1){
          $r = 1;
         do{
         ?>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>

         <?php
         $r++;
         }while($r == 3);
         }?>
                                                </div><!--c-->
         </div>
         <section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
        <div class="container-fluid sin-padding">
            <div class="row">

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
                            <!--fin publicidad-->

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
                                    <img src="<?php echo $feat; ?>" alt="titl"/>
                                </a>
                            </div>
                                <?php } ?>
                            <?php } ?>
                            <!--fin publicidad-->
                         </div>

        <!--    </div>-->
        <!--</div>-->
    </section>

             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 subcategory sin-padding">
      <?php
                        $args = array(
                        	'type'                     => 'post',
                        	'child_of'                 => 0,
                        	'parent'                   => $cat,
                        	'orderby'                  => 'id',
                        	'order'                    => 'ASC',
                        	'hide_empty'               => 1,
                        	'hierarchical'             => 1,
                        	'exclude'                  => '',
                        	'include'                  => '',
                        	'number'                   => '',
                        	'taxonomy'                 => 'category',
                        	'pad_counts'               => false
                        );
                        $categories = get_categories($args);
?>
            <div class="container-fluid sin-padding">
                <div class="row">
                   <?php foreach($categories as $category) {?>
                    <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                       <?php query_posts(array('category_name'=>$category->slug));?>
                       <?php while(have_posts()){ the_post(); ?>
                        <div class="the-subcategory">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-xs-5">
                                    <div class="miniatura">
                                       <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                       <img src="<?php echo $feat;?>"/>
                                    </div>
                                 </div>
                                 <div class="col-xs-7">
                                    <div class="wrap">
                                          <?php $link = 'seccion/'.$category->slug; ?>
                                    <a href="<?php echo home_url($link);?>"><h3><?php echo $category->name;?></h3></a>
                                    <p><?php echo max_charlength(get_the_content(),90,"");?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php } ?>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer('');?>
<?php } else {?>
<?php get_header("vsd");
wp_reset_query();?>
<div class="container">
   <div class="row">
      <div class="col-lg-9">
         <div class="last-vsd">
                  <ul id="slider2">
                     <?php while(have_posts()){ the_post();?>
                     <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                     <li>
                        <a href="<?php the_permalink(); ?>">
                        <div class="image">
                           <img src="<?php echo $feat;?>" alt="<?php the_title();?>">
                        </div>
                           </a>
                        <div class="more">
                              <h1><?php the_title();?></h1>
                              <p><?php echo max_charlength(get_the_content(),450,'...');?></p>
                        </div>
                     </li>
                     <?php } ?>
                  </ul>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="title-cat menu-vsd " style="margin-top:20px; margin-bottom:0px;">
            <h2 style="text-align:center; color:white;">Twitter</h2>
         </div>
         <div class="">
            <a class="twitter-timeline" href="https://twitter.com/SuplementoVSD" data-widget-id="638476159223730177">Tweets por el @SuplementoVSD.</a>
               <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
         </div>
      </div>
      <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
      <?php

      $args = array(
      	'type'                     => 'post',
      	'child_of'                 => '',
      	'parent'                   => $catid,
      	'orderby'                  => 'name',
      	'order'                    => 'ASC',
      	'hide_empty'               => 1,
      	'hierarchical'             => 1,
      	'exclude'                  => '',
      	'include'                  => '',
      	'number'                   => '',
      	'taxonomy'                 => 'category',
      	'pad_counts'               => false

      );
      $categories = get_categories($args);
      //debuqeg($categories, false);
      ?>
      <div class="container-fluid">
         <div class="row">
            <div class="col-xs-12 sin-padding">
               <div class="recent-vsd">
                  <?php if(!empty($categories)) { ?>
                 <div class="title-cat title-cat-vsd">
                        <h2 style="text-align:center; color:white;">Recientes</h2>
                  </div>
                  <?php }?>
                     <?php foreach($categories as $category) {?>
                              <?php $post= query_posts(array('post_type'=>'post', 'category_name'=> $category->slug ,'posts_per_page'=>1));?>
                              <?php if(!empty($post)){?>
                                 <?php while(have_posts()){ ?>
                                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sin-padding item">
                                          <div class="container-fluid">
                                             <div class="row">
                                                <?php the_post();?>
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                                   <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                   <div class="miniatura">
                                                      <img src="<?php echo $feat;?>"/>
                                                   </div>
                                                   <?php $feat ="";?>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8">
                                                   <h2><?php echo $category->name;?></h2>
                                                   <p><?php echo max_charlength(get_the_content(),100,'...');?><br> <a href="<?php the_permalink();?>">Leer Mas</a> </p>
                                                </div>
                                             </div>
                                          </div>
                                    </article>
                                    <?php }  ?>
                           <?php } ?>
                     <?php } ?>
                  </div>
            </div>

         </div>
      </div>
      <div class="title-cat  title-cat-vsd-2 ">
                        <h2 style="text-align:center; color:white;">Sibaritas</h2>
      </div>
              <div class="dual-box-large">
                  <div class="container-fluid sin-padding">
                     <div class="row">
                        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                           <?php query_posts(array('post_type'=>'post','category_name'=>'sibaritas','posts_per_page'=>1));?>

                                                          <?php while(have_posts()){ the_post();?>
                                                          <article class="page-article">
                                                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                                                   <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                      <div class="image">
                                                                       <a href="<?php the_permalink(); ?>"> <img src="<?php echo $feat;?>" alt="" class="img-responsive img-full"></a>
                                                                      </div>
                                                              </div>
                                                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                                                                  <div class="title">
                                                                      <h2><?php the_title();?></h2>
                                                                  </div>
                                                                  <p class=""><?php echo max_charlength(get_the_content(),320,'');?> <a href="<?php the_permalink();?>">Leer Más</a> </p>
                                                              </div>
                                                          </article>
                                                          <?php } ?>
                           <?php if ( !have_posts() ):?>
                           <article class="page-article">
                              <div class="alert alert-info"><p>No se han encontrado publicaciones en "Sibaritas"</p></div>
                              </article>
                           <?php endif; ?>
                     <!--sdjhdsj-->
                         <div class="title-cat  title-cat-vsd-2 ">
                              <h2 style="text-align:center; color:white;">El ultimo y nos Vamos</h2>
                        </div>
                           <?php query_posts(array('post_type'=>'post','category_name'=>'el-ultimo-y-nos-vamos','posts_per_page'=>1));?>

                                                          <?php while(have_posts()){ the_post();?>
                                                                <article class="page-article">
                                                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                                                   <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                      <div class="image">
                                                                       <a href="<?php the_permalink(); ?>"> <img src="<?php echo $feat;?>" alt="" class="img-responsive img-full"></a>
                                                                      </div>
                                                              </div>
                                                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
                                                                  <div class="title">
                                                                      <h2><?php the_title();?></h2>
                                                                  </div>
                                                                  <p class=""><?php echo max_charlength(get_the_content(),320,'');?> <a href="<?php the_permalink();?>">Leer Más</a> </p>
                                                              </div>
                                                          </article>
                                                          <?php } ?>
                           <?php if ( !have_posts() ):?>
                           <article class="page-article">
                              <div class="alert alert-info"><p>No se han encontrado publicaciones en "El ultimo y nos vamos"</p></div>
                              </article>
                           <?php endif; ?>

                        </div>
                         <?php query_posts(array("post_type"=>"publicidad","posicion"=>"publicidad-izquierda-home",'posts_per_page'=>1));?>
                            <?php while(have_posts()){ the_post()?>
                        <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 <?php echo $x . $z;?>">
                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="publi large-home">
                                <a href="<?php the_field('enlace');?>"><img src="<?php echo $feat;?>" class="img-responsive"/></a>
                            </div>
                        </section>
                         <?php } ?>
                          <?php query_posts(array("post_type"=>"publicidad","posicion"=>"publicidad-derecha-home",'posts_per_page'=>1));?>
                            <?php while(have_posts()){ the_post()?>
                         <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12 <?php echo $x . $z;?>">
                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="publi large-home">
                                <a href="<?php the_field('enlace');?>"><img src="<?php echo $feat;?>" class="img-responsive"/></a>
                            </div>
                        </section>
                        <?php } ?>
                  </div>
      </div>
</div>
  <?php query_posts(array("post_type"=>"publicidad","posicion"=>"large-home",'posts_per_page'=>1));?>
                            <?php while(have_posts()){ the_post()?>
                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="publi large-home">
                                <a href="<?php the_field('enlace');?>"><img src="<?php echo $feat;?>" class="img-responsive"/></a>
                            </div>
                            <?php } ?>
         </section>
         <sidebar class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="title-cat" style="margin-top: 0px;">
                          <h2>Anuncios Patrocinados</h2>
              </div>
            <div class="container-fluid sin-padding">
            <div class="row">
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
                            <!--fin publicidad-->

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
                                    <img src="<?php echo $feat; ?>" alt="titl"/>
                                </a>
                            </div>
                                <?php } ?>
                            <?php } ?>
                            <!--fin publicidad-->
                         </div>

            </div>
         </sidebar>
      </div>
</div>
<?php get_footer("");?>
<?php } ?>