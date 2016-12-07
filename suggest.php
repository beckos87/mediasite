   <?php 
  $pageTitle = "suggest a media item";
  $section = "suggest";
 include("inc/header.php");?>

   <div class="section page">
    <div class="wrapper">    
    <h1>suggest a media item</h1>  
        <p>if you think there is somthing i am missing please fill out the form below. </p>
        
        <form method="post" action="process.php">
        <table>
        <tr>
            <th><label for="name">Name</label></th>
            <td><input type="text" id="name" name="name" /></td>
        </tr>
            
        
        <tr>
            <th><label for="email">Email</label></th>
            <td><input type="text" id="email" name="email" /></td>
        </tr>    
            
        
        
        <tr>
            <th><label for="email">suggest item details</label></th>
            <td><textarea name="details" id="details"></textarea></td>
        </tr>      
            
            
            
        </table>    
            
        <input type="submit" value="send" />
        
        
        
        
        </form>
        
        
        
        
        
        
        
      </div> 
   </div>

    
   


   










<?php include("inc/footer.php");?>