<?php
      echo "Deploying some mental code";
      $message=shell_exec("/www/deploy.sh");
      print_r($message);
?>
