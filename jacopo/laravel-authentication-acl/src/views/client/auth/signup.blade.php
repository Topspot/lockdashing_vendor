@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
User Signup
@stop
@section('content')
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="<?php echo URL::to('/'); ?>/images/Lookdashinglogo400.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<div class="content">
      <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif
	<!-- BEGIN REGISTRATION FORM -->
	{{Form::open(["action" => 'Jacopo\Authentication\Controllers\UserController@postSignup', "method" => "POST", "id" => "user_signup"])}}
                    {{-- Field hidden to fix chrome and safari autocomplete bug --}}
                    {{Form::password('__to_hide_password_autocomplete', ['class' => 'hidden'])}}
		<h3>Sign Up</h3>
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			{{Form::text('first_name', '', ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'First Name', 'required', 'autocomplete' => 'off'])}}
                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                </div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			{{Form::text('last_name', '', ['id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Last Name', 'required', 'autocomplete' => 'off'])}}
                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                </div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			{{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off'])}}
                        <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			{{Form::password('password', ['id' => 'password1', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off'])}}
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			{{Form::password('password_confirmation', ['class' => 'form-control', 'id' =>'password2', 'placeholder' => 'Confirm password', 'required'])}}
		</div>
<!--		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc"/> I agree to the <a href="#">
			Terms of Service </a>
			& <a href="#">
			Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>-->
		<div class="form-actions">
                     {{link_to_action('Jacopo\Authentication\Controllers\AuthController@getClientLogin','Back',array(),array('class' => 'btn btn-default', 'id' => 'register-back-btn'))}}
			<!--<button type="button" id="register-back-btn" class="btn btn-default">Back</button>-->
			<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
 </div>
<!--
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">Please sign up for {{Config::get('laravel-authentication-acl::app_name')}}</h3>
                </div>
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif
                <div class="panel-body">
                    {{Form::open(["action" => 'Jacopo\Authentication\Controllers\UserController@postSignup', "method" => "POST", "id" => "user_signup"])}}
                    {{-- Field hidden to fix chrome and safari autocomplete bug --}}
                    {{Form::password('__to_hide_password_autocomplete', ['class' => 'hidden'])}}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        {{Form::text('first_name', '', ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'First Name', 'required', 'autocomplete' => 'off'])}}
                                    </div>
                                    <span class="text-danger">{{$errors->first('first_name')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        {{Form::text('last_name', '', ['id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Last Name', 'required', 'autocomplete' => 'off'])}}
                                    </div>
                                    <span class="text-danger">{{$errors->first('last_name')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off'])}}
                            </div>
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        {{Form::password('password', ['id' => 'password1', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off'])}}
                                    </div>
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        {{Form::password('password_confirmation', ['class' => 'form-control', 'id' =>'password2', 'placeholder' => 'Confirm password', 'required'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <div id="pass-info"></div>
                              </div>
                            </div>

                            {{-- Captcha validation --}}
                            @if(isset($captcha) )
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span id="captcha-img-container">
                                            @include('laravel-authentication-acl::client.auth.captcha-image')
                                        </span>
                                        <a id="captcha-gen-button" href="#" class="btn btn-small btn-info margin-left-5"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                                        {{Form::text('captcha_text',null, ['class'=> 'form-control', 'placeholder' => 'Fill in with the text of the image', 'required', 'autocomplete' => 'off'])}}
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('captcha_text')}}</span>
                            </div>
                            @endif
                        </div>
                        <input type="submit" value="Register" class="btn btn-info btn-block">
                    </form>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                        {{link_to_action('Jacopo\Authentication\Controllers\AuthController@getClientLogin','Already have an account? Login here')}}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

  <script>
    $(document).ready(function() {
      //------------------------------------
      // password checking
      //------------------------------------
      var password1 		= $('#password1'); //id of first password field
      var password2		= $('#password2'); //id of second password field
      var passwordsInfo 	= $('#pass-info'); //id of indicator element

      passwordStrengthCheck(password1,password2,passwordsInfo);

      //------------------------------------
      // captcha regeneration
      //------------------------------------
      $("#captcha-gen-button").click(function(e){
      		e.preventDefault();

      		$.ajax({
              url: "/captcha-ajax",
              method: "POST"
            }).done(function(image) {
              $("#captcha-img-container").html(image);
            });
      	});
    });
  </script>
@stop