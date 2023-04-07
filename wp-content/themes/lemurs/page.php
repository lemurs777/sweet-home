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
 * @package Lemurs_Agency
 */

get_header();
?>

        <div class="contacts">

            <section class="contacts__intro">
                <div class="contacts__container container">
                    <div class="contacts__title-block title-block">
						<?php
						$main_title = get_field('zagolovok'); 
						$main_subtitle = get_field('podzagolovok');
						echo '<h1 class="contacts__title title">' . $main_title . '</h1>';
						echo '<h5 class="contacts__title title">' . $main_subtitle . '</h5>';
						?>
                    	<div class="entry-content custom_class">
		                    <?php
		                    the_content();
		                    ?>
		              </div>
                    </div>
				</div>
			</section>
            <section class="contacts__form callback">
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
