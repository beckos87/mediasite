<?php 
function get_item_html($id,$item) {
    $outPut =  "<li><a href='details.php?id=".$id."'><img src='" 
              . $item["img"] . "' alt='" 
              . $item["title"] . "'/>" 
              . "<p>View details</p>" 
              . "</a></li>";
    
    return $outPut;
}



function array_category($catalog,$category) {
     
     $output = array();
    
    
    
    
    
    foreach ($catalog as $id => $item) {
          if($category == null OR strtolower($category) == strtolower($item["category"])){
             $sort = $item["title"];
             $sort = ltrim($sort, "The ");  
             $sort = ltrim($sort, "A ");   
             $sort = ltrim($sort, "AN ");  
             $output[$id] = $sort;  
              
          }
      
     }
    asort($output);
    return array_keys($output);
}   

   


?>








