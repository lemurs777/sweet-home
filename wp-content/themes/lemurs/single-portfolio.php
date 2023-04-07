<?php
/*
Template name: Шаблон записи Проекты
Template Post Type: post  
 */
 ?>
 <?php $fields = get_fields(); ?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();?>

        <div class="project">

            <div class="project__container container">
                <div class="project__title-block title-block" data-scroll>
                    <h1 class="project__title title"><?php the_field('nazvanie');?></h1>
                </div>
                <div class="project__desc" data-scroll>
                    <?php the_field('opisanie');?>
                </div>
                <a href="<?php the_field('ssylka_na_proekt');?>" class="project__btn btn_green" target="_blank" data-scroll><?php pll_e('Открыть');?></a>
				
				<a href="#callback"  class="functions__btn btn_green popup-link"><?php pll_e('Хочу так же');?></a>
            </div>

            <div class="project__img" style="<?php the_field('fon_proekta_single');?>">
                <picture><source srcset="<?php the_field('kartinka_webp'); ?>" type="image/webp"><img src="<?php the_field('kartinka_png'); ?>" alt="Project Image" data-scroll></picture>
            </div>

<?php
get_footer('');

?> 

