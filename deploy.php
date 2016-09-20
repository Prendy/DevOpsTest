<?php
      echo "Deploying some mental code";
      $key = $_POST['payload'];

      if($key == "devops") {
      $message=shell_exec("/www/deploy.sh");
      print_r($message);
    }
?>
