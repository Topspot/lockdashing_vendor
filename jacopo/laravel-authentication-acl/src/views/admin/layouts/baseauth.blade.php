{{-- Layout base used for authentication --}}
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    {{ HTML::style('packages/jacopo/laravel-authentication-acl/css/bootstrap.min.css') }}
    {{ HTML::style('packages/jacopo/laravel-authentication-acl/css/style.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
    {{ HTML::style('packages/jacopo/laravel-authentication-acl/css/fonts.css') }}
   
    
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/global/plugins/simple-line-icons.min.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/global/plugins/uniform/css/uniform.default.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/admin/pages/css/login.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/global/css/components.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/global/css/plugins.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/admin/layout/css/layout.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/admin/layout/css/darkblue.css') }}
     {{ HTML::style('packages/jacopo/laravel-authentication-acl/assets/admin/layout/css/custom.css') }}

    
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    @yield('head_css')
    {{-- End head css --}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <body  class="login">
        
        {{-- content --}}
        <!--<div class="container">-->
            @yield('container')
        <!--</div>-->

        {{-- Start footer scripts --}}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery-1.10.2.min.js') }}
        
        <!--{{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/jquery.min.js') }}-->    
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/jquery-migrate.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/jquery.blockui.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/jquery.cokie.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/uniform/jquery.uniform.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/global/scripts/metronic.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/admin/layout/scripts/layout.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/admin/layout/scripts/demo.js') }}
        {{ HTML::script('packages/jacopo/laravel-authentication-acl/assets/admin/pages/scripts/login.js') }}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Login.init();
	Demo.init();
});
</script>
        </script>
    </body>
</html>
