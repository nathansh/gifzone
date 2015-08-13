<?php 
$group = array (
  'key' => 'group_55bec5a589af2',
  'title' => 'Gif',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_55bec5af98630',
      'label' => 'Gif',
      'name' => 'gif_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'full',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    1 => 
    array (
      'key' => 'field_55bec63edd89e',
      'label' => 'Category',
      'name' => 'gif_category',
      'type' => 'taxonomy',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'taxonomy' => 'category',
      'field_type' => 'select',
      'allow_null' => 1,
      'add_term' => 1,
      'save_terms' => 1,
      'load_terms' => 1,
      'return_format' => 'id',
      'multiple' => 0,
    ),
    2 => 
    array (
      'key' => 'field_55bec675dd89f',
      'label' => 'Hashtags',
      'name' => 'gif_tags',
      'type' => 'taxonomy',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'taxonomy' => 'post_tag',
      'field_type' => 'multi_select',
      'allow_null' => 1,
      'add_term' => 1,
      'save_terms' => 1,
      'load_terms' => 1,
      'return_format' => 'object',
      'multiple' => 0,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'gif',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'left',
  'instruction_placement' => 'label',
  'hide_on_screen' => 
  array (
    0 => 'permalink',
    1 => 'the_content',
    2 => 'excerpt',
    3 => 'custom_fields',
    4 => 'discussion',
    5 => 'comments',
    6 => 'revisions',
    7 => 'slug',
    8 => 'author',
    9 => 'format',
    10 => 'page_attributes',
    11 => 'featured_image',
    12 => 'categories',
    13 => 'tags',
    14 => 'send-trackbacks',
  ),
);