<?php
/*
Template Name: Template page Services
*/
?>
<?php  $fields = get_fields();  ?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
        <div class="main">
		    <section class="main-service service-main _animated">
				<div class="service-main__container container">
					<div class="service-main__title-block title-block" data-scroll data-scroll-speed='1'>
						<h2 class="service-main__title title _type-text"><?php pll_e('Услуги');?></h2>
					<div class="service-main__desc" data-scroll data-scroll-speed='2'>
					</div>
					<div class="service-main__table">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 8,
                        'post_type' => 'services',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?> 
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?><?= $articleFields['name_sphere_en']?>
        						<a href="<?= get_the_permalink(); ?>" class="service-main__item item-service">
        							<div class="item-service__wrapper">
        								<div class="item-service__visible">
        									<div class="item-service__header">
        									    <?php 
        									    $value = $i;
                                                if ($i < 10) {
                                                $value = str_pad($i, 2, "0", STR_PAD_LEFT);
                                                echo '<div class="item-service__number">' . $value . '</div>';
                                                } ?>
        										<div class="item-service__icon">
        											<svg>
        												<use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#arrow"></use>
        											</svg>
        										</div>
        										<div class="item-service__title"><?= $articleFields['zagolovok']?></div>
        									</div>
        
        									<div class="item-service__title-block">
        									    <?php
        									    $teg = $articleFields['teg'];
        									    if (!empty($teg)): ?>
        										<div class="item-service__label" style="background: <?= $articleFields['czvet_dlya_tega']?>;">
        										    <?= $articleFields['teg']?>
        										</div>
        										<?php endif; ?>
        										<div class="item-service__title">
        										    <?= $articleFields['zagolovok']?>
        										</div>
        									</div>
        								</div>
        
        								<div class="item-service__bg"></div>
        
        								<div class="item-service__content">
        									<div class="item-service__desc">
        									    <?= $articleFields['opisanie']?>
        									</div>
        									<div class="item-service__price"><?php pll_e('от');?> <span><?= $articleFields['stoimost']?></span></div>
        								</div>
        							</div>
        						</a>
                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?> 
 					</div>
				</div>
			</section>
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
