<?php
/*
Template Name: Template page Quiz2v
*/
?>
<?php /* $fields = get_fields(); */?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>


        <div class="quiz quiz-v2">

            <?php get_template_part('template-parts/quiz'); ?>
            <?php get_template_part('template-parts/portfolio'); ?>	
            <?php get_template_part('template-parts/banner'); ?>

        </div>


<?php 
get_footer();

