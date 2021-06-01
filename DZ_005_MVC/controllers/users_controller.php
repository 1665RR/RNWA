<?php
  
class UsersController  {
public function index() {
      // we store all the posts in a variable
      $users = users::all();
      require_once('views/users/index.php');
    }

     public function verifyinsert(){
      require_once('views/users/insert.php');
    }

    public function insertUser()
    {
      users::insertUser($_POST['id'], $_POST['name'], $_POST['password'], $_POST['role']);
     return call('users', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['ID']))
          return call('pages', 'error');
    $users = users::find($_GET['ID']);
    require_once('views/users/update.php');
  }

  public function updateUser()
  {
    if (!isset($_POST['id']))
      return call('pages', 'error');
   users::updateUser($_POST['id'], $_POST['name'], $_POST['password'], $_POST['role']);
   return call('users', 'index');
  }

	public function deleteUser() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      users::users($_GET['ID']);
      return call('users', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['ID']))
          return call('pages', 'error');
          require_once('views/users/delete.php');
      }
  }


?>