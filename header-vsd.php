<!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php bloginfo('name');?></title>
        <meta name="viewport" content="width=device-width">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url');?>/css/main.less" />
        <script src="<?php bloginfo('template_url');?>/scripts/less.js"></script>
           <link href="<?php bloginfo('template_url');?>/css/anythingslider-vsd.css" rel="stylesheet" />
        <?php
            include ('library/ismobile.php');
            $detect = new Mobile_Detect();
        ?>
    </head>
    <body>
        <div class="loader loader-vsd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align:center; margin-top:27%; color:white;"><span class="fa fa-spinner fa-spin fa-4x"></span> </p>
                    </div>
                </div>
            </div>
        </div>
        <header id="elem1" class="header-redes header-redes-vsd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-7 col-md-5 col-lg-offset-8 col-lg-4">
                    <?php query_posts(array('post_type'=>'page','pagename'=>'configuraciones','posts_per_page'=>1));?>
                    <?php while(have_posts()){?>
                    <?php the_post();?>
                        <?php if(get_field('vsd-facebook')){?>
                            <a href="<?php the_field('vsd-facebook');?>">
                           <div class="circle">
                                <i class="fa fa-facebook fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if(get_field('vsd-twitter')){?>
                            <a href="<?php the_field('vsd-twitter');?>">
                           <div class="circle">
                                <i class="fa fa-twitter fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if(get_field('vsd-youtube')){?>
                            <a href="<?php the_field('youtube');?>" target="_blank">
                           <div class="circle">
                               <i class="fa fa-youtube fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if(get_field('vsd-instagram')){?>
                            <a href="<?php the_field('instagram');?>" target="_blank">
                           <div class="circle">
                              <i class="fa fa-instagram fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php $logo = get_field('logo_vsd');?>
                    <?php } ?>

                </div>
            </div>
        </div>
          </header>  <div class="clearfix"></div>
           <div id="stoy" ></div>
           <section class="logo-pub">
          <div id="elem2">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="logo">
                            <a href="<?php echo home_url('seccion/vsd');?>">    <img src="<?php echo $logo;?>" class="logo-vsd" alt="Quintodia"></img></a>
                        </div>
                        <p class="date">
                             <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var f=new Date();
                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                        <?php $top = query_posts(array('posts_type'=>'publicidad','posicion'=>'top-vsd'));?>
                        <?php if(!empty($top)){?>
                        <div class="publicidad">
                                <ul class="bxslider">
                                <?php while(have_posts()){  the_post();?>
                                <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                              <li>
                                  <div class="publi-head">
                                      <a href="<?php the_field('enlace');?>"><img src="<?php echo $feat;?>" class="img-responsive img-full"/></a>
                                  </div>
                                  </li>
                              <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>
    </section>
        <section id="elem3" class="contenido">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <nav class="menu menu-vsd hidden-sm hidden-xs">
                            <ul class="nav nav-pills">
                                <li><a href="<?php echo home_url('');?>">Quinto Día</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/huellas-en-casa');?>">Huellas en Casa</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/tiempo-de-corredores');?>">Tiempo de Corredores</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/punto-erotico');?>">Punto Erótico</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/entrevistas');?>">Entrevistas</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/e-tecnologia');?>">E-Teconología</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/all-gril');?>">All Grill</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/cinema-5d');?>">Cinema 5D</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd/el-ultimo-y-nos-vamos');?>">El último y nos vamos</a></li>
                                 <li><a href="<?php echo home_url('busqueda');?>"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>



<!--MENU RESPONSIVE VSD -->
             <nav class="menu menu-vsd menu-responsive visible-sm visible-xs">
                        <div class="container-fluid">
                            <div class="row">

                                      <form role="search" method="get" class="search-responsive col-xs-10" action="<?php echo home_url( '/' ); ?>">
                                    <div class="col-xs-9">
                                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Que desea buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                                    </div>
                                    <div class="col-xs-3">
                                           <div class="submited">

                                                    <span class="fa fa-search"></span>
                                                <input type="submit" class="btn-submit" value="">


                                                </div>
                                    </div>

                                </form>
                            <div class="col-xs-2">
                                <div id="disparador" class="menu-boton" onclick="open_movil();">
                                      <span class="fa fa-bars"></span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12">
                                <div class="list">
                                    <ul class="nav nav-pills  ">
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('');?>">Quinto Día</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/huellas-en-casa');?>">Huellas en Casa</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/tiempo-de-corredores');?>">Tiempo de Corredores</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/punto-erotico');?>">Punto Erótico</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/e-tecnologia');?>">E-Teconología</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/all-gril');?>">All Grill</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/cinema-5d');?>">Cinema 5D</a></li>
                                        <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd/el-ultimo-y-nos-vamos');?>">El último y nos vamos</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </nav>
        </section>




<?php wp_reset_query();?>

