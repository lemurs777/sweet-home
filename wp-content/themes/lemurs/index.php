<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                    	<div class="entry-content">
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
