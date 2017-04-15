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
function getDadosPage($idPage){
        $idPage = $idPage;
        $args = array (
            'page_id' => $idPage,
            'post_type'   => 'page',
             'numberposts' => 1
            );
        $paginaDados = get_posts($args);
        $metadados = array ();
        $resp = get_post_meta($paginaDados[0]->ID);
        $metadados['telefone'] = $resp['contato_telefone'][0];
        $metadados['endereco'] = $resp['contato_endereco'][0];
        $metadados['email']    = $resp['contato_email'][0];
        $paginaDados['metadados'] = $metadados;

        return $paginaDados;

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
        'show_ui' => true,
        'has_archive' => false,

        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'rest_base' =>'agenda',
        'rest_controller_class' => 'WP_REST_Posts_Controller'

    );

        register_post_type('agenda', $args);
    }



function fill_content($post){

    $agenda_meta_data = get_post_meta($post->ID);
     require_once('dados-agenda.php');

}
function fill_content_contato($post){
    $contato_meta_data = get_post_meta($post->ID);
    require_once('dados-contato.php');
}

function registra_metabox_contato(){
    add_meta_box(
        'informacoes-contato',
        'Informações do contato',
        'fill_content_contato',
        'page',
        'normal',
        'high'

        );
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
add_action('add_meta_boxes', 'registra_metabox_contato');

function atualiza_meta_contato($post_id)
{
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


function atualiza_meta_info($post_id){
        if(isset($_POST['contato_telefone']))
        {
              update_post_meta($post_id,'contato_telefone', sanitize_text_field($_POST['contato_telefone']));
        }
         if(isset($_POST['contato_endereco']))
        {
              update_post_meta($post_id,'contato_endereco', sanitize_text_field($_POST['contato_endereco']));
        }
         if(isset($_POST['contato_email']))
        {
                update_post_meta($post_id,'contato_email', sanitize_text_field($_POST['contato_email']));
        }
}
add_action('save_post', 'atualiza_meta_info');
add_action('save_post', 'atualiza_meta_contato');
function wpb_rand_posts() {

    $args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 4,
         'post_status' => 'publish'
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $conteudo = get_the_content();
            $conteudo = substr($conteudo, 0, 60);
            $string = "  <div class=\"col-md-3 col-sm-3 col-xs-6 popular-posts-grid\">
                        <div class=\"popular-posts-grid1\">
                            <a href=\"". get_permalink() . "\"><img src=\"". get_the_post_thumbnail_url()."\" alt=\" \" class=\"img-responsive\"></a>
                            <h4><a href=\"". get_permalink() . "\">".get_the_title()."</a></h4>
                            <p>". $conteudo ." ...</p>
                        </div>
                    </div>";



        }
        wp_reset_postdata();
    } else {

        $string = 'Posts Não Encontrados';
    }

    return $string;
}



?>