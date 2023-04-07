			<section class="main__portfolio portfolio">
				<div class="portfolio__container container">
					<div class="portfolio__body">
						<div class="portfolio__title-block title-block" data-scroll data-scroll-speed='1'>
							<h2 class="portfolio__title title"><?php pll_e('Портфолио');?></h2>
							<?php if (is_front_page()){ ?>
                            <?php if (ICL_LANGUAGE_CODE == 'uk'): ?>							
							<a href="/portfolio-page/" class="portfolio__title-link title-link">
							<?php elseif(ICL_LANGUAGE_CODE == 'ru'): ?>
							<a href="/portfolio-2/" class="portfolio__title-link title-link">
							<?php elseif(ICL_LANGUAGE_CODE == 'en'): ?> 
							<a href="/portfolio-3/" class="portfolio__title-link title-link">
							<?php endif;?> 
								<?php pll_e('Посмотреть все');?>
							</a>
							<?php } ?>
						</div>
						<div class="cards-portfolio__btns" data-scroll data-scroll-speed='2'>
						    <?php
						    if (ICL_LANGUAGE_CODE == 'uk'): 
						        $cat_name_1 = get_cat_name(24);
						        $cat_name_2 = get_cat_name(34);
						        $cat_name_3 = get_cat_name(36);
						    elseif(ICL_LANGUAGE_CODE == 'ru'):
						        $cat_name_1 = get_cat_name(26);
						        $cat_name_2 = get_cat_name(38);
						        $cat_name_3 = get_cat_name(40);
						    elseif(ICL_LANGUAGE_CODE == 'en'):
						        $cat_name_1 = get_cat_name(28);
						        $cat_name_2 = get_cat_name(43);
						        $cat_name_3 = get_cat_name(45);
						    endif;
						    ?>
							<a href="#" class="cards-portfolio__btn btn_pink active" data-filter=".item-first"><?php pll_e('Все');?></a>
							<a href="#" class="cards-portfolio__btn btn_pink" data-filter=".item-second"><?=$cat_name_1 ?> </a>
							<a href="#" class="cards-portfolio__btn btn_pink" data-filter=".item-third"><?= $cat_name_2 ?></a>
							<a href="#" class="cards-portfolio__btn btn_pink" data-filter=".item-fourht"><?= $cat_name_3 ?></a>
						</div>
						<div class="portfolio__inner" data-scroll data-scroll-speed='0.1'>

				<div class="portfolio__cards cards-portfolio mix item-first">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'portfolio',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                    <div class="cards-portfolio__items_first"> 
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>

									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image"  style="<?= $articleFields['fon_proekta']?>">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['nazvanie']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['zakazchik']?></div>
										</div>
									</div>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>

					<div class="cards-portfolio__items">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'portfolio',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>
                             <?php if ($i == 3 ): ?>
									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="<?= $articleFields['fon_proekta']?>">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>
								<?php    continue; 
							endif;?>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>
				</div>
				
				
								<div class="portfolio__cards cards-portfolio mix item-second">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'portfolio',
                        'cat' => '24',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                    <div class="cards-portfolio__items_first"> 
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>

									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>

					<div class="cards-portfolio__items">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'portfolio',
                        'cat' => '24',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>
                             <?php if ($i == 3 ): ?>
									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>
								<?php    continue; 
							endif;?>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>
				</div>

                <div class="portfolio__cards cards-portfolio mix item-third">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'portfolio',
                        'cat' => '34',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                    <div class="cards-portfolio__items_first"> 
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>

									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>

					<div class="cards-portfolio__items">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'portfolio',
                        'cat' => '34',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>
                             <?php if ($i == 3 ): ?>
									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>
								<?php    continue; 
							endif;?>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>
				</div>

                <div class="portfolio__cards cards-portfolio mix item-fourht">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'portfolio',
                        'cat' => '36',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                    <div class="cards-portfolio__items_first"> 
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>

									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>

					<div class="cards-portfolio__items">
                    <?php 					    
                    $articles = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'portfolio',
                        'cat' => '36',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        )
                        );
                        ?>
                        <?php if ($articles->have_posts()){ ?> 
                        <?php $i = 1; ?> 
                          <?php while($articles->have_posts()) : $articles->the_post(); ?> 
                            <?php $articleFields = get_fields(); ?>
                             <?php if ($i == 3 ): ?>
									<div class="cards-portfolio__item _animated">
										<a href="<?= get_the_permalink(); ?>" class="cards-portfolio__image" style="background: <?= $articleFields['fon_proekta']?>;">
											<picture><source srcset="<?= $articleFields['izobrazhenie_webp']?>" type="image/webp"><img src="<?= $articleFields['izobrazhenie_png']?>" alt="Card Image"></picture>
										</a>
										<div class="cards-portfolio__info">
											<div class="cards-portfolio__name"><?= $articleFields['zakazchik']?></div>
											<div class="cards-portfolio__desc"><?= $articleFields['nazvanie']?></div>
										</div>
									</div>
								<?php    continue; 
							endif;?>

                          <?php $i++; ?> 
                        <?php endwhile; wp_reset_postdata(); ?> 
                      <?php }; ?>
					</div>
				</div>

							
						</div> 
					</div>
				</div>
			</section>