@extends('layouts.master')

@section('title','套版-後台管理系統')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Insert Profile</h4>
                            </div>
                            <div class="content">
                                @if($errors->has('msg'))
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center text-danger">
                                            {!! $errors->first('msg') !!}
                                        </div>
                                    </div>
                                @elseif(Session::has('success'))
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center text-danger">
                                            {!! Session::get('success') !!}
                                        </div>
                                    </div>
                                @endif
                                
                                <form method="POST" action="{{ action('MemberController@postInsertMember') }}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-wd btn-default" onclick="history.back()">
                                        <span class="btn-label">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        Back
                                    </button>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Insert Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
@stop
