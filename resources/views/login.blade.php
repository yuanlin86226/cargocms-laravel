@extends('layouts.master_login')

@section('title','登入畫面')

@section('content')
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">


                        <form method="POST" action="{{ action('AuthController@postLogin') }}">
                            
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->

                        {{ csrf_field() }}
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                
                                @if($errors->has('msg'))
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center text-danger">
                                            {!! $errors->first('msg') !!}
                                        </div>
                                    </div>
                                @endif

                                <div class="content">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input name='email' type="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name='password' type="password" placeholder="Password" class="form-control">
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="checkbox">

                                            <input name="remember" type="checkbox" data-toggle="checkbox">
                                            Remember me
                                        </label>    
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                                
                        </form>
                                
                    </div>                    
                </div>
            </div>
        </div>
@stop