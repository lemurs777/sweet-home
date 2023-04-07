			<section class="main__sale banner _animated" data-scroll data-scroll-speed='2'>
				<div class="banner__container container">
					<div class="banner__body">
						<div class="banner__bg">
							<div class="banner__gradient bg-gradient"></div>
							<div class="banner__gradient bg-gradient"></div>
						</div>
						<div class="banner__content">
							<div class="banner__image">
								<img src="<?php the_field('akczentnaya_kartinka', 'option'); ?>">
							</div>
							<?php if (ICL_LANGUAGE_CODE == 'uk'): ?>
							<div class="banner__info">
								<div class="banner__value"><?php the_field('obem_skidki', 'option'); ?></div>
								<div class="banner__label"><?php the_field('skidka', 'option'); ?></div>
								<div class="banner__text"><?php the_field('opisanie_skidki', 'option'); ?>
								
								</div>
								<div class="banner__link-wrapper">
									<?php 
									$banner_link = get_field('ssylka', 'option'); 

									if (!empty($banner_link)){
										?>
										<a href="<?=$banner ?>" class="banner__link"><?php pll_e('Заказать
										услугу');?></a>
										<?php
									}else{
										?>
										<a  href="#callback" class="banner__link"><?php pll_e('Заказать
										услугу');?></a>									
									<?php
									}
									
									?>
									
								</div>
							</div>
							<? elseif(ICL_LANGUAGE_CODE == 'ru'): ?>
							<div class="banner__info">
								<div class="banner__value"><?php the_field('obem_skidki_ru', 'option'); ?></div>
								<div class="banner__label"><?php the_field('skidka_ru', 'option'); ?></div>
								<div class="banner__text"><?php the_field('opisanie_skidki_ru', 'option'); ?>
								
								</div>
								<div class="banner__link-wrapper">
									<a href="#" class="banner__link"><?php pll_e('Заказать
										услугу');?></a>
								</div>
							</div>
							<?php elseif(ICL_LANGUAGE_CODE == 'en'): ?> 
							<div class="banner__info">
								<div class="banner__value"><?php the_field('obem_skidki_en', 'option'); ?></div>
								<div class="banner__label"><?php the_field('skidka_en', 'option'); ?></div>
								<div class="banner__text"><?php the_field('opisanie_skidki_en', 'option'); ?>
								
								</div>
								<div class="banner__link-wrapper">
						    <?php if(ICL_LANGUAGE_CODE == 'uk'): ?>
									<a href="/obgovoryty-proekt/" class="banner__link"><?php pll_e('Заказать услугу');?></a>
							<?php elseif(ICL_LANGUAGE_CODE == 'ru'): ?>
									<a href="/obgovorit-proekt/" class="banner__link"><?php pll_e('Заказать услугу');?></a>
							<?php elseif(ICL_LANGUAGE_CODE == 'en'): ?>
									<a href="/discuss/" class="banner__link"><?php pll_e('Заказать услугу');?></a>							
							<?php endif;?>
								</div>
							</div>
							<?php endif;?>
							
						</div>
					</div>
				</div>
			</section>