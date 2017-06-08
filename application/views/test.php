<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head>
	
   <body> 
      <a href = "<?php echo base_url(); ?>
         index.php/stud/add_view">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>UserEmail#</td>"; 
            echo "<td>UserName.</td>"; 
            echo "<td>Password</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->UserEmail."</td>"; 
               echo "<td>".$r->UserName."</td>"; 
               echo "<td>".$r->UserPassword."</td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/edit/"
                  .$r->UserName."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/delete/"
                  .$r->UserName."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>