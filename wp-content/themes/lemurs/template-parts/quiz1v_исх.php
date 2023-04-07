<?php  

function translit($value)
{
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
 
		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
	);
 
	$value = strtr($value, $converter);
	return $value;
}
 

?>


            <section class="quiz__calc calc">
                <div class="calc__container container">
                    <h2 class="calc__title"><?php pll_e('Рассчитайте стоимость вашего проекта');?></h2>


                            <div class="calc__slider">
                                <div class="calc__slider-wrapper swiper-wrapper">
                                    <?php if( have_rows('povtoritel_zagolovka') ): ?>
                                        <?php while( have_rows('povtoritel_zagolovka') ): the_row();  ?>

                                            <div class="calc__slide swiper-slide">
                                                <h3 class="calc__property"> <?php the_sub_field('zagolovok'); ?></h3>
                                                <div class="calc__desc"> <?php the_sub_field('podzagolovok'); ?></div>
                                            </div>
                               
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                                <div class="calc__pagination"></div>
                            </div>
                            <div class="calc__form">
                                <div class="calc__form-pagination"></div>
                                <div class="calc__form-wrapper swiper-wrapper">
                                    <div class="calc__form-slide swiper-slide">
                                    <?php if( have_rows('povtoritel_voprosov_1') ): ?>
                                        <?php while( have_rows('povtoritel_voprosov_1') ): the_row();  ?>
                                                <div class="calc__value">
                                                    <div class="calc__checkbox checkbox">
                                                        <?php the_sub_field('vopros'); ?>
                                                        <input type="checkbox" name="Landing">
                                                    </div>
                                                </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                    <div class="calc__form-slide swiper-slide">
                                    <?php if( have_rows('povtoritel_voprosov_2') ): ?>
                                        <?php while( have_rows('povtoritel_voprosov_2') ): the_row();  ?>
                                                <div class="calc__value">
                                                    <div class="calc__checkbox checkbox">
                                                        <?php the_sub_field('vopros'); ?>
                                                        <input type="checkbox" name="Landing">
                                                    </div>
                                                </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>    
                                    </div> 
                                    <div class="calc__form-slide swiper-slide">
                                        <?php if( have_rows('povtoritel_voprosov_3') ): ?>
                                        <?php while( have_rows('povtoritel_voprosov_3') ): the_row();  ?>
                                                <div class="calc__value">
                                                    <div class="calc__checkbox checkbox">
                                                        <?php the_sub_field('vopros'); ?>
                                                        <input type="checkbox" name="Landing">
                                                    </div>
                                                </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>                                    
                                    </div>
                                    <div class="calc__form-slide swiper-slide">
                                    <?php if( have_rows('povtoritel_voprosov_4') ): ?>
                                        <?php while( have_rows('povtoritel_voprosov_4') ): the_row();  ?>
                                                <div class="calc__value">
                                                    <div class="calc__checkbox checkbox">
                                                        <?php the_sub_field('vopros'); ?>
                                                        <input type="checkbox" name="Landing">
                                                    </div>
                                                </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div> 
                                    <div class="calc__form-slide swiper-slide"> 
                                            <?php if( have_rows('povtoritel_voprosov_5') ): ?>
                                            <?php while( have_rows('povtoritel_voprosov_5') ): the_row();  ?>
                                                <div class="calc__value">
                                                    <div class="calc__checkbox checkbox">
                                                        <?php the_sub_field('vopros'); ?>
                                                        <input type="checkbox" name="Landing">
                                                    </div>
                                                </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div> 
                                </div>
                                <div class="calc__btns">
                                    <div class="swiper-button-prev"><?php pll_e('Назад');?></div>
                                    <div class="swiper-button-next"><?php pll_e('Вперед');?></div>
                                </div>
                            </div>
                        </div>

            </section>