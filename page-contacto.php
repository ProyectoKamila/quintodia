<?php
//template name: Contacto
get_header('');?>
<?php wp_reset_query();?>
<?php the_post("");?>
<div class="container contacto">
    <div class="row">
       <div class="clearfix"></div>
                    <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                          <div class="title-cat">
                                  <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="form">
                                <form>
                                    <div class="col-xs-6">
                                    <input type="text" name="name" class="text" required placeholder="Nombre"/>
                                    </div>
                                    <div class="col-xs-6">
                                    <input type="text" name="last_name" class="col-xs-6 text"  placeholder="Apellido"/>
                                          </div>
                                    <div class="col-xs-6">
                                    <input type="text" name="ci" class="col-xs-6 text" required placeholder="C.I"/>
                                          </div>
                                    <div class="col-xs-6">
                                    <input type="text" name="phone" class="col-xs-6 text" required placeholder="Telefono"/>
                                          </div>
                                    <div class="col-xs-6">
                                     <input type="email" name="email" class="col-xs-6 text" required placeholder="Correo Electronico"/>
                                           </div>
                                     <div class="col-xs-6">
                                      <input type="text" name="subject" class="col-xs-6 text" required placeholder="Asunto"/>
                                            </div>
                                        <div class="col-xs-12">
                                      <textarea name="mensaje" class="" placeholder="Su mensaje"></textarea>
                                      </div>
                                    <input type="submit" value="Enviar" class="col-xs-offset-9 col-xs-3 btn btn-default btn-submit"/>
                                </form>
                            </div>
                        </section>
                         <section class="col-lg-3 col-md-3 col-sm-4 col-xs-12">


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
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer('');?>
 <?php
                  if (isset($_POST['email'])) {
                //echo"<h1>Pasoo uno !</h1>";
                        if (!empty($_POST['email']) && !empty($_POST['name'])) {
                            require_once ABSPATH . WPINC . '/class-phpmailer.php';
                            $mail = new PHPMailer();

                            $mail->AddAddress('ventas@quintodia.net');
                            $mail->From = 'ventas@quintodia.net';
                            $mail->FromName = 'Solicitud de inscripcion quintodia.net';
                            $asunto = $_POST['subject'];
                            $contenido = '<div style="font-color: #000;">';
                            $contenido .= '<h2>Solicitud de CMV.</h2>';
                            $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '<p><strong>Nombre: </strong>' . $_POST['name'] . ' ' . $_POST['last_name'] .'</p>';
                            $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                            $contenido .= '<p><strong>Telefono: </strong>' . $_POST['phone'] . '</p>';
                            $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '</div>';

                            $mail->Subject = $asunto;
                            $mail->Body = $contenido;
                            $mail->IsHTML();

                //      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                //      $mail = wp_mail($correo, $asunto, $contenido, $headers);

                        if ($mail->send()) {
                            echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Inscribirte.");</script>';

                        } else {
                            echo $mensaje = '<script type="text/javascript">alert("Error al Enviar.");</script>';

                        }
                    } else {
                        echo $mensaje = '<script type="text/javascript">alert("Faltan campos por llenar.");</script>';

                    }
                    }
        ?>