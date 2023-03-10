<?php
/*
Plugin Name: Trukitos
*/

// Hook into the 'wp_footer' action to modify the page content
add_filter('the_content', 'add_data_aos_attribute');

function add_data_aos_attribute($content) {
  // Load the HTML of the post content into a DOMDocument object
  $doc = new DOMDocument();
  $doc->loadHTML($content);
  
  // Get all the divs in the post content
  $divs = $doc->getElementsByTagName('*');
  
  // Loop through each div and check for the "eureka" class
  foreach ($divs as $div) {
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-up') !== false) $div->setAttribute('data-aos', 'fade-up');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-down') !== false) $div->setAttribute('data-aos', 'fade-down');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-right') !== false) $div->setAttribute('data-aos', 'fade-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-left') !== false) $div->setAttribute('data-aos', 'fade-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-up-right') !== false) $div->setAttribute('data-aos', 'fade-up-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-up-left') !== false) $div->setAttribute('data-aos', 'fade-up-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-down-right') !== false) $div->setAttribute('data-aos', 'fade-down-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'fade-down-left') !== false) $div->setAttribute('data-aos', 'fade-down-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'flip-left') !== false) $div->setAttribute('data-aos', 'flip-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'flip-right') !== false) $div->setAttribute('data-aos', 'flip-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'flip-up') !== false) $div->setAttribute('data-aos', 'flip-up');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'flip-down') !== false) $div->setAttribute('data-aos', 'flip-down');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-in') !== false) $div->setAttribute('data-aos', 'zoom-in');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-in-up') !== false) $div->setAttribute('data-aos', 'zoom-in-up');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-in-right') !== false) $div->setAttribute('data-aos', 'zoom-in-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-in-left') !== false) $div->setAttribute('data-aos', 'zoom-in-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-in-down') !== false) $div->setAttribute('data-aos', 'zoom-in-down');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-out') !== false) $div->setAttribute('data-aos', 'zoom-out');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-out-up') !== false) $div->setAttribute('data-aos', 'zoom-out-up');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-out-right') !== false) $div->setAttribute('data-aos', 'zoom-out-right');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-out-left') !== false) $div->setAttribute('data-aos', 'zoom-out-left');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'zoom-out-down') !== false) $div->setAttribute('data-aos', 'zoom-out-down');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-500') !== false) $div->setAttribute('data-aos-duration', '500');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-1000') !== false) $div->setAttribute('data-aos-duration', '1000');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-1500') !== false) $div->setAttribute('data-aos-duration', '1500');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-2000') !== false) $div->setAttribute('data-aos-duration', '2000');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-2500') !== false) $div->setAttribute('data-aos-duration', '2500');
    if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'duration-3000') !== false) $div->setAttribute('data-aos-duration', '3000');
}
  
  // Save the updated HTML and return it
  $updated_content = $doc->saveHTML();
  return $updated_content;
}
add_action("wp_head",function(){
	?>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php
});

add_action("wp_footer",function(){
?>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<?php	
});
