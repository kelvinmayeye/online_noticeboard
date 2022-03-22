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
            <img src="{{url('img/noti_png.png')}}" alt=""/>
            <h3>Welcome to online notice board</h3>
            <p>Get instance notice to your mobile phone through your email and phone number</p>
            <a href="{{url('login')}}"><input type="button" name="" value="Login"/></a><br/>
        </div>
    <div class="col-md-9 register-right">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Staff</a>
            </li>
        </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="{{url('register')}}" method="POST">
                @csrf
            <h3 class="register-heading">Student Registration Form</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="reg_number" placeholder="Registration Number" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name"  />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" id="myInput" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="c_password"  placeholder="Confirm Password" />
                    </div>
                    <div class="form-group">
                        <div class="maxl">
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="male" checked>
                                <span> Male </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="female">
                                <span>Female </span> 
                            </label>
                            
                        </div>
                        <input type="checkbox"  onclick="showPassword()">&nbsp;Show Password
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" minlength="10" maxlength="10" name="phone_no" class="form-control" placeholder="Your Phone"/>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="sec_qn">
                            <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                            <option>What is your Favorite Food?</option>
                            <option>What is best day of the week?</option>
                            <option>What is your Pet Name?</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sec_answer" placeholder="Enter Your Answer"/>
                    </div>
                    <input type="submit" class="btnRegister"  value="Register"/>
                </div>
            </div>
            </form>
        </div>
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="{{url('register_staff')}}" method="POST">
                @csrf
            <h3  class="register-heading">Staffs Registration</h3>
            <div class="row register-form">
                <div class="col-md-6">
                <div class="form-group">
                        <input type="text" class="form-control" name="reg_number" placeholder="Registration Number" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" maxlength="10" minlength="10" class="form-control" name="phone_no" placeholder="Phone " value="" />
                    </div>
                    <div class="form-group">
                        <div class="maxl">
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="male" checked>
                                <span> Male </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="female">
                                <span>Female </span> 
                            </label>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="c_password" placeholder="Confirm Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="position" value="leader" disabled />
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="sec_qn">
                            <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                            <option>What is your Favorite Food?</option>
                            <option>What is best day of the week?</option>
                            <option>What is your Pet Name?</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sec_answer" placeholder="Enter Your Answer"/>
                    </div>
                        <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
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