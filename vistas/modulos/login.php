 <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Tienda</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="usuario" name="imgUsuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="imgPassword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar!!</button>
        </div>
        <!-- /.col -->
      </div>
      <?php
        //instanciamos al controlador tambirn al metodo de inicio de session
         $login= new ControladorUsuarios();
         $login ->ctrIngresarUsuario();
      ?>
    </form>

    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>