<?php  require_once('Comman/Header.php')?>
 <?php require_once('assests/style.css');
 $msg= $this->session->flashdata('login_s');
  if(isset($msg)&& $msg!=''){

?>
<div class="alert alert-danger">
  <strong >Error!</strong> <?php echo $msg  ?> 

</div>
<?php }?>

<div class="container">

<form class="form-horizontal" method="post" action="<?php echo site_url('Login_Controller/Check_login');?>">
  <fieldset>
    <legend>LoginForm</legend>
    
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
         
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>