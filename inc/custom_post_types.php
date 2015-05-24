<?php

//create post types


function create_my_post_types() {

    //add core values
    $value_args = array(
      'public' => true,
      'label'  => 'Press',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'press', $value_args );


    

}

add_action( 'init', 'create_my_post_types' );


