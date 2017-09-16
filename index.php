<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Playground</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h1>LVJsPhp</h1>
    </div>
    <div class="col-lg-2">
      <a data-toggle="modal" href="#loginModal" id="loginLink" class="btn">Login</a>
      <a href="#" id="logoutLink" style="display: none;" class="btn">Logout</a>
    </div>
  </div>
  <div class="row">

    <div class="col-lg-4 col-md-3 col-sm-2">
      <h2>Menu</h2>
    </div>
    <div class="col-lg-8 col-md-9 col-sm-10">
      <h2>Content</h2>
      <div id="contentContainer"></div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">

        <div class="alert alert-danger" id="formErrorDisplay" style="display:none">Invalid email or password.  Please try again.</div>

        <form class="form-horizontal" action="">
          <div class="form-group">
            <label for="loginEmail">Email</label>
            <input type="email" id="loginEmail" class="form-control" name="email" placeholder="user@example"/>
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input id="loginPassword" class="form-control" type="password" name="password" placeholder="Password"/>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="buttonLogin">Login</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/site.js"></script>
</body>
</html>
