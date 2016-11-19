<?php
include("connect.php");  
if(isset($_POST["query"]))  
{  
      $output = '';  
      $data = "";
      $counter ="";
      $query = "SELECT * FROM tbl_list WHERE list_name LIKE '%".$_POST["query"]."%'";
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';
      $count = mysqli_num_rows($result);
 
      if($count > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["list_name"].'</li>';  
           }

      }
      $output .= '</ul>';  
      echo $output;  
}  