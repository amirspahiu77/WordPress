<?php
function mytheme_enque_assests(){
    //load theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    //load custom JavaScript file
    wp_enqueue_script('mytheme-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), false,true);

    //Enqueue comment reply script
    
}
?>