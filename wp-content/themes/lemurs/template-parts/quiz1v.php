            <section class="quiz__calc calc">
                <div class="calc__container container">
                    <h2 class="calc__title"><?php pll_e('Рассчитайте стоимость вашего проекта');?></h2>
                    <div class="quiz-v2__calc-block">
                        <div class="quiz-v2__form">
							
							<?php
							if 		(ICL_LANGUAGE_CODE == 'uk') :  echo do_shortcode('[contact-form-7 id="404" title="multistep ua quiz1"]'); 
							elseif	(ICL_LANGUAGE_CODE == 'en') :  echo do_shortcode('[contact-form-7 id="428" title="multistep en quiz1"]');
							elseif	(ICL_LANGUAGE_CODE == 'ru') :  echo do_shortcode('[contact-form-7 id="427" title="multistep ru quiz1"]');
							endif;
							?>
                        </div>
                        <div class="quiz-v2__image">
                            <svg>
                                <use xlink: href="img/icons/icons.svg#lemur1"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

