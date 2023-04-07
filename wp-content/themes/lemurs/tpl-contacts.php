<?php
/*
Template Name: Template page Contacts
*/
?>
<?php  $fields = get_fields(); ?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>

        <div class="contacts">

            <section class="contacts__intro">
                <div class="contacts__container container">
                    <div class="contacts__title-block title-block">
                        <h1 class="contacts__title title"><?php pll_e('Контакты');?></h1>
                    </div>
                    <div class="contacts__desc">
                        <?php the_field('tekst_straniczy_kontaktov'); ?>
                    </div>
                </div>
            </section>

            <section class="contacts__map map-contacts">
                <div class="map-contacts__container container">
                    <div class="map-contacts__body">
                        <div class="map-contacts__map">

                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21146.863600535464!2d25.706773559714907!3d48.16126103854845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sde!4v1662984240768!5m2!1suk!2sde" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                        </div>
                        <div class="map-contacts__block">
                            <div class="map-contacts__title"><?php pll_e('Контакты');?></div>
                            <div class="map-contacts__item">
                                <div class="map-contacts__icon">
                                    <svg>
                                        <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#location"></use>
                                    </svg>
                                </div>
                                <div class="map-contacts__content">
                                    <div class="map-contacts__label"><?php pll_e('Адрес');?></div>
                                    <div class="map-contacts__info"><?php the_field('adres'); ?></div>
                                </div>
                            </div>
                            <div class="map-contacts__item">
                                <div class="map-contacts__icon">
                                    <svg>
                                        <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#call"></use>
                                    </svg>
                                </div>
                                <div class="map-contacts__content">
                                    <div class="map-contacts__label"><?php pll_e('Телефон');?></div>
                                    <div class="map-contacts__info"><?php the_field('telefon'); ?></div>
                                </div>
                            </div>
                            <div class="map-contacts__item">
                                <div class="map-contacts__icon">
                                    <svg>
                                        <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#mail"></use>
                                    </svg>
                                </div>
                                <div class="map-contacts__content">
                                    <div class="map-contacts__label"><?php pll_e('Почта');?></div>
                                    <div class="map-contacts__info"><?php the_field('pochta'); ?></div>
                                </div>
                            </div>
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