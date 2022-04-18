<?php $page = "post"; ?>
@extends('dashboard.sample')
@section('content')

@if(Session::has("success"))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Success</strong> {{Session::get("success")}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(Session::has("error"))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Fail</strong> {{Session::get("error")}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<form action="{{url('addpost')}}" method="POST">
  @csrf
  <input type="hidden"  name="postername" value="{{Auth::user()->name}}">
  <div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-12 mb-2">
        <h2>Add New Post Here</h2>
    </div>
  </div>

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Post Title</span>
                    </div>
                    <input type="text" name="title" class="form-control">
                  </div>
                
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Write 
                <small>Your Post here</small>
              </h3>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="form-group">
              <textarea class="form-control" name="messege" rows="7"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-2">Add</button>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

</form>


@stop