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
           <link href="<?php bloginfo('template_url');?>/css/anythingslider.css" rel="stylesheet" />
        <?php
            include ('library/ismobile.php');
            $detect = new Mobile_Detect();
        ?>
    </head>
    <body>
        <div class="loader">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align:center; margin-top:27%; "><span class="fa fa-spinner fa-spin fa-4x"></span> </p>
                    </div>
                </div>
            </div>
        </div>
        <header id="elem1" class="header-redes">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-7 col-md-5 col-lg-offset-8 col-lg-4">
                    <?php query_posts(array('post_type'=>'page','pagename'=>'configuraciones','posts_per_page'=>1));?>
                    <?php while(have_posts()){?>
                    <?php the_post();?>
                        <?php if(get_field('facebook')){?>
                            <a href="<?php the_field('facebook');?>" target="_blank">
                           <div class="circle">
                                <i class="fa fa-facebook fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if(get_field('twitter')){?>
                            <a href="<?php the_field('twitter');?>" target="_blank">
                           <div class="circle">
                                <i class="fa fa-twitter fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>
                        <?php if(get_field('youtube')){?>
                            <a href="<?php the_field('youtube');?>" target="_blank">
                           <div class="circle">
                               <i class="fa fa-youtube fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>

                         <?php if(get_field('instagram')){?>
                            <a href="<?php the_field('instagram');?>" target="_blank">
                           <div class="circle">
                              <i class="fa fa-instagram fa-2x"></i>
                            </div>
                            </a>
                        <?php } ?>

                        <?php $logo = get_field('logotipo');?>
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
                            <a href="<?php echo home_url('');?>">    <img src="<?php echo $logo;?>" class="logo-vsd" alt="Quintodia"></img></a>
                        </div>
                        <p class="date"><?php

                        //$hora= date ("h:i:s");
                       // $fecha= date ("j/n/Y");
                        //echo $hora;
                        //echo $fecha;
                        ?>
                        <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var f=new Date();
                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                        <?php $top = query_posts(array('posts_type'=>'publicidad','posicion'=>'top'));?>
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
                    <div class="col-lg-12 col-md-12 col-xs-12 ">
                        <nav class="menu hidden-sm hidden-xs">
                            <ul class="nav nav-pills  ">
                                <li><a href="<?php echo home_url('seccion/pais');?>">País</a></li>
                                <li><a href="<?php echo home_url('seccion/internacional');?>">Internacional</a></li>
                                <li><a href="<?php echo home_url('seccion/economia');?>">Economía</a></li>
                                <li><a href="<?php echo home_url('seccion/entrevistas');?>">Entrevistas</a></li>
                                <li><a href="<?php echo home_url('seccion/salud');?>">Salud</a></li>
                                <li><a href="<?php echo home_url('seccion/marketing-mix');?>">Marketing Mix</a></li>
                                <li><a href="<?php echo home_url('seccion/indice');?>">Índice</a></li>
                                <li><a href="<?php echo home_url('seccion/cartas-al-lector');?>">Cartas al lector</a></li>
                                <li><a href="<?php echo home_url('seccion/nombramientos');?>">Nombramientos</a></li>
                                <li><a href="<?php echo home_url('seccion/banfinanzas');?>">Banfinanzas</a></li>
                                <li><a href="<?php echo home_url('seccion/opinion');?>">Opinión</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd');?>">VSD</a></li>
                                <li><a href="<?php echo home_url('busqueda');?>"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </nav>
                        <nav class="menu menu-responsive visible-sm visible-xs">
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
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/pais');?>">País</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/internacional');?>">Internacional</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/economia');?>">Economía</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/entrevistas');?>">Entrevistas</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/salud');?>">Salud</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/marketing-mix');?>">Marketing Mix</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/indice');?>">IPr4ndice</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/cartas-al-lector');?>">Cartas al lector</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/nombramientos');?>">Nombramientos</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/banfinanzas');?>">Banfinanzas</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/opinion');?>">Opinión</a></li>
                                            <li class="col-sm-6 col-xs-12"><a href="<?php echo home_url('seccion/vsd');?>">VSD</a></li>

                            </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </nav>
                        <nav class="columnas">
                            <ul class="nav nav-pills nav-tabs">
                                <li><a href="<?php echo home_url('seccion/mosaico');?>">Mosaico</a></li>
                                <li><a href="<?php echo home_url('seccion/ultra-secretos');?>">Ultra Secretos</a></li>
                                 <li><a href="<?php echo home_url('seccion/claves-de-la-semana');?>">Claves de la Semana</a></li>
                                 <li><a href="<?php echo home_url('seccion/cronicas-de-luers');?>">Crónicas de Luers</a></li>
                                <li><a href="<?php echo home_url('seccion/sebastiana-sin-secretos');?>"> Sebastiana Sin Secretos</a></li>
                                <li><a href="<?php echo home_url('seccion/reflexiones');?>">Reflexiones</a></li>
                                <li><a href="<?php echo home_url('seccion/exclusivas-de-ultima-pagina');?>">Exclusivas de Última Página</a></li>
                                <li><a href="<?php echo home_url('seccion/tecnologia');?>">Tecnología</a></li>
                                <li><a href="<?php echo home_url('seccion/a-su-salud');?>">A su salud</a></li>
                                <li><a href="<?php echo home_url('seccion/cambio-climatico');?>">Cambio Climático </a></li>
                                <li><a href="<?php echo home_url('seccion/viernes-de-un-andariego');?>">Viernes de un Andariego</a></li>
                                <li><a href="<?php echo home_url('seccion/una-opinion-cinco-temas');?>">Una Opinión Cinco Temas</a></li>
                                <li><a href="<?php echo home_url('seccion/la-esquina-de-coro');?>">La Esquina de Coro</a></li>
                                <li><a href="<?php echo home_url('seccion/cinco-dias-de-sucesos');?>">Cinco Días de Sucesos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <?php wp_reset_query();?>