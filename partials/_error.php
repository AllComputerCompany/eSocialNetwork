 <?php 

        if (isset($errors) && count($errors) != 0) {
        	var_dump($errors);
          
           echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"  area-hidden="true">&times; </button>';
                    foreach ($errors as $error) {
                      echo $error.'</br>';
                    }
            echo '</div>';
        }
?>