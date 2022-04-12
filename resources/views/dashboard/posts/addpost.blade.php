@extends('dashboard.sample')
@section('content')

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
                    <input type="text" class="form-control">
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
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="post" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->


      <!-- jQuery 3 -->
      <script src="{{url('js_scripts/jquery.min.js')}}"></script>

      <!-- CK Editor -->
      <script src="{{url('js_scripts/ckeditor/ckeditor.js')}}"></script>

      <script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('post')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script>


@stop