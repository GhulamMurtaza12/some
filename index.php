
<?php include('components/mainheader.php'); ?>


	<div class="container">


  

<?php echo form_open('user/dashboard',array('class'=>'form_horizontal')); ?>


  <fieldset>
    <legend>Login</legend>
    
  <div class="row">
     <div class="col-lg-6">
    	<div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">   
        
                <?php 
				echo form_input(array('name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')));?>
               <!--<input type="text" class="form-control" id="inputEmail" placeholder=" Email" >-->
                 
              </div>
    	</div>
    
    </div><!-- class div col-lg-6 closed-->
        <div class="col-lg-6">
        	<?php echo form_error('email'); ?>
       
        </div>
  </div>
    <!---------------------------------------------------------------------->
    
    <div class="row">
    	<div class="col-lg-6">
         <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      
		<?php 
		echo form_password(array('name'=>'password','class'=>'form-control','placeholder'=>'Password')); ?>
      	<!-- <input type="password" class="form-control" id="inputPassword" placeholder="password"> -->
          
       
      </div>
    </div>
        </div>
        
        <div class="col-lg-6">
        <?php echo form_error('password'); ?>
        </div>
    </div>
    
    
    
    
    

    
   <br /><br />
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      
      	<?php
		// echo form_reset(array('name'=>'reset','value'=>'Reset','class'=>'btn btn-default')); ?>
       
        <button type="reset" class="btn btn-default">Reset</button>  
        
        
        <?php
		// echo form_submit(array('name'=>'submit','value'=>'Login','class'=>'btn btn-primary')); ?>
      <button type="submit" class="btn btn-primary">Login</button>
     
  
</form>
     
      
      </div>
    </div>
  </fieldset>
</form>


</div>
<?php
 echo validation_errors();  ?> 




<?php  include('components/mainfooter.php');?>

