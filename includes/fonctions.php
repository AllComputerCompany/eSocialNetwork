
<?php 

  if (!function_exists('not_empty')) {
  	 function not_empty($fields = []){
  		if (count($fields) != 0) {

  			foreach ($fields as $field) {

  				if (empty($_POST[$field]) || trim($_POST[$field])=="" ) {
  					return false;
  				}
  			}

  			return true;
  		}
     }
  }

  if (!function_exists('is_not_in_use')) {
  	 function is_not_in_use($field, $value, $table){
  		global $db;

  		$query = $db->prepare("SELECT id FROM $table WHERE $field=?");
  		$query->execute([$value]);

  		$count = $query->rowCount();


  		$query->closeCursor();

  		return $count;
     }
  }

   

?>