<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- <link href="{{ asset('css/dashboard.css')}}"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  @section('head')
  @show


  <style>
    a{
      color: black;
    }
    #navbarSupportedContent a:hover{
      color: black;
    }
    #loginBtn {
      border: 1px solid black !important;
    }
  </style>
</head>

<body>
  <nav style="background-color: #fefefe !important; padding: 0; justify-content: space-between; margin-bottom : -10px"
    class="navbar navbar-expand-lg">
    <nav style="display: contents; padding: 0; justify-content: space-between; margin: 0;"
      class="navbar navbar-expand-lg">
      <div style="display: flex; flex-direction: row; margin-inline-end: auto;">

        <a style="padding: 0; margin: 0; margin-left: 80px;" class="navbar-brand" href="#">
          <img style=" width: 70px; height: 70px; margin: auto; display: flex; flex-direction: row;"
            src="https://media.discordapp.net/attachments/651415548965421086/768396585121611776/IMG-8527.PNG?width=369&height=369">
        </a>
        
        <nav class="navbar navbar-expand-lg" style="font-family:Roboto;font-size: large;margin-top:5px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li> <br>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" style="margin-left:20px;">
                  Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/burger/">Burgers</a>
                  <a class="dropdown-item" href="/pizza/">Pizza</a>
                  <a class="dropdown-item" href="/minuman/">Minuman</a>
                </div>
              </li> <br>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left:20px;">About</a>
              </li>
          </div>
      </div>
      <div style="width: fit-content; margin-right: 50px;" class="button">
        <a href="/login/">
          <button id="loginBtn" type="button" class="btn  btn-outline-dark">Login</button>
        </a>

      </div>
    </nav>
  </nav>
 @section('body')
 @show
</body>
</html>