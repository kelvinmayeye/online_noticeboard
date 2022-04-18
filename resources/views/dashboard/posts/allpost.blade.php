<?php $page = "allpost"; ?>
@extends('dashboard.sample')
@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-12 mb-2">
        <h2>All Post</h2>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gv">
                    <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Title</th>
                                <th>Messege</th>
                                <th>Post by</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($post as $post)
                            <tr>
                                <td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->messege}}</td>
                                <td>{{$post->post_by}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop