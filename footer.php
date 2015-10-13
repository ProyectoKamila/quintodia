   <footer id="elem5">
            <div class="container">
                <div class="row">
                    <section class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="title">
                            Sesiones
                      </div>
                      <ul class="nav nav-pills">
                                <li><a href="<?php echo home_url('seccion/pais');?>">País</a></li>
                                <li><a href="<?php echo home_url('seccion/internacional');?>">Internacional</a></li>
                                <li><a href="<?php echo home_url('seccion/economia');?>">Economía</a></li>
                                <li><a href="<?php echo home_url('seccion/entrevistas');?>">Entrevistas</a></li>
                                <li><a href="<?php echo home_url('seccion/salud');?>">Salud</a></li>
                                <li><a href="<?php echo home_url('seccion/marketing-mix');?>">Marketing Mix</a></li>
                                <li><a href="<?php echo home_url('seccion/indice');?>">Indice</a></li>
                                <li><a href="<?php echo home_url('seccion/cartas-al-lector');?>">Cartas al lector</a></li>
                                <li><a href="<?php echo home_url('seccion/nombramientos');?>">Nombramientos</a></li>
                                <li><a href="<?php echo home_url('seccion/banfinanzas');?>">Banfinanzas</a></li>
                                <li><a href="<?php echo home_url('seccion/opinion');?>">Opinión</a></li>
                                <li><a href="<?php echo home_url('seccion/vsd');?>">VSD</a></li>

                            </ul>
                    </section>
                    <section class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="title">
                            Columnas
                        </div>
                        <ul class="nav nav-pills">
                                <li><a href="<?php echo home_url('seccion/mosaico');?>">Mosaico</a></li>
                                <li><a href="<?php echo home_url('seccion/ultra-secretos');?>">Ultra Secretos</a></li>
                                <li><a href="<?php echo home_url('seccion/sebastiana-sin-secretos');?>"> Sebastiana sin secretos</a></li>
                                <li><a href="<?php echo home_url('seccion/reflexiones');?>">Reflexiones</a></li>
                                <li><a href="<?php echo home_url('seccion/exclusiva-de-ultima-pagina');?>">Exclusivas de última pagína</a></li>
                                <li><a href="<?php echo home_url('seccion/tecnologia');?>">Tecnología</a></li>
                                <li><a href="<?php echo home_url('seccion/a-la-salud');?>">A la salud</a></li>
                                <li><a href="<?php echo home_url('seccion/cambio-climatico');?>">Cambio Climatico</a></li>
                                <li><a href="<?php echo home_url('seccion/viernes-de-un-andariego');?>">Viernes de un andariego</a></li>
                                <li><a href="<?php echo home_url('seccion/una-opinion-cinco-temas');?>">Una Opinión Cinco Temas</a></li>
                                <li><a href="<?php echo home_url('seccion/la-esquina-de-coro');?>">La Esquina de Coro</a></li>
                                <li><a href="<?php echo home_url('seccion/cinco-dias-de-sucesos');?>">Cinco dia de sucesos</a></li>
                            </ul>
                    </section>
                    <section class="col-lg-3 tarifas col-md-3 col-sm-6 col-xs-12">
                        <div class="title">
                        Tarifas y Productos
                        </div>
                        <ul class="nav nav-pills">
                                <li>
                                    <a href="<?php echo home_url('quinto-dia-online');?>">Quinto Dia Online</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('semanario-impreso');?>">Semanario Impreso</a>
                                </li>
                                </ul>
                    </section>
                    <section class="col-lg-2 atencion col-md-2 col-sm-6 col-xs-12">
                        <div class="title">
                            Atencion al Cliente
                        </div>
                        <ul class="nav nav-pills">
                                <li>
                                    <a href="<?php echo home_url("contacto");    ?>">Cartas al Editor</a>
                                </li>
                                            <li>
                                                <a href="<?php echo home_url("contacto");    ?>">Contacto</a>
                                            </li>
                                </ul>
                    </section>
                </div>
            </div>
            <section class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="copyright"> MC Master Communication C.A RIF j-30270966-0 </p>
                    </div>
                    <div class="col-xs-12">
                        <p class="copyright">Desarrollado Por <a href="http://www.proyectokamila.com">Proyecto Kamila</a></p>
                    </div>
                </div>
            </div>
            </section>
        </footer>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!--slider bxslider-->
        <script src="<?php bloginfo('template_url');?>/scripts/bxslider-4/src/js/jquery.bxslider.js"></script>
        <script src="<?php bloginfo('template_url');?>/scripts/bootstrap-tabdrop.js"></script>
        <script src="<?php bloginfo('template_url');?>/scripts/slider/jquery.anythingslider.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php bloginfo('template_url');?>/scripts/bxslider-4/src/css/jquery.bxslider.css" rel="stylesheet" />
     
        <!-- Add mousewheel plugin (this is optional) -->
        	<script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        	<!-- Add fancyBox main JS and CSS files -->
        	<script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
        	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/scripts/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>

        $(document).ready(function(){
            console.log('ready');
    $("span.arrow.back").addClass("glyphicon glyphicon-menu-left fle");
    $("span.arrow.forward").addClass("glyphicon glyphicon-menu-right fle");
            $('#elem1').fadeOut();
            $('#elem2').fadeOut();
            $('#elem3').fadeOut();
            $('#elem4').fadeOut();
            $('#elem5').fadeOut();
          $('.bxslider').bxSlider({
            auto: true,
            mode: 'fade',
            speed: 1000
            });
            $('.nav-tabs').tabdrop();
            $('#slider1').anythingSlider({
                'mode':'horiz',
                'expand':true,
                'autoPlay':true,
                'buildArrows': true,
                'animationTime' : 1800,
                'delay': 5000,
                'buildNavigation': false,
                'hashTags':false,
                'buildStartStop': false
            });
            $('#slider2').anythingSlider({
                'mode':'vert',
                'expand':true,
                'autoPlay':true,
                'buildArrows': true,
                'animationTime' : 1000,
                'delay': 5000,
                'buildNavigation': false,
                'hashTags':false,
                'buildStartStop': false
            });

    });

                $('a.fancybox').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});



        window.onload = function() {
            console.log('Loader');
            $(".loader").height("0px");
            $('#elem1').fadeIn(700);
            $('#elem2').fadeIn(1600);
            $('#elem3').fadeIn(2100);
            $('#elem4').fadeIn(2200);
            $('#elem5').fadeIn(2000);
            var elem1 = $('#elem1').offset();
            var elem2 = $('#elem2').offset();
            var elem3 = $('#elem3').offset();
            var elem4 = $('#elem4').offset();
            var elem5 = $('#elem5').offset();
            console.log(elem1 , elem2 , elem3 , elem4 , elem5);

                var body = $("body, html");
                // p.html( "left: " + offset.left + ", top: " + offset.top );

              body.animate({scrollTop :elem5.top}, '5000',function(){
                 console.log('Scroll2');
                  subir();
              });
                function subir(){
                              body.animate({scrollTop :elem1.top}, '20500',function(){
                                 console.log('Scroll top');
                              });
                }

        };
          function open_movil(){
                    console.log("menu movil");
                        $(".menu-responsive .list").addClass("open");
                        $("#disparador").attr("onclick","close_movil();");
                }
        function close_movil(){
                    console.log("menu movil");
                        $(".menu-responsive .list").removeClass("open");
                        $("#disparador").attr("onclick","open_movil();");
                }
    </script>
    </html>