// WPML Condition for Oxygen Builder UI

<?php
if( function_exists('oxygen_vsb_register_condition') ) {

global $oxy_condition_operators;

oxygen_vsb_register_condition(
'Is WPML Language', 
array('options'=>array('ru', 'en', 'es'), 'custom'=>false), array('=='), 
'wpml_returns_language_callback', 
'Language'
);
}
function wpml_returns_language_callback($value, $operator) {

$currentLang = ICL_LANGUAGE_CODE;

global $OxygenConditions;
return $OxygenConditions->eval_string($currentLang,$value,$operator);

}
// modify array with your languages
