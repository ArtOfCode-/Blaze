<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blaze</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <style>
      img {max-width:100%;}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation" style="display:none">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire" style="color:orange"></span> Blaze</a>
    </div>
</nav>
  <div class='blaze-header'>
  <div class="text-center" style="color:orange; font-size:90px; margin-top:20px"><span class="glyphicon glyphicon-fire"></span></div>
  <h1 class='text-center'>Blaze</h1>
  <br />
  <br />
  </div>
  <div class="container site-api-key-form" style="max-width:320px;">
        <input type="text" class="form-control" id="blaze-api-key-field" placeholder="Site API key" style="text-align:center">
        <br />
        <button type="submit" class="btn btn-primary blaze-fetch-items button" style="width:100%">Fetch Answers</button>
  </div>
  <table class="col-md-offset-2">

  </table>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>