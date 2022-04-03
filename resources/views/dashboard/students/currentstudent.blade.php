@extends('dashboard.sample')
@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-12 mb-2">
        <h2>All Current Students</h2>
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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($leader as $leader)
                            <tr>
                                <td>{{$leader->reg_number}}</td>
                                <td>{{$leader->name}}</td>
                                <td>{{$leader->gender}}</td>
                                <td>{{$leader->email}}</td>
                                <td>{{$leader->phone_number}}</td>
                                <td class="">{{$leader->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop