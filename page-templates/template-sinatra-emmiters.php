<?php
/**
 * Template Name: Sinatra Emitters
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
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP6IvgZbfFDw98IPAfwo0b9oT4vWWi337NXh74gWetCD4T3PifQtd1zxJbw30elX958Lbixk037Pqk1vbWWs6Zq4tYobXyZFkiLvOJyHD4j63KeKxqjVm6vsoTw8KcHq5wjGOGTcKqSjUVR1JNJcsoy941oZ9WjXwj+pYCU4L2DqTji5TqWh7OnUk3jLRq0bc9N0lThz354Ti3E/zhvjx/wUF+PWn/HL4zWEs2n6rLY/Ff4iWcmqat4q+MdzqupSW3i/WIXv9TuIvipbxXGoXjIbi8mjggjluZJHSGNWCL+lYGlhKeCwdP6lRnyYXDw551sdzz5aUFzS5MXCPNK15csYxu3aKVkvzrH08XUx2NmszxlJTxeJmqVOjlns6alWm1Cnz5fOfJBPljzznLlS5pSd2/8A/9k=" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Emisores-29e12ced451c64720ba16efdc3316291.jpg.webp" alt="">
</div>

<section id="clientes" class="clientesContainer">
  <div data-test="container" class="container">
    <div data-test="row" class="row title">
        <div data-test="col" class="col-8 col-sm-4">
           <h1><?php the_title()?></h1>
        </div>
        <div data-test="col" class="col-12 col-sm-4 d-flex justify-content-end">
           <div class="filter">
              <label for="toggle-1"><span>Alfabético </span></label>
              <div class="switch"><input type="checkbox" name="toggle" class="sw" id="toggle-1" checked="checked"><label for="toggle-1"> </label></div>
              <label for="toggle-1"><strong> Fecha </strong></label>
           </div>
        </div>
    </div>
    <?php 
      if ( have_posts() ) :
              while ( have_posts() ) :
                      the_post();

                      get_template_part( 'template-parts/content/content', 'sinatra-fullwidth' );
              endwhile;
      endif;
    ?>
    
  </div>
    
</div>
    
<?php
get_footer();
