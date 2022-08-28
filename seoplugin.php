/* --- Metadaten ---*/

//* PHP-Code für Beschreibungen
<?php echo function_exists('dpc_metadescription') ? dpc_metadescription() : ''; ?>

//* Shortcode für Beschreibungen
[dpc_metadescription]


/* --- Statistiken --- */

//* PHP-Code Opt-Out für Analytics
<?php echo function_exists('dpc_analytics_opt_out') ? dpc_analytics_opt_out() : ''; ?>

//* Shortcode Opt-Out für Analytics
[dpc_analytics_opt_out link_text='']

/* --- Breadcrumbs --- */

//* PHP-Code
<?php echo function_exists('dpc_breadcrumbs') ? dpc_breadcrumbs() : ''; ?>

//* Shortcode
[dpc_breadcrumbs]

/* --- Social Sharing --- */

//* Shortcode
[dpc_sharing] 

/* --- Bewertungen --- */

//* PHP-Code
<?php echo function_exists('dpc_sharing') ? dpc_sharing() : ''; ?>

//* Shortcode
[dpc_rating]

//* Shortcode mit geändertem HTML-Anker
[dpc_rating alt_link=#HTML-Anker]
