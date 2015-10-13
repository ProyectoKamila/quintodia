<?php
//template name: Search
get_header('');?>

<?php the_post("");?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-tarifas">
             <h2><?php the_title();?></h2>

            </div>
        </div>
        <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Que desea buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            	<input type="submit" class="search-submit btn btn-default btn-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
    </section>
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer('');?>