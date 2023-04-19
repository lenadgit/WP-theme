<?php 
if(function_exists('register_sidebar'))
register_sidebar(array('name' => 'Sidebar'));
register_sidebar(array('name' => 'Sidebar2'));

add_theme_support('post-thumbnails');
 set_post_thumbnail_size(300, 250, true );

 function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; 
  $a['mid_size'] = 3; 
  $a['end_size'] = 1; 
  $a['prev_text'] = '&laquo;'; 
  $a['next_text'] = '&raquo;'; 

  if ($max > 1) echo '';
  if ($total == 1 && $max > 1) $pages = 'Page ' . $current . ' из ' . $max ."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '';
}

?>
