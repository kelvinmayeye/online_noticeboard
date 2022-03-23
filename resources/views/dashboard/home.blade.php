@extends('dashboard.sample')
@section('content')
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Posts</p>
                    <h5 class="font-weight-bolder">
                      10
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-success font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="righticon text-center rounded-circle">
                    <i class="fas fa-upload" aria-hidden="true" style="top: 13px;position: relative;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Sent Emails</p>
                    <h5 class="font-weight-bolder">
                      2,300
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="righticon text-center rounded-circle">
                    <i class="fas fa-envelope-square" aria-hidden="true" style="top: 13px;position: relative;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Sent sms</p>
                    <h5 class="font-weight-bolder">
                      2,300
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="righticon text-center rounded-circle">
                    <i class="fas fa-mobile" aria-hidden="true" style="top: 13px;position: relative;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Failed Mails</p>
                    <h5 class="font-weight-bolder">
                      24
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="righticon text-center rounded-circle">
                    <i class="fas fa-comment-slash" aria-hidden="true" style="top: 13px;position: relative;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
</div>
@stop