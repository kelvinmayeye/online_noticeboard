@extends('dashboard.sample')
@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-12 mb-2">
        <h2>All Finished Students</h2>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gv">
                    <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                        <thead>
                            <tr>
                                <th>Reg number</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Phone number</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($finstudent as $finstudent)
                            <tr>
                                <td>{{$finstudent->reg_number}}</td>
                                <td>{{$finstudent->name}}</td>
                                <td>{{$finstudent->gender}}</td>
                                <td>{{$finstudent->email}}</td>
                                <td>{{$finstudent->phone_number}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop