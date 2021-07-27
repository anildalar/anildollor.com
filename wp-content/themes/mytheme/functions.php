<?php 

    // action = events
    // wp_head wp_footer 

    function css_cbfn(){
        //wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
        wp_enqueue_style('main_style', get_stylesheet_uri() );
    }

    add_action('wp_enqueue_scripts','css_cbfn')

?>


