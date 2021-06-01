<div class="container">
<form action="?controller=users&action=updateUser" method="POST">
  <div class="form-group">
    <label for="ID">id</label>
    <input type="text" readonly class="form-control" name="ID" value=<?php echo $users->id?>>
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" readonly class="form-control" name="name" value=<?php echo $users->name?>>
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="text" class="form-control" name="password" value=<?php echo $users->password?>>
  </div>
  <div class="form-group">
    <label for="role">role</label>
    <input type="text" class="form-control" name="role" value=<?php echo $users->role?>>
  </div>
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>
