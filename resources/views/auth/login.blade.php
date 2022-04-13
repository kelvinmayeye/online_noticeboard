@extends('sample')
@section('content')
<div class="container register">
    @if (Session::has("fail"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>warning</strong> {{Session::get("fail")}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-3 register-left">
            <a href="{{url('/')}}"><img src="{{url('img/noti_png.png')}}" alt=""/></a>
            <h3>Welcome to online notice board</h3>
            <p>Get instance notice to your mobile phone through your email and phone number
                <br><a href="{{url('/')}}"> <input type="submit" value="Register"/> </a>
            </p>
            
        </div>
    <div class="col-md-9 register-right">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <form action="{{url('dashboard')}}" method="POST">
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
@stop