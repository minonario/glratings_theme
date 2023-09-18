<?php
/**
 * Template Name: Sinatra Qualification
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
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAQACgMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APrj9lfxVp+laZJp0Pgvw68mqWus6vPqEer/ABC0qUz6T4RivIIbrS9A8c6P4a1u2ub9rq+1NfEuha1NqlzfXRv554vIig76rqV8MsTVrVZyvRfI5J0uaUqtKU+WUW1KUYJytJJzcpNXZ52b044PPqeEwkYYelVi/aypUqKrTb9liW/bSpyqwk5tQ56Uqc1SjGmpJc3N89TfFvxVezS3ssOiJLdyPdSpbaTFa26SXDGV1gtbd47e2hVnIiggjjhhQLHEioqqPn6mOx9Oc6ccbiFGE5Qik4K0YtxSsoJKyWySXZH7DhcgyOrhsPUllWE5qlClOX8Z+9OnGT1lWlJ6veUpSe7bep//2Q==" alt="imgBlur">
  <img class="segunda" src="<?php echo get_template_directory_uri()?>/_next/static/images/Header Calificacion-70d5e422435a02ccc17cb1ad59b2a68b.jpg.webp" alt="">
</div>

<div class="calificacionContainer">
    <div data-test="container" class="container">
        <div data-test="row" class="row title"><h1><?php the_title()?></h1></div>
        
<?php
if( have_rows('fila_flexible') ):
    while ( have_rows('fila_flexible') ) : the_row();
        if( get_row_layout() == 'fila' ):
            $text = get_sub_field('texto');
        ?>
        <div data-test="row" class="row">
          <?php echo $text; ?>
        </div>
        <?php
        elseif( get_row_layout() == 'navegacion' ): 
            $pills = get_sub_field('categorias');
            $count=0;
        ?>
        <div data-test="row" class="row title navgl"><h1><?php the_sub_field('titulo'); ?></h1></div>
        <ul data-test="nav" class="nav nav-pills" id="pills-tab" role="tablist">
          <?php foreach( $pills as $row ) :?>
            <li data-test="nav-item" class="nav-item" role="presentation">
                <button data-test="button" id="<?php echo $row['codigo_navegacion']?>-tab" data-toggle="pill" data-target="#<?php echo $row['codigo_navegacion']?>" type="button" role="tab" aria-controls="pills-cata" aria-selected="true" class="btn-default btn Ripple-parent <?php echo($count++ == 0 ? 'active' : ''); ?>">
                    <?php echo $row['categoria']?>
                    <div data-test="waves" class="Ripple" style="top: 0px; left: 0px; width: 0px; height: 0px;"></div>
                </button>
            </li>
          <?php endforeach; $count=0; ?>
        </ul>
        <div data-test="row" class="row"> 
            <div data-test="tabContent" class="tab-content w-100" id="pills-tabContent">
              <?php foreach( $pills as $row ) :?>
              <div data-test="tab-pane" class="tab-pane fade <?php echo($count++ == 0  ? 'show active' : '')?>" id="<?php echo $row['codigo_navegacion']?>" role="tabpanel" aria-labelledby="<?php echo $row['codigo_navegacion']?>-tab">
                <?php echo $row['contenido']?>
              </div>
              <?php endforeach; ?>
            </div>
        </div>
        <?php
        elseif( get_row_layout() == 'acordeon' ): ?>
            <div data-test="row" class="row fases collapsed" data-toggle="collapse" href="#<?php echo get_sub_field('codigo_acordeon')?>"  aria-expanded="false">
                <h2><?php the_sub_field('titulo'); ?></h2>
                <i data-test="fa" class="fa fa-plus"></i>
            </div>
            <div data-test="row" class="row">
              <div data-test="collapse" id="<?php echo get_sub_field('codigo_acordeon')?>" class="collapse">
                <?php echo get_sub_field('contenido'); ?>
              </div>
            </div>
        <?php
        elseif( get_row_layout() == 'resumenes' ): ?>
            <div data-test="row" class="row title"><h1><?php the_sub_field('titulo'); ?></h1></div>
            <?php 
            $rows = get_sub_field('listado');
            if( $rows ) { ?>
                <div data-test="row" class="row rowLinks">
                  <ul>
                <?php foreach( $rows as $row ) {
                    $titulo = $row['titulo'];
                    $enlace = $row['enlace'];
                    ?>
                    <li>
                        <a href="<?php echo $enlace; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-file-pdf"></i><?php echo $titulo; ?>
                        </a>
                    </li>
                <?php    
                }?>
                  </ul>
                </div>
            <?php    
            }
            ?>
        <?php endif;
    endwhile;
else :
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
