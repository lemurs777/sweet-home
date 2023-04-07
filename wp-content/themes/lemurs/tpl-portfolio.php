<?php
/*
Template Name: Template page Portfolio
*/
?>
<?php /* $fields = get_fields(); */?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>

<div class="portfolio-page">
    <?php get_template_part('template-parts/portfolio'); ?>	
    			<section class="main__form callback">
				<div class="callback__bg">
					<div class="callback__gradient bg-gradient"></div>
					<div class="callback__gradient bg-gradient"></div>
				</div>
				<div class="callback__container container">
					<div action="#" class="callback__body">
                        <?php get_template_part('template-parts/contactform'); ?>
					</div>
				</div>
			</section>
</div>


<?php 
get_footer();