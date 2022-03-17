<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css style -->
    <link rel="stylesheet" href="{{url('css/style.css') }}">

    <title>Online Notice-Board | Login</title>
    

  </head>
  <body>
<div class="container register">
    @if (Session::has("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Received</strong> {{Session::get("success")}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-md-3 register-left">
            <a href="{{url('/')}}"><img src="{{url('img/noti_png.png')}}" alt=""/></a>
            <h3>Welcome to online notice board</h3>
            <p>Get instance notice to your mobile phone through your email and phone number</p>
            <!-- <input type="submit" name="" value="Login"/><br/> -->
        </div>
    <div class="col-md-9 register-right">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="{{url('')}}" method="POST">
                @csrf
            <h3 class="register-heading">Student Login</h3>
            <div class="row register-form mx-auto">
                <div class="col-md-12 px-5">
                    <div class="form-group">
                        <input type="text" class="form-control" name="reg_number" placeholder="Registration Number" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control mb-3" name="password" placeholder="Password" id="myInput" />
                        <input type="checkbox"  onclick="showPassword()">&nbsp;Show Password
                    </div>
                    <input type="submit" class="btnRegister" style="width: 35%;margin-top: 6%;" value="Login"/>
                </div>
                
                    
                
            </div>
            </form>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <script type="text/javascript">
        //show password
  function showPassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</html>