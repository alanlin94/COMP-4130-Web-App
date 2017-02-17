<? php
/*
  USERS LOGIN, REGISTER, DATABASE
 */
class user {

  function __construct(){
    include_once('build.php');
    $this->db = $conn;
  }

  public function login($username, $password){
    try {
      
    } catch (Exception $e) {
      echo $e->getMessage();
    }

  }
}


?>
