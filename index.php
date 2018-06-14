//* Andere Inhalte auf der Startseite als auf anderen Seiten hinzufügen

<?php if( is_front_page() && is_home() ) { ?>
  Inhalte für Startseite
<?php } else { ?>
  Inhalte für andere Seiten
<?php } ?>


//* Inhalt für spezielle Seite hinzufügen

<?php if ( is_page( '2461' )  ): ?>
  Inhalt für spezielle Seite
<?php endif ?>


//* Inhalte für alle Seiten als auf der Startseite hinzufügen (durch Codeverneinung)

<?php if(!is_front_page()) { ?>
  Inhalte für andere Seiten
<?php } ?>


//* Inhalte für die Blogübersicht hinzufügen

<?php if(is_home() && !is_front_page() && !is_paged() ) : ?>
  Inhalte für Blogübersicht
<?php endif; ?>


//* In Blogübersicht für Sticky Posts extra das Beitragsbild darstellen

<?php if ( is_sticky()): ?>
<a href="<?php echo get_permalink( $post->ID ); ?>">
	<div style="
				background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>);
				width: 100%;
				height: 100%;
				background-size: cover;
				background-position: center;			
				"></div>
</a>
<?php endif; ?>
