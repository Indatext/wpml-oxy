// WPML condition
if (function_exists('oxygen_vsb_register_condition')) {
    $lang_list_full = icl_get_languages();
    $lang_list = array();
    foreach($lang_list_full as $code) {
        $lang_list[] = $code['code'];
    }
    oxygen_vsb_register_condition(

        //Condition Name
        'Language',

        //Values
        array(
            'options' => $lang_list,
            'custom' => false
        ),
        //Operators
        array('==', '!='),

        //Callback Function
        'wpml_callback',

        //Condition Category
        'WPML'
    );

    function wpml_callback($value, $operator) {
        $my_lang = ICL_LANGUAGE_CODE;
        global $OxygenConditions;
        return $OxygenConditions -> eval_string($my_lang, $value, $operator);
    }

}
// credit Alexander Buzmakov
// Note: icl_get_languages() is deprecated in WPML >3.6, but still functional
