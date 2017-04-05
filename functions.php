<?php
add_theme_support('post-thumbnails');

function getHome(){

 $home = get_template_directory_uri();

 return $home;
}

function geraTitle(){
      bloginfo(name);
    if(!is_home())
         echo ' | ';
         the_title();
 }

function getDadosPostInterno($slug){
    $slug = $slug;
    $args = array (
        'name' => $slug,
        'post_type'   => 'post',
        'post_status' => 'private',
        'numberposts' => 1
        );
    $postInterno = get_posts($args);

    return $postInterno;
}
/*
 * Set post views count using post meta//functions.php
 */
function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function strip_shortcode_gallery( $content ) {
    preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if( false !== $pos ) {
                    return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
                }
            }
        }
    }

    return $content;
}

function cadastrando_agenda()
    {
    $labels = array(
        'name' => 'Agenda',
        'name_singular' => 'Agenda',
        'add_new_item' => 'Adicionar Novo Registro',
        'edit_item' =>  'Editar Registro',
        'attributes' => 'Atributos'
     );

    $supports = array(
        'title' ,
        'editor',
        'thumbnail',
        'page-attributes',
        'post-format' 
      );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'has_archive' => true,
        'supports' => $supports
    );

        register_post_type('agenda', $args);
    }
























function fill_content($post){

    $agenda_meta_data = get_post_meta($post->ID);
     require_once('dados-agenda.php');
    
    

}

function register_metabox(){
    add_meta_box(
        'informacoes-agenda',
        'Informações da Agenda',
        'fill_content',
        'agenda',
        'normal',
        'default'
    );
}
add_action('init', 'cadastrando_agenda'); 
add_action('add_meta_boxes', 'register_metabox');

function atualiza_meta_info($post_id){
        if(isset($_POST['dataAgenda_id']))
        {
              update_post_meta($post_id,'dataAgenda_id', sanitize_text_field($_POST['dataAgenda_id']));
        }
         if(isset($_POST['enderecoAgenda_id']))
        {
              update_post_meta($post_id,'enderecoAgenda_id', sanitize_text_field($_POST['enderecoAgenda_id']));
        }
         if(isset($_POST['horarioAgenda_id']))
        {
                update_post_meta($post_id,'horarioAgenda_id', sanitize_text_field($_POST['horarioAgenda_id']));
        }
}
add_action('save_post', 'atualiza_meta_info');
?>