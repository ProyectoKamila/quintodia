<?php
//template name: Contacto
get_header('');?>
<?php wp_reset_query();?>
<?php the_post("");?>
<div class="container">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="col-xs-12">
            <div class="title-cat">
                <h2>Edición Aniversaria</h2>
            </div>
        </div>
        <div class="col-xs-12 text-center">
            <div class="magazine">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="marco1 col-xs-12"></div>
    </div>
</div>

<?php get_footer('');?>