<?php
   session_start();
   
   session_destroy();
     echo"<script>
	             alert('You are successfully LOGOUT!');
	 </script>";
  echo" 
        <meta http-equiv='refresh' content='0;URL=index.html'>
   "
  ?>