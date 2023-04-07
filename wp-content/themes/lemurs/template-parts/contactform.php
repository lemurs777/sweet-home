<?php
if (ICL_LANGUAGE_CODE == "ru"): 
    echo do_shortcode('[contact-form-7 id="17" title="Контактная форма 1"]');
elseif(ICL_LANGUAGE_CODE == "uk"):
   echo do_shortcode('[contact-form-7 id="31" title="Контактная форма ua"]');
elseif(ICL_LANGUAGE_CODE =="en"):
   echo do_shortcode('[contact-form-7 id="32" title="Контактная форма en"]');
  endif;
 ?>