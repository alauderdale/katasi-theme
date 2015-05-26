<?php

//create post types


function create_my_post_types() {

    //add press
    $value_args = array(
      'public' => true,
      'label'  => 'Press',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'press', $value_args );


    //add people
    $value_args = array(
      'public' => true,
      'label'  => 'People', 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'person', $value_args );


     //add jobs
    $value_args = array(
      'public' => true,
      'label'  => 'jobs', 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'job', $value_args );

    

}

add_action( 'init', 'create_my_post_types' );


