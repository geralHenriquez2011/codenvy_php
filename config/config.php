<?php  
   $host_db = strtolower($_SERVER['HTTP_HOST']); 
 //*****************************************************
   switch ($host_db) {
    case  'url'     : $db_host='localhost';$db_user='';$db_pass='';$db_name='';break;	
    case  'url' : $db_host='localhost';$db_user='';$db_pass='';$db_name='';break;
   default                  : $db_host='localhost';$db_user='';$db_pass='';$db_name='';	
    }

 //*****************************************************
    switch ($host_db) {
     case  'url'     : $ambiente = 'prod'; break;
     case  'url'     : $ambiente = 'prod'; break;
     default                 : $ambiente = 'desa'; 													
    }
//*****************************************************


?>