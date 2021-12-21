<!DOCTYPE HTML>
<html>
<head>
<title>Demo del script:   &iquest;C&oacute;mo hacer un login de usuarios en php?</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body style="margin-top:0px">
<?php echo form_open('php/login/'); ?>
<div>
   <h1>Como hacer un login de usuarios en php y codeigniter?</h1>
   <p> </p>   
</div>

   <div class="form-group">
    <label for="maillogin">Email</label>
    <input type="text" name="maillogin" value="<?php echo set_value('maillogin'); ?>" class="form-control" id="maillogin" placeholder="Email">
    <div style="color:red;">
      <?php
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('maillogin');
      ?>
      </div>
   </div>
   <div class="form-group">
    <label for="passwordlogin">Password</label>
    <input type="password"  name="passwordlogin" value="<?php echo set_value('passwordlogin'); ?>" class="form-control" id="passwordlogin" placeholder="Password">
    <div class="LoginUsuariosError"><?php echo form_error('passwordlogin');?></div>
   </div>
   <div class="form-group">
      <button type="submit" class="btn btn-default">Ingresar</button>
   </div>      

</form>
<p> </p>
<div>
   <p> </p>
   <p>Datos de acceso:</p>
   <p>(correspondiente a un usuario ya ingresado en la base de datos)</p>
   <p><strong>e-mail</strong>: diego@blogdephp.com</p>
   <p><strong>password</strong>: blogdephp</strong></p>
</div>

<div>
   <p> </p>   
   <p><a href="http://www.blogdephp.com/">Ver mas articulos y scripts de php y codeigniter</a></p>
</div>
</body>
</html>