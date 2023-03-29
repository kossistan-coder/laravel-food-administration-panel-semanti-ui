<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('/dist/semantic.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/style.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/lineIcons/lineicons.css')}}">
    <title>Document</title>
</head>
<style>
      body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</style>
<body>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui teal image header">
            <img src="{{asset('/dist/images/semantic.png')}}" class="image">
            <div class="content">
              Log-in to your account
            </div>
          </h2>
          <form class="ui large form">
            <div class="ui stacked segment">
              <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input type="text" name="email" placeholder="E-mail address">
                </div>
              </div>
              <div class="field">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input type="password" name="password" placeholder="Password">
                </div>
              </div>
              <a class="ui fluid large teal submit button" href="http://localhost:8000/overview">
                Login
            </a>
            </div>
      
            <div class="ui error message"></div>
      
          </form>
      
          <div class="ui message">
            New to us? <a href="#">Sign Up</a>
          </div>
        </div>
      </div>
</body>
</html>