<?php
//template name: Tarifas y Productos
get_header('');?>

<?php the_post("");?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-tarifas">
             <?php $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat;?>"/>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer('');?>