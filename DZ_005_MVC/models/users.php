<?php
/**
*   User class
*/
class Users {

    var $id, $name, $password, $role;

    public function auth() {
        // checks the session and attempts to authenticate the user
    }

    public function loginAuth($name, $password) {
        // authenticate the user and start a session for them.
        //
    }

    // Constructor
     public function __construct($id, $name, $password, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->role = $role;

    }

    function getUser(){
         echo $this->name ."<br/>";
      }

    function getName(){
         echo $this->name;
      }


public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM USERS');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Users($post['id'], $post['name'], $post['password'], $post['role']);
      }

      return $list;
    }
	
    public static function find($ID) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $ID = intval($ID);
      $req = $db->prepare('SELECT * FROM USERS WHERE ID = :ID');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('ID' => $ID));
      $post = $req->fetch();

      return new Users($post['id'], $post['name'],$post['password'],$post['role']);
    }
	 public static function insertUser($id,$name, $password, $role) {
      $db = Db::getInstance();
      $name = intval($name);
      $password = intval($password);
      $role = intval($role);
      $sql="INSERT INTO users (id,name, password, role)
      VALUES ('$id','$name', '$password', '$role')";
      $db->query($sql);
    }

    public static function updateUser($id,$name, $password, $role) {
      $db = Db::getInstance();
	  $id = intval($id);
      $name = intval($name);
      $password = intval($password);
      $role = intval($role);
      $sql="UPDATE users SET name = '$name', password='$password', role = '$role'
       WHERE id = '$id' 
       AND name = '$name'";
      $db->query($sql);
    }

  	public static function deleteUser($ID) {
      $db = Db::getInstance();
      $sql="DELETE FROM Users WHERE CUST_ID = '$ID'";
	    $db->query($sql);
	}
 }
?>
