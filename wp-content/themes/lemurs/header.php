<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lemurs_Agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Lemurs</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css?_v=20220704131926">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>
        const queryString = window.location.href;
        if(queryString.indexOf("#languageselected")>-1){
            document.cookie = "pum-9255=1";
        }
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
	<?php if(is_front_page()){ $header_class = 'header'; }else{$header_class = 'header header_white';}?>
	<header class="<?=$header_class ?>">
    <div class="header__menu-icon menu-icon__container menu-icon">
        <button class="menu-icon__btn btn-open">
            <span class="btn-open__line line "></span>
            <span class="btn-open__line line"></span>
            <span class="btn-open__line line"></span>
        </button>
        <button class="menu-icon__btn btn-close">
            <span class="btn-close__line line"></span>
            <span class="btn-close__line line"></span>
        </button>
    </div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo">
        <picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/logo-green.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-green.png" alt="Logo"></picture>
    </a>
    						<nav class="header__menu menu" data-last="header-btn, append">
							<?php 
							              function header_nav_menu( $args ) {
							                $args = array_merge( [
							    'container'       => '',
							    'container_id'    => '',
							    'container_class' => '',
							    'menu_class'      => 'menu__list',
							    'echo'            => false,
							    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							    'depth'           => 10,
							    'walker'          => new My_Walker_Nav_Menu()
							                ], $args );
							                  echo wp_nav_menu( $args );
							}
							              header_nav_menu( [ 'theme_location'  => 'menu-1' ] );
							?> 

						</nav>

    <div class="header__functions functions">
     <?php $phone =  get_field('telefon', 'option');
     $phone = str_replace(array(' ', '(' , ')', '-'), '', $phone); ?>

        <a data-first="header-btn, after" href="tel:<?=$phone?>" class="functions__phone">
            <span><?php the_field('telefon', 'option'); ?></span>
            <svg>
                <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#phone"></use>
            </svg>
        </a>
        <a href="#callback" data-move="header-btn, 768" class="functions__btn btn_green popup-link">
			<?php
			if(ICL_LANGUAGE_CODE == 'uk'): the_field('obgovoriti_proekt_ua', 'option');
			elseif(ICL_LANGUAGE_CODE == 'ru'): the_field('obgovoriti_proekt_ru', 'option');
			elseif(ICL_LANGUAGE_CODE == 'en'): the_field('obgovoriti_proekt_en', 'option');
			endif;
			?>
		</a>
            
        <?php            
        $translations = pll_the_languages(array(
                "raw" => 1,
        ));
        ?>            
        <div class="functions__lang select-box">
            <div class="options-container">
                <?php foreach ($translations as $item) : ?>
                <div class="option" onclick="javascript:location.href='<?= $item['url'] ?>'">
                    <a class="header-lang__text <?= ($item['current_lang']) ? 'disabled' : '' ?>" href="<?= $item['url'] ?>" style="color: #fff; ">
                   
                    <?= $item['name'] ?>
                </a>
                </div>
                <?php endforeach; ?>
                </div>
            <div class="selected">
                <span class="header-lang__text"><?= $translations[pll_current_language()]['name'] ?></span>
            </div>
        </div>
    </div>
</header>