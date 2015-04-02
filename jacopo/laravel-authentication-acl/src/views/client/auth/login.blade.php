@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
User login
@stop
@section('content')
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="images/Lookdashinglogo400.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
            <?php $message = Session::get('message'); ?>
            @if( isset($message) )
            @if( !empty($message) )
            <div class="alert alert-success">{{$message}}</div>
            @endif
            @endif
            @if($errors && ! $errors->isEmpty() )
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
             {{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postClientLogin"), 'method' => 'post') )}}
		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			{{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off'])}}
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			  {{Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off'])}}
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase">Login</button>
                             
                {{Form::checkbox('remember')}}
                    {{Form::label('remember','Remember me',array('class' => 'rememberme check'))}}
			{{link_to_action('Jacopo\Authentication\Controllers\AuthController@getReminder','Forgot password?', array(), array('class' => 'forget-password'))}}
		</div>

		<div class="create-account">
			<p>
				<!--<a href="/user/signup">Create an account</a>-->
                                <a href="{{URL::action('Jacopo\Authentication\Controllers\UserController@signup')}}"><i class="fa fa-sign-in"></i> Signup</a>
			</p>
		</div>
	{{Form::close()}}
	<!-- END LOGIN FORM -->
<!--            <div class="panel-body">
                {{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postClientLogin"), 'method' => 'post') )}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off'])}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                {{Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off'])}}
                            </div>
                        </div>
                    </div>
                </div>
                {{Form::label('remember','Remember me')}}
                {{Form::checkbox('remember')}}
                <input type="submit" value="Login" class="btn btn-info btn-block">
                {{Form::close()}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
        {{link_to_action('Jacopo\Authentication\Controllers\AuthController@getReminder','Forgot password?')}}
        or <a href="{{URL::action('Jacopo\Authentication\Controllers\UserController@signup')}}"><i class="fa fa-sign-in"></i> Signup here</a>
            </div>
        </div>
            </div>-->
        </div>
@stop