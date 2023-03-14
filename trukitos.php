<?php
/*
Plugin Name: Trukitos
*/#inspector-text-control-1

// Hook into the 'wp_footer' action to modify the page content
add_filter('the_content', 'add_data_aos_attribute');

function add_attributes($content,$class){
 
  $tipo="";
  if(strpos($class,"duration")!==false) {
    $tipo="-duration";
    $arrayD=explode("-",$class);
    $class=$arrayD[1];
  }
  if(strpos($class,"ease")!==false) {
    $tipo="-easing";
  }
  $array1=explode($class,$content);
$class_removed=remove_chars($class);
  foreach($array1 as $clave=>$element1){
      
    if($clave!=0) {
      $array2=explode(">",$array1[$clave]);
     $array2[0]=$array2[0]." data-aos$tipo=".'"'.$class_removed.'"';
      $array1[$clave]=implode(">",$array2);
    }
  }
  
  $content=implode($class,$array1);
  return $content;
}
function remove_chars($class){
  $class=str_replace("'","",$class);
  $class=str_replace(" ","",$class);
  $class=str_replace('"',"",$class);
  return $class;
}
function add_data_aos_attribute($content) {

  //return $content;
  $array=[
    'fade'=>'fade',
    'fade-up'=>'fade-up',
  'fade-down'=>'fade-down',
  'fade-right'=>'fade-right',
  'fade-left'=>'fade-left',
  'fade-up-right'=>'fade-up-right',
  'fade-up-left'=>'fade-up-left',
  'fade-down-right'=>'fade-down-right',
  'fade-down-left'=>'fade-down-left',
  'flip-left'=>'flip-left',
  'flip-right'=>'flip-right',
  'flip-up'=>'flip-up',
  'flip-down'=>'flip-down',
  'zoom-in'=>'zoom-in',
  'zoom-in-up'=>'zoom-in-up',
  'zoom-in-right'=>'zoom-in-right',
  'zoom-in-left'=>'zoom-in-left',
  'zoom-in-down'=>'zoom-in-down',
  'zoom-out'=>'zoom-out',
  'zoom-out-up'=>'zoom-out-up',
  'zoom-out-right'=>'zoom-out-right',
  'zoom-out-left'=>'zoom-out-left',
  'zoom-out-down'=>'zoom-out-down',
  'duration-500'=>'500',
  'duration-1000'=>'1000',
  'duration-1500'=>'1500',
  'duration-2000'=>'2000',
  'duration-2500'=>'2500',
  'duration-3000'=>'3000',
  'duration-3500'=>'3500',
  'duration-4000'=>'4000',
  'linear'=>'linear',
  'ease'=>'ease',
  'ease-in'=>'ease-in',
  'ease-out'=>'ease-out',
  'ease-in-out'=>'ease-in-out',
  'ease-in-back'=>'ease-in-back',
  'ease-out-back'=>'ease-out-back',
  'ease-in-out-back'=>'ease-in-out-back',
  'ease-in-sine'=>'ease-in-sine',
  'ease-out-sine'=>'ease-out-sine',
  'ease-in-out-sine'=>'ease-in-out-sine',
  'ease-in-quad'=>'ease-in-quad',
  'ease-out-quad'=>'ease-out-quad',
  'ease-in-out-quad'=>'ease-in-out-quad',
  'ease-in-cubic'=>'ease-in-cubic',
  'ease-out-cubic'=>'ease-out-cubic',
  'ease-in-out-cubic'=>'ease-in-out-cubic',
  'ease-in-quart'=>'ease-in-quart',
  'ease-out-quart'=>'ease-out-quart',
  'ease-in-out-quart'=>'ease-in-out-quart'];
  foreach($array as $clave=>$valor){
    
     $class=$clave;
    if(strpos($content,'"'.$class.'"')!==false) $content=add_attributes($content,'"'.$class.'"');
    if(strpos($content," ".$class." ")!==false) $content=add_attributes($content," ".$class." ");
    if(strpos($content,'"'.$class." ")!==false) $content=add_attributes($content,'"'.$class." ");
    if(strpos($content," ".$class.'"')!==false) $content=add_attributes($content," ".$class.'"');
    if(strpos($content,"'".$class." ")!==false) $content=add_attributes($content,"'".$class." ");
    if(strpos($content," ".$class."'")!==false) $content=add_attributes($content," ".$class."'");
    if(strpos($content,"'".$class."'")!==false) $content=add_attributes($content,"'".$class."'");
  }
  return $content;
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
        { value: 'fade',label: 'fade' },
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
