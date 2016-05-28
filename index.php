<?php  
  session_start();
  include_once 'app_functions/functions.php'; 
  landing_page_session_check();


?>


<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="https://sudhakarannadurai.wordpress.com/aboutme/">About</a></li>
            <li role="presentation"><a href="view/login.php?action=logout">Logout</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">SLOF(TN)</h3>
      </div>
      <div class="jumbotron">
        <form>
          <div class="row">
              <div class="col-sm-3">
                <input type="textbox" class="form-control" name="from" placeholder="Start Location" autofocus required>
              </div>
              <div class="col-sm-3">
                <input type="textbox" class="form-control" name="to" placeholder="End Location" required style="margin-left: -11px;">
              </div>
              <div class="col-sm-2">
                <input type="textbox" class="form-control" name="lorry" placeholder="Number of Lorry's" required style="width: 124%;margin-left: -18px;">
              </div>
              <div class="col-sm-2">
                <input type="textbox" class="form-control" name="load" placeholder="Number of Load's" required style="
    width: 130%;
">
              </div>
              <div class="col-sm-2">
                <input type="submit" class="btn btn-primary btn-sm" value="submit">
              </div>
            </div>
          </form>
      </div>
      
      <footer class="footer">

         <p style="text-align: center">All rights are reserved by <a href="vefetch.com">Vefetch</a>, by <a href="https://twitter.com/sudhakar_valar">@sudhakar</a>.</p>
      </footer>
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


</body></html>