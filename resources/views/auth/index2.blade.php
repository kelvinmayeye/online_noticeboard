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

    <title>Online Notice-Board</title>

    <style>
input[type=text],input[type=password]{
  width: 100%;
  padding: 8px 16px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #0050e4;
  color: white;
  padding: 10px 16px;
  margin: 8px 0;
  border: none;
  
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ffb84e;
}
form{
    width: 370px;
}
label{
    font-weight: 600;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   padding: 16px;
   width: 100%;
   color: white;
   text-align: center;
}

    </style>

  </head>
  <body>
    <div class="row">
        <div class="col-lg-7 pt-5">
            <img src="https://us.123rf.com/450wm/axsimen/axsimen1604/axsimen160400120/55913562-email-message-concept-new-incoming-message-sms-hand-holding-envelope-letter-delivery-of-messages-sms.jpg?ver=6" class="img-fluid mx-auto d-block" alt="image">
        </div>
        
            <div class="m-2 p-3 pt-5">
                <form method="POST" action="{{url('dashboard')}}" class="mx-auto">
                  @if (Session::has("fail"))
                  <div class="">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>warning</strong> {{Session::get("fail")}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                     @endif
                  @csrf
                    <h2>Login</h2>
                    <label for="fname">Reg number</label>
                    <input type="text" name="reg_number">
                
                    <label for="lname">Password</label>
                    <input type="password" name="password">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          show password
                        </label>
                      </div>
                                  
                    <input type="submit" value="Login"><br />
                    <label for="">Do you have an account? <a href="{{url('/')}}" >Register</a></label>
                  </form>
            </div>
        </div>

    </div>

    <div class="footer bg-primary">
      <p>Copyright © 2022. All rights reserved.</p>
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