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
