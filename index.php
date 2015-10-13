<?php get_header('');?>
<div class="container sin-padding">
        <section id="elem4">
        <div class="container  ">
            <div class="row">
                <article class="col-lg-7 col-md-8 col-sm-8 c/wol-xs-12  ">
                    <div class="news">
                        <?php $vsdid = get_cat_ID( 'vsd'); ?>
                    <?php
                    query_posts(array('post_type'=>'post','posts_per_page'=>3,'cat'=> '-17, -'.$vsdid.', -11,-21,-22,-23'));
                    // query_posts( 'cat= -'.$vsdid.',-11,-21,-22,-23','posts_per_page=3');
                    ?>
                    <ul id="slider1">
                        <?php while(have_posts()){ the_post();?>
                        <li>
                            <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <a href="<?php the_permalink(''); ?>" title="<?php the_title();?>">
                                    <div class="image">
                                        <img src="<?php echo $feat; ?>" class="img-full img-responsive" alt="<?php the_title();?>"/>
                                    </div>
                                    </a>

                                    <section class="container-fluid top-neg ">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 sin-padding">
                                                    <div class="dates">
                                                    <p class="">
                                                        <?php echo get_the_date('d');?> <br class="hidden-sm hidden-xs">
                                                        <?php echo get_the_date('M');?><br  class="hidden-sm hidden-xs">
                                                        <?php echo get_the_date('Y');?>
                                                    </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-11 col-md-11 col-sm-10 col-xs-12 sin-padding">
                                                    <div class="contenido">
                                                            <p class="categoria"><?php the_category();?></p>
                                                            <a href="<?php the_permalink(''); ?>" title="<?php the_title();?>"><h1><?php echo max_charlength(get_the_title(),55);?></h1></a>
                                                            <p class="resumen"><?php echo max_charlength(get_the_content(),590,'');?>
                                                              <br/>
                                                              <br/>
                                                            </p>


                                                    </div>
                                                </div>
                                            </div>
                                            </section>
                                            <section class="contenido-bajo">
                                                            <div class="container-fluid sin-padding">
                                                                <div class="row">
                                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                                                                        <div class="icon">
                                                                            <i class="fa fa-user fa-lg"></i>
                                                                                WEBQD
                                                                            </div>
                                                                    </div>
                                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                                        <div class="icon">
                                                                            <i class="fa fa-calendar fa-lg"></i>
                                                                            <?php echo get_the_date('d M Y');?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                                        <div class="icon no-borde">
                                                                            <a href="<?php the_permalink();?>">
                                                                            <i class="fa fa-plus-circle  fa-lg"></i>
                                                                            Leer Más
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </section>

                    </li>
                    <?php } ?>
                    </ul>
                    </div>
                </article>
                <article class="col-lg-5 col-md-4 col-sm-4 col-xs-12 sidebar-vsd">
                <?php query_posts(array('post_type'=>'post','category_name' =>'vsd','posts_per_page'=>5));
                $x=0; ?>
                <?php while(have_posts()){ the_post();?>
                <?php if($x== 0){?>
                    <div class="image-vsd">
                        <a href="<?php echo home_url('seccion/vsd');?>">
                            <div class="liston">
                                        <img src="<?php bloginfo('template_url') ?>/images/listonvsd.png"/>
                            </div>
                        </a>
                        <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <a href="<?php the_permalink();?>"><img src="<?php echo $feat;?>" class="img-full img-responsive"/></a>
                        <div class="title">
                            <a href="<?php the_permalink();?>">
                            <h2><?php echo max_charlength(get_the_title(),75,'...');?></h2>
                            </a>
                        </div>
                    </div>
                    <?php $x=1; ?>
                    <?php }else {?>

                    <div class="item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="miniatura">

                                        <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                        <a href="<?php the_permalink();?>"><img src="<?php echo $feat; ?>" class="img-full"/></a>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                  <a href="<?php the_permalink();?>">  <h3><?php echo max_charlength(get_the_title(),35,'...');?></h3></a>
                                    <p class=""><?php echo max_charlength(get_the_content(),60,'');?> <a href="<?php the_permalink();?>">Leer Más</a> </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                    <?php } ?>
                </article>
            </div>
        </div>
        </section>
        <div class="clearfix"></div>
                    <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <?php
                        $args = array(
                        	'type'                     => 'post',
                        	'child_of'                 => 0,
                        	'parent'                   => '',
                        	'orderby'                  => 'id',
                        	'order'                    => 'ASC',
                        	'hide_empty'               => 1,
                        	'hierarchical'             => 1,
                        	'exclude'                  => $vsdid,
                        	'include'                  => '4,3,5,6,7',
                        	'number'                   => '',
                        	'taxonomy'                 => 'category',
                        	'pad_counts'               => false
                        );
                        $categories = get_categories($args);
                        $x = 0;
                        $c= 0;
?>
<?php foreach($categories as $category){?>
                            <?php if($c==3){
                                $x=4;
                            $z="33";
                            }
                            ?>
                        <?php if($x==0){?>
                        <div class="dual-box <?php echo $x;?>">
                            <div class="container-fluiryd sin-padding">
                                <div class="row">
                                    <section class="col-xs-12">
                                        <?php $link = 'seccion/'.$category->slug; ?>
                                        <div class="title-cat">
                                        <a href="<?php echo home_url($link);?>"><h2><?php echo $category->name; ?></h2></a>
                                        </div>
                                    </section>
                                    <?php query_posts(array('post_type'=>'post','category_name'=>$category->slug,'posts_per_page'=>2));
                                    $i=0;
                                        ?>
                                    <?php while(have_posts()){ the_post();?>
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



                                    <?php  }
                                    $x=1;
                                    ?>
                                        </div>
                                    </div>
                                </div>
                        <?php } elseif ($x==1){?>
                                        <div class="dual-box-large <?php echo $x . $z;?>">
                                         <div class="container-fluid sin-padding">
                                               <div class="row">
                                                    <section class="col-xs-12">
                                                        <?php $link = 'seccion/'.$category->slug; ?>
                                                    <div class="title-cat">
                                                            <a href="<?php echo home_url($link);?>"><h2><?php echo $category->name; ?></h2></a>
                                                    </div>
                                                    <?php query_posts(array('post_type'=>'post','category_name'=>$category->slug,'posts_per_page'=>2));?>
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
                                    </section>
                                    </div>
                                    </div>
                                        </div>
                    <?php $x=0; ?>
                            <?php }    ?>

                            <?php if($c==3){ ?>

                        </section>
                        <section class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="container-fluid sin-padding">
                                <div class="row">
                                    <section class="col-xs-12">
                                        <?php query_posts(array('pagename'=>'configuraciones','posts_per_page'=>1));?>
                                        <?php while(have_posts()){ the_post();?>
                                            <?php the_field('widget_de_twitter');?>
                                        <?php } ?>
                                    </section>
                                    <section class="col-xs-12">
                                        <div class="title-cat" style="margin-top: 10px!important;">
                                                <a href="<?php echo home_url("galeria");?>" tile="Ver Galerio"> <h2><i class="fa fa-picture-o"></i> Galería</h2></a>
                                        </div>
                                    </section>
                                    <?php $poste= query_posts(array("post_type"=>"galeria","posts_per_page"=>4));?>
                                    <?php if(!empty($poste)){?>
                                    <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 art widget-galeria">
                                        <div style="overflow: hidden;background-color: white;border: 1px solid #848181;">

                                            <?php while(have_posts()){ the_post(); ?>

                                               <a href="<?php the_permalink();?>">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
                                                      <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                    <img src="<?php echo $feat; ?>" alt="" class="img-responsive img-widget">
                                                    <div class="title-hover">
                                                        <i class="fa fa-search"></i>
                                                        <p title><?php echo max_charlength(get_the_title(),12,"");?></p>
                                                    </div>
                                                </div>
                                                </a>
                                            <?php } ?>
                                            <div class="clearfix"></div>
                                        <p>
                                            <a href="<?php echo home_url("galeria");?>" tile="Ver Galerio">Ver más</a>
                                        </p>
                                        </div>

                                    </article>
                                    <?php } ?>
                                    <!--video-->
                                    <section class="col-xs-12" style="margin-top:20px;">
                                        <div class="title-cat" style="margin:0px!important;">
                                             <a href="<?php echo home_url("videos");?>" tile="Ver Videos">   <h2><i class="glyphicon glyphicon-play-circle"></i> Videos</h2></a>
                                        </div>
                                    </section>
                                 <?php $poste= query_posts(array("post_type"=>"videos","posts_per_page"=>4));?>
                                    <?php if(!empty($poste)){?>
                                    <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 art widget-galeria">

                                        <div style="overflow: hidden;background-color: white;border: 1px solid #848181;">

                                            <?php while(have_posts()){ the_post(); ?>
                                               <a href="<?php the_permalink();?>">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padd">
                                                      <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                    <img src="<?php echo $feat; ?>" alt="" class="img-responsive img-widget">
                                                    <div class="title-hover">
                                                        <i class="fa fa-search"></i>
                                                        <p title><?php echo max_charlength(get_the_title(),12,"");?></p>
                                                    </div>
                                                </div>
                                                </a>
                                            <?php } ?>
                                            <div class="clearfix"></div>
                                        <p>
                                            <a href="<?php echo home_url("videos");?>" tile="Ver Videos">Ver más</a>
                                        </p>
                                        </div>

                                    </article>
                                    <?php } ?>
                                        <section class="col-xs-12" style="margin-top:20px;">
                                        <div class="title-cat" style="margin:0px!important;">
                                             <a href="<?php echo home_url("");?>" tile="Ver Blog">   <h2 style="text-align:center;"> Blog Quinto Dia</h2></a>
                                        </div>
                                        </section>

                                        <article class="col-xs-12">
                                            <div class="content-item">
                                                                 <?php $poste= query_posts(array("post_type"=>"blog","posts_per_page"=>10));?>
                                                   <?php while(have_posts()){ the_post();?>
                                                <section class="item">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                <div class="minuatura">
                                                                    <img src="<?php echo $feat;?>" />

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <h2><?php echo max_charlength(get_the_title(),40,""); ?></h2>
                                                                <h4><?php the_author();?></h4>
                                                            </div>
                                                                <div class="col-xs-12">
                                                                <p class=""><?php echo max_charlength(get_the_content(),130,""); ?> <a href="<?php the_permalink();?>">Leer más</a></p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                  <?php } ?>
                                            </div>
                                        </article>

                                </div>
                        </div>
                        </section>
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
                            <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                            <?php } ?>
                            <?php if($x==4){ ?>
                                <div class="dual-box-large <?php echo $x . $z;?>">
                                         <div class="container-fluid sin-padding">
                                               <div class="row">
                                                    <section class="col-xs-12">
                                                    <div class="title-cat">
                                                        <?php $link = 'seccion/'.$category->slug; ?>
                                                            <a href="<?php echo home_url($link); ?>"><h2><?php echo $category->name; ?></h2></a>
                                                    </div>
                                                    <?php query_posts(array('post_type'=>'post','category_name'=>$category->slug,'posts_per_page'=>2));?>
                                                    <?php while(have_posts()){ the_post();?>
                                                    <article class="page-article">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                                             <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                <div class="image">
                                                              <a href="<?php the_permalink();?>">      <img src="<?php echo $feat;?>" alt="" class="img-responsive img-full"></a>
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
                                    </section>
                                    </div>
                                    </div>
                                        </div>
                                        <?php $x=4; ?>
                            <?php } ?>

                        <?php  $c++; } ?>




        </section>
      <section class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <div class="container-fluid sin-padding">
            <div class="row">
                 <?php $chis= query_posts(array("post_type"=>"post","category_name"=>"chistografias",'posts_per_page'=>1));?>
                 <?php if(!empty($chis)){?>
                <div class="col-xs-12">
                    <div class="chispagrafias">
                    <section class="title title-azul">
                            <h1>Chispagrafias</h1>
                        </section>
                                <div class="imagen">
                                <?php while(have_posts()){ the_post();?>
                             <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                             <img src="<?php echo $feat;?>" alt="<?php the_title(); ?>"/>
                                <?php } wp_reset_query();?>
                                </div>
                            </div>
                             <?php } ?>


                        <div class="frase">
   <?php $fr= query_posts(array("post_type"=>"post","category_name"=>"frase-de-la-semana",'posts_per_page'=>1));?>
    <?php if(!empty($chis)){?>
                            <section class="title">
                                <h1>La frase de la semana</h1>
                            </section>
                           <?php while(have_posts()){?>
                            <div class="content">
                                <?php the_post();?>
                            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="content-image-frase">
                                <img src="<?php echo $feat_image;?>" class="img-responsive image-frase" alt="">
                            </div>
                            </div>
                            <?php } ?>
                              <?php } ?>
                                <?php $fr= query_posts(array("post_type"=>"post","category_name"=>"la-quinta-pregunta",'posts_per_page'=>1));?>
    <?php if(!empty($chis)){?>

                            <section class="title">
                                <h1>La quinta pregunta</h1>
                            </section>
                              <?php while(have_posts()){?>
                            <div class="content">
                                <?php the_post();?>
                           <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="conten-image">
                                <img src="<?php echo $feat_image;?>" class="img-responsive image-quinta" alt="">
                            </div>
                            </div>
                            <?php } ?>
                              <?php } ?>
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
                            <!--fin publicidad-->
                             <?php $indice = query_posts(array("post_type"=>"post","category_name"=>"indice",'posts_per_page'=>4));?>
                                           <?php if(!empty($indice)){?>
                            <div class="list-indice">
                                    <h3>ÍNDICE</h3>

                        <?php while(have_posts()){?>
                       <?php the_post();?>
                                     <section class="item">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <div class="miniatura">
                                                                    <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                                 <a href="<?php the_permalink();?>">   <img src="<?php echo $feat;?>" class="img-full" alt="<?php the_title();?>"></a>

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-9">
                                                                  <h4><?php echo get_the_date("M d Y");?> </h4>
                                                                <h2><?php echo max_charlength(get_the_title(),20, "")?></h2>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </section>
                                                <?php } ?>

                            </div>
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
                            <div class="credes">
                                <div class="title-redes">
                                    <p>Siguenos en las redes sociales</p>
                                </div>
                                <div class="redes">
                                    <?php query_posts(array('post_type'=>'page','pagename'=>'configuraciones','posts_per_page'=>1));?>
                                    <?php while(have_posts()){ the_post();?>
                                    <?php if(get_field('twitter')){?>
                                        <a href="<?php the_field('twitter');?>">
                                            <div class="icon twitter">
                                                <p class="fa fa-twitter fa-lg"></p>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    <?php if(get_field('facebook')){?>
                                    <a href="<?php the_field('facebook');?>">
                                        <div class="icon facebook">
                                            <p class="fa fa-facebook fa-lg"></p>
                                        </div>
                                    </a>
                                    <?php } ?>
                                    <?php if(get_field('google')){?>
                                    <a href="<?php the_field('google');?>">
                                         <div class="icon google">
                                            <p class="fa fa-google fa-lg"></p>
                                        </div>
                                    </a>
                                    <?php } ?>
                                    <?php if(get_field('instagram')){?>
                                    <a href="<?php the_field('google');?>">
                                      <div class="icon rss">
                                        <p class="fa fa-instagram fa-lg"></p>
                                    </div>
                                    </a>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                         </div>

            </div>
        </div>
    </section>
    </div>
     </div>
<?php get_footer('');?>