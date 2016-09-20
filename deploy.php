<?php
      echo "Deploying code";
      $message=shell_exec("/www/deploy.sh");
      print_r($message);
?>
