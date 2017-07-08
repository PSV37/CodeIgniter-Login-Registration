<?php require_once("Comman/Header.php");
//if(isset($this->session->flashdata('message_name'))){
  $msg= $this->session->flashdata('Registration_s');
  if(isset($msg)&& $msg!=''){

?>
<div class="alert alert-success">
  <strong >Success!</strong> <?php echo $msg ."<a href='<?php echo site_url('Login_Controller');?>'>click to login </a>"?> 

</div>
<?php }?>
<div class="container">
  <h2 class="text-center" style="margin-bottom:40px">Registration Form</h2>
  <form class="form-horizontal" action="<?php echo site_url('UserAccount/insert');?>" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
