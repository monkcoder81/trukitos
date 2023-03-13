<?php
/*
Plugin Name: Trukitos
*/#inspector-text-control-1

// Hook into the 'wp_footer' action to modify the page content
add_filter('the_content', 'add_data_aos_attribute');

function add_data_aos_attribute($content) {

  $content=str_replace("<figure","<p data-clave='prefix'",$content);
  $content=str_replace("</figure>","</p><!--marker-->",$content);
  // Load the HTML of the post content into a DOMDocument object
  $doc = new DOMDocument();
  $doc->loadHTML($content);
  
  // Get all the divs in the post content
  $divs = $doc->getElementsByTagName('*');
  
  // Loop through each div and check for the "eureka" class
  foreach ($divs as $div) {
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-up ') !== false) $div->setAttribute('data-aos', 'fade-up');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-down ') !== false) $div->setAttribute('data-aos', 'fade-down');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-right ') !== false) $div->setAttribute('data-aos', 'fade-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-left ') !== false) $div->setAttribute('data-aos', 'fade-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-up-right ') !== false) $div->setAttribute('data-aos', 'fade-up-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-up-left ') !== false) $div->setAttribute('data-aos', 'fade-up-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-down-right ') !== false) $div->setAttribute('data-aos', 'fade-down-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' fade-down-left ') !== false) $div->setAttribute('data-aos', 'fade-down-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' flip-left ') !== false) $div->setAttribute('data-aos', 'flip-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' flip-right ') !== false) $div->setAttribute('data-aos', 'flip-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' flip-up ') !== false) $div->setAttribute('data-aos', 'flip-up');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' flip-down ') !== false) $div->setAttribute('data-aos', 'flip-down');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-in ') !== false) $div->setAttribute('data-aos', 'zoom-in');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-in-up ') !== false) $div->setAttribute('data-aos', 'zoom-in-up');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-in-right ') !== false) $div->setAttribute('data-aos', 'zoom-in-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-in-left ') !== false) $div->setAttribute('data-aos', 'zoom-in-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-in-down ') !== false) $div->setAttribute('data-aos', 'zoom-in-down');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-out ') !== false) $div->setAttribute('data-aos', 'zoom-out');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-out-up ') !== false) $div->setAttribute('data-aos', 'zoom-out-up');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-out-right ') !== false) $div->setAttribute('data-aos', 'zoom-out-right');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-out-left ') !== false) $div->setAttribute('data-aos', 'zoom-out-left');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' zoom-out-down ') !== false) $div->setAttribute('data-aos', 'zoom-out-down');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-500 ') !== false) $div->setAttribute('data-aos-duration', '500');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-1000 ') !== false) $div->setAttribute('data-aos-duration', '1000');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-1500 ') !== false) $div->setAttribute('data-aos-duration', '1500');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-2000 ') !== false) $div->setAttribute('data-aos-duration', '2000');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-2500 ') !== false) $div->setAttribute('data-aos-duration', '2500');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-3000 ') !== false) $div->setAttribute('data-aos-duration', '3000');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-3500 ') !== false) $div->setAttribute('data-aos-duration', '3500');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' duration-4000 ') !== false) $div->setAttribute('data-aos-duration', '4000');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' linear ') !== false) $div->setAttribute('data-aos-easing', 'linear');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease ') !== false) $div->setAttribute('data-aos-easing', 'ease');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in ') !== false) $div->setAttribute('data-aos-easing', 'ease-in');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out ') !== false) $div->setAttribute('data-aos-easing', 'ease-out');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-back ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-back');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out-back ') !== false) $div->setAttribute('data-aos-easing', 'ease-out-back');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out-back ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out-back');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-sine ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-sine');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out-sine ') !== false) $div->setAttribute('data-aos-easing', 'ease-out-sine');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out-sine ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out-sine');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-quad ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-quad');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out-quad ') !== false) $div->setAttribute('data-aos-easing', 'ease-out-quad');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out-quad ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out-quad');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-cubic ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-cubic');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out-cubic ') !== false) $div->setAttribute('data-aos-easing', 'ease-out-cubic');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out-cubic ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out-cubic');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-quart ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-quart');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-out-quart ') !== false) $div->setAttribute('data-aos-easing', 'ease-out-quart');
    if ($div->hasAttribute('class') && strpos(" ".$div->getAttribute('class')." ", ' ease-in-out-quart ') !== false) $div->setAttribute('data-aos-easing', 'ease-in-out-quart');
    
  }
  
  // Save the updated HTML and return it
  $updated_content = $doc->saveHTML();
  $content=str_replace("</p><!--marker-->","</figure>",$content);
  $updated_content=str_replace("<p data-clave='prefix'","<figure",$updated_content);
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
 
add_action("admin_head","vierjar");

function vierjar(){
  ?>
<script>
 var el = wp.element.createElement;

 var withInspectorControls = wp.compose.createHigherOrderComponent(
  function (BlockEdit) {
    return function (props) {
      var options = [
        { value: '',label: 'None' },
        { value: 'fade-up',label: 'fade up' },
        { value: 'fade-down',label: 'fade down' },
        { value: 'fade-right',label: 'fade right' },
        { value: 'fade-left',label: 'fade left' },
        { value: 'fade-up-right',label: 'fade up-right' },
        { value: 'fade-up-left',label: 'fade up-left' },
        { value: 'fade-down-right',label: 'fade down-right' },
        { value: 'fade-down-left',label: 'fade down-left' },
        { value: 'flip-left',label: 'flip left' },
        { value: 'flip-right',label: 'flip right' },
        { value: 'flip-up',label: 'flip up' },
        { value: 'flip-down',label: 'flip down' },
        { value: 'zoom-in',label: 'zoom in' },
        { value: 'zoom-in-up',label: 'zoom in-up' },
        { value: 'zoom-in-right',label: 'zoom in-right' },
        { value: 'zoom-in-left',label: 'zoom in-left' },
        { value: 'zoom-in-down',label: 'zoom in-down' },
        { value: 'zoom-out',label: 'zoom out' },
        { value: 'zoom-out-up',label: 'zoom out-up' },
        { value: 'zoom-out-right',label: 'zoom out-right' },
        { value: 'zoom-out-left',label: 'zoom out-left' },
        { value: 'zoom-out-down',label: 'zoom out-down' },
      ];

      var selectControl = el(
        wp.components.SelectControl,
        {
          label: 'Effect',
          options: options,
          value: props.attributes.mySelectValue,
          onChange: function (value) {
            props.setAttributes({ mySelectValue: value });
            addClass(props.clientId,value,'effect');
          },
        }
      );

      var options2 = [
  { value: '', label: 'Default' },
  { value: 'duration-500', label: '500 ms' },
  { value: 'duration-1000', label: '1000 ms' },
  { value: 'duration-1500', label: '1500 ms' },
  { value: 'duration-2000', label: '2000 ms' },
  { value: 'duration-2500', label: '2500 ms' },
  { value: 'duration-3000', label: '3000 ms' },
  { value: 'duration-3500', label: '3500 ms' },
  { value: 'duration-4000', label: '4000 ms' },
];

var durationControl = el(
  wp.components.SelectControl,
  {
    label: 'Duration',
    options: options2,
    value: props.attributes.durationValue,
    onChange: function (value) {
      props.setAttributes({ durationValue: value });
      addClass(props.clientId, value,'duration');
    },
  }
);

var options3 = [
  { value: '', label: 'Default' },
  { value: 'linear', label: 'linear' },
  { value: 'ease', label: 'ease' },
  { value: 'ease-in', label: 'ease-in' },
  { value: 'ease-out', label: 'ease-out' },
  { value: 'ease-in-out', label: 'ease-in-out' },
  { value: 'ease-in-back', label: 'ease-in-back' },
  { value: 'ease-out-back', label: 'ease-out-back' },
  { value: 'ease-in-out-back', label: 'ease-in-out-back' },
  { value: 'ease-in-sine', label: 'ease-in-sine' },
  { value: 'ease-out-sine', label: 'ease-out-sine' },
  { value: 'ease-in-out-sine', label: 'ease-in-out-sine' },
  { value: 'ease-in-quad', label: 'ease-in-quad' },
  { value: 'ease-out-quad', label: 'ease-out-quad' },
  { value: 'ease-in-out-quad', label: 'ease-in-out-quad' },
  { value: 'ease-in-cubic', label: 'ease-in-cubic' },
  { value: 'ease-out-cubic', label: 'ease-out-cubic' },
  { value: 'ease-in-out-cubic', label: 'ease-in-out-cubic' },
  { value: 'ease-in-quart', label: 'ease-in-quart' },
  { value: 'ease-out-quart', label: 'ease-out-quart' },
  { value: 'ease-in-out-quart', label: 'ease-in-out-quart' },
];

var easingControl = el(
  wp.components.SelectControl,
  {
    label: 'Easing',
    options: options3,
    value: props.attributes.easingValue,
    onChange: function (value) {
      props.setAttributes({ easingValue: value });
      addClass(props.clientId, value,'easing');
    },
  }
);

      function addClass(clientId,value,origin){
        var block = wp.data.select('core/block-editor').getBlock(clientId);
        var attributes = block.attributes;
        var currentClasses = attributes.className || '';
    
        if(origin=="effect") array1=options;
        if(origin=="duration") array1=options2;
        if(origin=="easing") array1=options3;

        for(i=0;i<array1.length;i++){
          currentClasses=currentClasses.replaceAll(array1[i].value,"");
        }
    
        var updatedClasses = currentClasses + ' ' + value;
        attributes.className = updatedClasses.trim();
        wp.data.dispatch('core/block-editor').updateBlockAttributes(clientId, attributes);
        
      }
     
      return el(
        wp.element.Fragment,
        {},
        el(BlockEdit, props),
        el(
          wp.blockEditor.InspectorControls,
          {},
          el(
            wp.components.PanelBody,
            { title: 'Animations', initialOpen: true },
            el(
              wp.components.PanelRow,
              {},
              selectControl
            ),
            el(
              wp.components.PanelRow,
              {},
              durationControl
            ),
            el(
              wp.components.PanelRow,
              {},
              easingControl
            )
          )
        )
      );
    };
  },
  'withInspectorControls'
);
wp.hooks.addFilter(
    'editor.BlockEdit',
    'my-plugin/with-inspector-controls',
    withInspectorControls
);

</script>
  <?php
}

add_action("dynamic_sidebar",function(){
  ob_start("add_data_aos_attribute");
  
  });
  
  add_action("dynamic_sidebar_after",function(){
      if (ob_get_length() > 0) { ob_end_flush(); }
      
      });


    
