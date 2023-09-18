<?php
/**
 * Template Name: Sinatra Stats
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
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP2H/Z98NWnh39jf9sf4f+Grm70DQNN+MXxE8M6Stmmn3k+m6foPwD+HWp6a6LrVhqtjqFylxplotydasdUt7+NZvt9tcy3NxLJ0yr4jG5Pg8ZiK05TxOAp+3hGNKFOcqkHGrO0KcZwlU9qpP2dSKhKjT9iqadZVfUxGVYHLuM8VkmDpSpYGlnWIwlCPtas6tCjHEP2ahVqTlKcqcVyRlX9q5Rb9p7SVpL+Ub4y/Ezxyfi/8Vjd6/JfXZ+JPjk3N6+n6RYPeXB8T6p5109joun6Xo1k9xJuma00nTNO0y3LmGwsLO1SK3j8aWUYOlJ04qpy024RvPmfLB8qvJpuTstW223q9TshjK3LHWPwr7Pkj/9k=" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Estadisticas-ce93fef6f05581b6a5e71772f2185317.jpg.webp" alt="">
</div>

<div class="estadisticas-pag">
  <div data-test="container" class="container">
    <div data-test="row" class="row title">
      <h1>Estadísticas</h1> 
    </div>
    <div data-test="row" class="row row-table">
      <?php
            if ( have_posts() ) :
                    while ( have_posts() ) :
                            the_post();

                            the_content();
                    endwhile;
            endif;
      ?>
    </div>
    
  </div>
</div>
    



<?php
get_footer();
