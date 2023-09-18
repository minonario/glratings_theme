<?php
/**
 * Template Name: Sinatra Home
 *
 * 100% wide page template without vertical spacing.
 *
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */

get_header();

?>
<div class="page-header">
<?php if( have_rows('carousel') ): ?>
    <?php while( have_rows('carousel') ): the_row(); 
        $total = sizeof(get_sub_field('imagenes'));        
        if( have_rows('imagenes') ): ?>
    <div class="page-header-image">
      <div data-test="carousel" id="myCarousel" length="<?php echo $total ?>" class="carousel carousel-fade z-depth-2"  data-ride="carousel" data-interval="3000" aria-label="carousel">
        <div data-test="carousel-inner" class="carousel-inner">
                <?php
                $count=0;
                while( have_rows('imagenes') ) : the_row();
                    $image = get_sub_field('imagen'); ?>
                      <div data-test="carousel-item" class="carousel-item <?php echo ($count++ == 1 ? 'active' : '')?>" style="left: 0px;">
                        <div class="view" data-test="view">
                          <img class="img-carousel d-block w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="First slide">
                          <img loading="lazy" class="img-carousel d-block w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php switch($count){
                            case(2): echo '<div data-test="mask" class="mask rgba-black-strong"></div>'; break;
                            case(3): echo '<div data-test="mask" class="mask rgba-black-slight"></div>'; break;
                            default: break;
                          }
                          ?>
                        </div>
                      </div>
                    <?php
                endwhile; ?>
        </div>
      </div>
    </div>
            <?php
            else :
            endif;
        if( have_rows('titulos') ): ?>
    <div class="page-header-mini-carousel">
      <div data-test="carousel" id="myCarousel2" length="8" class="carousel carousel-fade z-depth-2" aria-label="carousel" data-ride="carousel" data-interval="3000">
        <div data-test="carousel-inner" class="carousel-inner">
            <?php
            $count=0;
            while( have_rows('titulos') ) : the_row();
                $titulo = get_sub_field('titulo'); ?>
                <div data-test="carousel-item" class="carousel-item <?php echo ($count++ == 1 ? 'active' : '')?>" style="left: 0px;">
                  <div class="view" data-test="view">
                    <div class="d-block w-100">
                      <h3 class="h3-responsive"><?php echo $titulo ?></h3>
                    </div>
                  </div>
                </div>
                <?php
            endwhile; ?>
        </div>
      </div>
    </div>
        <?php
        else :
        endif;
            ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="homeContainer">
  
<?php
if( have_rows('contenido') ):
    while ( have_rows('contenido') ) : the_row();
        if( get_row_layout() == 'fila' ): ?>
  <div class="<?php echo get_sub_field('classname')?>">
    <div data-test="container" class="container">
       <div data-test="row" class="row">
          <div data-test="col" class="col title">
             <h1><?php echo get_sub_field('titulo')?></h1>
          </div>
       </div>
      
      <?php echo do_shortcode(get_sub_field('shortcode'));?>

       <div data-test="row" class="row row-button">
         <a href="<?php echo get_sub_field('enlace')?>" target="_blank">
             <button data-test="button" type="button" class="btn-default btn Ripple-parent btn-invisible">
                <i data-test="fa" class="fa fa-plus-circle"></i>
                <div data-test="waves" class="Ripple " style="top:0px;left:0px;width:0px;height:0px"></div>
             </button>
          </a>
       </div>
    </div>
  </div>
            <?php
        endif;
    endwhile;
else :
endif;
?>

<?php
/*if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content', 'sinatra-fullwidth' );
	endwhile;
endif;*/
get_footer();
