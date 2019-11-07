<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Test
 */

get_header();
?>

<?php include_once "content.php"?>

<?php include_once "modal.php"?>




<?php
get_sidebar();
get_footer();
