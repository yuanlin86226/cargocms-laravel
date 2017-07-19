@extends('layouts.admin_login')

@section('title','登入畫面')

@section('content')
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">

                        <form method="POST" action="{{ action('AuthController@login') }}">
                        
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
                                        <label>帳號</label>
                                        <input name="username" type="text" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>密碼</label>
                                        <input name='password' type="password" placeholder="Password" class="form-control">
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="checkbox">

                                            <input name="remember" type="checkbox" data-toggle="checkbox">
                                            記住帳號名稱
                                        </label>    
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-default btn-wd">登入</button>
                                </div>
                            </div>
                                
                        </form>
                                
                    </div>                    
                </div>
            </div>
        </div>
@stop