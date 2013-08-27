<html>
 <head>
     <meta http-equiv="Content-Type"content="text/html; charset=UTF-8"/>
     <title>scorm</title>     
     
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     
     
   </head>
   <body>
     
     
     
     <?php
//incluye libreria zip
require_once("pclzip.lib.php"); 

//estandar de configuracion funciones y metodos
include "config/config.php";      //***
include "config/metodos.php";     //***
include "config/function.php";    //***



     ?>
     <!-- The data encoding type, enctype, MUST be specified as below -->
     <form id="form" enctype="multipart/form-data" method="POST">
       
       Cargar Archivo:  <input name="userfile" id="nombre_archivo" type="file" />
      	
       <input type="submit" value="Upload" />
     </form>
     
     
     
   </body>

</html>
