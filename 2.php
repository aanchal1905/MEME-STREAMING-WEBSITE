<?php 
// going to use above code 
require '1.php'; 
  
// printing column name above the data 
echo 'Owner'.' '.'Caption'.' '.'URL'.' <br>'; 
  
// sql query to fetch all the data 
$query = "SELECT * FROM `memes`"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysqli_query($query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc($is_query_run)) 
    { 
        // these four line is for four column 
        echo $query_executed['Owner'].' '; 
        echo $query_executed['Caption'].' '; 
        echo $query_executed['URL'].'<br>';  
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?> 