<?php
/**
 * Template Name: Sinatra Laws
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
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP0+8YXk37Z//BRjUP2K/wBoaOx8bfATwp+z1B8RPB3h9dK0vStR8I+LdR8JubzVNB1TTrKBoXcaRbLbrdwXi6cklymmfYlnIH59kOR4TCZvOjhalbD4fBYbBvAYahHC0qOX+zhBKOBjDDRlhqbhQp03RpyVJU04QhCLsftGa55iMJwhDEUaGG9vm2NxazirUeLqSzf2c8Q6LzBTxcoV50ZYyvKFRRhNzcZ1ZVJxUj8z/E/7Bn7C3gbxL4h8E6d+yF8FdT0/wfrmreFrDUvENl4w1fX9QsvD9/caTa32uatN4wWbVNYu4LRJ9T1GVVlvb2Se5kUNKRX6BOeOcpNZliopybUVRy1qKu7JOWAlJpbJylKT6yb1PyqGYYWMIReSZVNqEU5ylmvNNpJOUuXNIx5pbvljGN3pFLQ//9k=" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Leyes-887d49b23f5fde97a176d90cfc7b86a9.jpg.webp" alt="">
</div>

<section class="page-leyes-normativas">
    <div data-test="container" class="container">
        <div data-test="row" class="row title"><h1><?php the_title()?></h1></div>
        <?php
        if ( have_posts() ) :
                while ( have_posts() ) :
                        the_post();

                        the_content();
                endwhile;
        endif;
        ?>
    </div>
    <div data-test="container" class="container rowCompartir" style="display:none">
        <button aria-label="email" class="react-share__ShareButton" style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
            <button data-test="button" type="button" class="btn-default btn Ripple-parent">
                <i data-test="fa" class="fa fa-envelope fa-lg"></i>
                <div data-test="waves" class="Ripple" style="top: 0px; left: 0px; width: 0px; height: 0px;"></div>
            </button>
        </button>
    </div>
</section>
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
