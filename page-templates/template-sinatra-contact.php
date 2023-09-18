<?php
/**
 * Template Name: Sinatra Contact
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
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP0m/az+OfiPwjBoOpp4d8FeI9S1oLoN9e+LtIvtfkbSvC2qeObHTraKG41ZLSJpbGxsLS9ult/tlxHZwyrcR3RmuJviOJfYVaOBxNXB4OrWxMY4apKtQjVapUJYnkUHUcnBvabi02krWPsuDMJKeMzamsZj6UMOlXpwoYmVKHtqkMNepOEEoSkud2vHoubmsj84V+Mni2dVmbTvAatMolZU+G3gMKpkG8hQ3h5mCgnAyzHGMknmv3nD+E3hxXoUK0+E8vU61GnVko18yUVKpCM5KKeObUU27K7surPx6v4hceUK9ahHi3NJRo1alKMp0cqc5KnNwUpuOXRjzNK8uWMY3vaKWh//2Q==" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Contacto-7aa7f8772b0e01173600732172e9d0b6.jpg.webp" alt="">
</div>

<div class="page-contact">
    <div data-test="container" class="container">
        <div data-test="row" class="row">
            <div data-test="col" class="col-sm-6 col-md-6">
                <div class="info">
                <?php if( have_rows('ubicacion') ): ?>
                  <?php while( have_rows('ubicacion') ): the_row(); ?>
                    <div data-test="row" class="row"><h1><?php echo get_sub_field('titulo'); ?></h1></div>
                      <div data-test="row" class="row">
                          <div class="elementCoordenadas">
                            <span>
                              <?php echo get_sub_field('direccion'); ?>
                            </span>
                          </div>
                      </div>
                    <div data-test="row" class="row">
                        <div class="elementCoordenadas"><span><?php echo get_sub_field('telefono'); ?></span></div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div data-test="col" class="col-sm-6 col-md-6">
                <?php if( have_rows('contacto_shortcode') ): ?>
                  <?php while( have_rows('contacto_shortcode') ): the_row(); ?>
                    <h3><?php echo get_sub_field('titulo'); ?></h3>
                    <?php echo do_shortcode(get_sub_field('shortcode')); ?>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
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
