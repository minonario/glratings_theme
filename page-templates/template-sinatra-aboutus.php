<?php
/**
 * Template Name: Sinatra About Us
 *
 * 100% wide page template without vertical spacing.
 *
 * @package     Sinatra
 * @author      Sinatra Team <hello@sinatrawp.com>
 * @since       1.0.0
 */

get_header();
?>
<div class="headerView">
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APz01H4T+DNPsZ7+Cwlae1gMqCWVXRmjG7DgRK211Bjby3jZUYmJo5Asi/7FywlGMZNJ31etnvv01+Z/hvlHjv4iZtmmBy3E5lQjh8ViKdCboUatOrGM+a0oTeIkualJxqU+eM4OUIxqQqUnOnP0xPBngiFEiPgzw9MYlWPzri3upZ5dgC+ZPK15ulmkxukkbl3LMeTXnS4ewspSl9Zx0eaTlyxrUoxV3e0YqhaMVsorRLRHmw+kx4rRjGMc1wajGKUV9VqSskkkuaWJlJ2XWUnJ7tt6n//Z" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Nosotros-df0327a0a3d36101955e71884a6fe221.jpg.webp" alt="">
</div>

<div class="page-nosotros">
    <div data-test="container" class="container">
      <div data-test="row" class="row title subTitle"><h1>Sobre Nosotros</h1></div>
<?php
    if( have_rows('contenido_flexible') ):
        while ( have_rows('contenido_flexible') ) : the_row();
            if( get_row_layout() == 'sobre_nosotros' ): ?>
      <div data-test="row" class="row">
            <?php
                $image = get_sub_field('imagen');
                if( !empty( $image ) ): ?>
                <div data-test="col" class="col-sm-5">
                  <div class="img-logo"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
                </div>
                <?php endif;
            ?>
        <div data-test="col" class="col-sm-7 space">
          <?php the_sub_field('texto')?>
        </div>
      </div>
            <?php
            elseif( get_row_layout() == 'fila' ): ?>
            <div data-test="row" class="row">
                <?php
                  if( have_rows('columna_flexible') ):
                      while ( have_rows('columna_flexible') ) : the_row();
                          if( get_row_layout() == 'columna' ):
                              $ancho = get_sub_field('numero_de_ancho');
                              $css = get_sub_field('clase_css');
                              ?>
               <div data-test="col" class="col-sm-<?php echo $ancho?> <?php echo $css;?>">
                              <?php
                                  if( have_rows('fila_flexible') ):
                                      while ( have_rows('fila_flexible') ) : the_row();
                                          if( get_row_layout() == 'fila' ):
                                              $title = get_sub_field('titulo');
                                              $text = get_sub_field('texto'); ?>
                                          <div data-test="row" class="row">
                                            <div class="title subTitle"><h3><?php echo $title; ?></h3></div>
                                            <?php echo $text; ?>
                                          </div>
                                          <?php
                                          endif;
                                      endwhile;
                                  else :
                                  endif; ?>
               </div>
                          <?php endif;
                      endwhile;
                  else :
                  endif; ?>
            </div>
            <?php
            endif;
        endwhile;
    else :
    endif;
    ?>
    </div>
</div>
<?php 
/*if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content', 'sinatra-fullwidth' );
	endwhile;
endif;*/
?>

<?php
get_footer();
