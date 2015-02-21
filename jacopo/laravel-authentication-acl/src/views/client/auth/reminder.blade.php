@extends('laravel-authentication-acl::client.layouts.base')
@section ('title')
    Password recovery
@stop
@section('content')

<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="/images/Lookdashinglogo400.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<div class="content">
            @if($errors && ! $errors->isEmpty() )
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            @endif
            	<!-- BEGIN FORGOT PASSWORD FORM -->
	{{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postReminder"), 'method' => 'post') )}}
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			{{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your account email', 'required', 'autocomplete' => 'off'])}}
		</div>
		<div class="form-actions">
                    
			<!--<button type="button" id="back-btn" class="btn btn-default">Back</button>-->
                        <button type="submit" class="btn btn-success uppercase pull-right">Submit</button></br>
<!--                        <p> Login as</p>
                    <a id="back-btn" class="btn btn-default" href="/admin/login">Admin</a>
                    <a id="back-btn" class="btn btn-default" href="/login">User</a>-->
		</div>
                <div class="create-account">
                    <p style="color: #fff;"> Login as</p>
                    <a id="back-btn" class="btn btn-default" style="width: 100px; margin-right: 100px;" href="/admin/login">Admin</a>
                    
                    <a id="back-btn" class="btn btn-default"  style="width: 100px;" href="/login">User</a>
		</div>
	 {{Form::close()}}
  </div>       
	<!-- END FORGOT PASSWORD FORM -->
<!--            <div class="panel-body">
                {{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postReminder"), 'method' => 'post') )}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {{Form::label('email','Email:')}}
                            <div class="input-group" id="password-field">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your account email', 'required', 'autocomplete' => 'off'])}}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Recover" class="btn btn-info btn-block">
                {{Form::close()}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                        <a href="{{URL::Action('Jacopo\Authentication\Controllers\AuthController@getClientLogin')}}"><i class="fa fa-arrow-left"></i> Back to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
@stop