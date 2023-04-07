<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lemurs_Agency
 */

?>

		<footer class="footer">
    <div class="footer__block" data-last="footer-menu, after">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo" data-first="footer-menu, after">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/logo-white.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-white.png" alt="Logo"></picture>
        </a>
    						<nav class="footer__menu menu-footer" data-move="footer-menu, 993">
							<?php 
							              function header_nav_menu_footer( $args ) {
							                $args = array_merge( [
							    'container'       => '',
							    'container_id'    => '',
							    'container_class' => '',
							    'menu_class'      => 'menu-footer__list',
							    'echo'            => false,
							    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							    'depth'           => 10,
							    'walker'          => new My_Walker_Nav_Menu_footer()
							                ], $args );
							                  echo wp_nav_menu( $args );
							}
							              header_nav_menu_footer( [ 'theme_location'  => 'menu-1' ] );
							?> 

						</nav>            
        <div class="footer__functions functions-footer">
            <a href="mailto:<?php the_field('email' ,'option');?>" class="functions-footer__email"><?php the_field('email' ,'option');?></a>
            <?php            
            $translations = pll_the_languages(array(
                    "raw" => 1,
            ));
            ?>            
            <div class="functions-footer__lang select-box">
                <div class="options-container">
                    <?php foreach ($translations as $item) : ?>
                    <div class="option">
                        <a class="header-lang__text <?= ($item['current_lang']) ? 'disabled' : '' ?>" href="<?= $item['url'] ?>" style="color: #fff;">
                       
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
      
        
    </div>
    <div class="footer__block">
        <div class="footer__rights">© 2021 - <?php echo date('Y') . ' ' . get_field('kopirajt','option');?> </div>
        <a href="<?php the_field('instagram','option'); ?>" class="footer__instagram">
            <svg>
                <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#instagram"></use>
            </svg>
        </a>
    </div>
</footer>
		<div class="callback__popup popup" id="callback">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#header" class="popup__close close-popup">
                <svg>
                    <use xlink: href="<?php echo get_template_directory_uri();?>/assets/img/icons/icons.svg#close"></use>
                </svg>
            </a>
            <div action="#" class="callback__body">
                        <?php get_template_part('template-parts/contactform'); ?>
            </div>
        </div>
    </div>
</div>

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js?_v=20220704131926"></script>
	<script src="<?php echo get_template_directory_uri();?>/assets/js/app.min.js?_v=20220704131926"></script>


<?php wp_footer(); ?>

</body>
</html>
