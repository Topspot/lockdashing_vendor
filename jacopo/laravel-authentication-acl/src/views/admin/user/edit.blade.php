@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: edit user
@stop

@section('content')

<div class="row">
    <?php // print_r($brands);exit();?>
    <div class="col-md-12">
        <?php // print_r(App::make('authenticator')->getLoggedUser());?>
       
        {{-- successful message --}}
        <?php $message = Session::get('message'); ?>
        @if( isset($message) )
        <div class="alert alert-success">{{$message}}</div>
        @endif
        @if($errors->has('model') )
            <div class="alert alert-danger">{{$errors->first('model')}}</div>
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title bariol-thin">{{isset($user->id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-user"></i> Create'}} user</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <a href="{{URL::action('Jacopo\Authentication\Controllers\UserController@postEditProfile',["user_id" => $user->id])}}" class="btn btn-info pull-right" {{! isset($user->id) ? 'disabled="disabled"' : ''}}><i class="fa fa-user"></i> Edit profile</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h4>Login data</h4>
                    {{Form::model($user, [ 'url' => URL::action('Jacopo\Authentication\Controllers\UserController@postEditUser')] ) }}
                    {{-- Field hidden to fix chrome and safari autocomplete bug --}}
                    {{Form::password('__to_hide_password_autocomplete', ['class' => 'hidden'])}}
<!--                    {{ Form::hidden('user_roles_id', 2 , array('id' => 'user_roles_id')) }}
                    {{ Form::hidden('brand_id', 0, array('id' => 'brand_id') ) }}-->
                    <!-- email text field -->
                    <div class="form-group">
                        {{Form::label('email','Email: *')}}
                        {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'user email', 'autocomplete' => 'off'])}}
                    </div>
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    <!-- password text field -->
                    <div class="form-group">
                        {{Form::label('password',isset($user->id) ? "Change password: " : "Password: ")}}
                        {{Form::password('password', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => ''])}}
                    </div>
                    <span class="text-danger">{{$errors->first('password')}}</span>
                    <!-- password_confirmation text field -->
                    <div class="form-group">
                        {{Form::label('password_confirmation',isset($user->id) ? "Confirm change password: " : "Confirm password: ")}}
                        {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '','autocomplete' => 'off'])}}
                    </div>
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                    <?php  if(Sentry::getUser()->id == 1){ ?>
                    <div class="form-group">
                        {{Form::label("activated","User active: ")}}
                        {{Form::select('activated', ["1" => "Yes", "0" => "No"], (isset($user->activated) && $user->activated) ? $user->activated : "0", ["class"=> "form-control"] )}}
                    </div>
                    <div class="form-group">
                        {{Form::label("banned","Banned: ")}}
                        {{Form::select('banned', ["1" => "Yes", "0" => "No"], (isset($user->banned) && $user->banned) ? $user->banned : "0", ["class"=> "form-control"] )}}
                    </div>
                     <?php }else{ ?>
                    {{Form::select('activated', ["1" => "Yes", "0" => "No"], (isset($user->activated) && $user->activated) ? $user->activated : "0", ["class"=> "form-control",'style'=>'display:none;'] )}}
                     {{Form::select('banned', ["1" => "Yes", "0" => "No"], (isset($user->banned) && $user->banned) ? $user->banned : "0", ["class"=> "form-control",'style'=>'display:none;'] )}}
                    <?php } ?>
                    {{Form::hidden('id')}}
                    {{Form::hidden('form_name','user')}}
                    <?php  if(Sentry::getUser()->id == 1){ ?>
                    <a href="{{URL::action('Jacopo\Authentication\Controllers\UserController@deleteUser',['id' => $user->id, '_token' => csrf_token()])}}" class="btn btn-danger pull-right margin-left-5 delete">Delete user</a>
                   <?php } ?>
                    {{Form::submit('Save', array("class"=>"btn btn-info pull-right "))}}
                    {{Form::close()}}
                    </div>
                 <?php  if(Sentry::getUser()->id == 1){ ?>
                    <div class="col-md-6 col-xs-12">
                        <h4><i class="fa fa-users"></i> Groups</h4>
                        @include('laravel-authentication-acl::admin.user.groups')

                        {{-- group permission form --}}
                        <h4><i class="fa fa-lock"></i> Permission</h4>
                        {{-- permissions --}}
                        @include('laravel-authentication-acl::admin.user.perm')
                    </div>
                 <?php } ?>
                </div>
            </div>
      </div>
</div>
@stop

@section('footer_scripts')
<script>
    $(".delete").click(function(){
        return confirm("Are you sure to delete this item?");
    });
</script>
@stop