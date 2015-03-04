{{-- Layout base admin panel --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">


        {{ HTML::style('packages/jacopo/laravel-authentication-acl/css/bootstrap.min.css') }}
        <!--{{ HTML::style('packages/jacopo/laravel-authentication-acl/css/style.css') }}-->
        <!--{{ HTML::style('packages/jacopo/laravel-authentication-acl/css/baselayout.css') }}-->
        {{ HTML::style('packages/jacopo/laravel-authentication-acl/css/fonts.css') }}
        {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}

        <!-- basic styles -->

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/main-style.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!-- page specific plugin styles -->

        <link rel="stylesheet" href="/assets/css/jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="/assets/css/chosen.css" />
        <link rel="stylesheet" href="/assets/css/datepicker.css" />
        <link rel="stylesheet" href="/assets/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="/assets/css/daterangepicker.css" />
        <link rel="stylesheet" href="/assets/css/colorpicker.css" />

        <!-- fonts -->

        <link rel="stylesheet" href="/assets/css/ace-fonts.css" />

        <!-- ace styles -->

        <link rel="stylesheet" href="/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="/assets/css/ace-skins.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->

        <script src="/assets/js/ace-extra.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-3">
        <?php // print_r(Sentry::getUser()->id);?>
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
try {
    ace.settings.check('navbar', 'fixed')
} catch (e) {
}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="/admin/users/dashboard" class="navbar-brand" style="margin-left: -15px !important;">
                        <img  src="/images/smalllookdashinglogo190.png" alt="Jason's Photo" />


                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                              
                                <!--<img class="nav-user-photo" src="<?php echo Sentry::getUser()->image; ?>" alt="Jason's Photo" />-->
                                <span class="user-info">
                                  <?php echo App::make('authenticator')->getLoggedUser()->getLogin(); ?>
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="/admin/users/profile/edit?user_id=<?php echo Sentry::getUser()->id; ?>">
                                        <i class="icon-cog"></i>
                                        Profile
                                    </a>
                                </li>

                                <li>
                           
                                   <a href="/admin/users/edit?id=<?php echo Sentry::getUser()->id; ?>" >
                                        <i class="icon-user"></i>
                                        Account
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="/user/logout">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                    </script>


                    
                    <ul class="nav nav-list">
                         <?php
                         
                         if(Session::get('currentActiveMenu') == '/admin/users/dashboard'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>     
                            <a href="/admin/users/dashboard" class="knowclick">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text">Dashboard </span>
                            </a>
                        </li>
                        <?php if (Sentry::getUser()->id == 1) {
                          
                            ?>
                                <?php
                         if(Session::get('currentActiveMenu') == '/admin/users/list' || Session::get('currentActiveMenu') == '/admin/users/edit'){
                         ?>   
                        <li class="active open">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-list"></i>
                                    <span class="menu-text"> Users </span>

                                    <b class="arrow icon-angle-down"></b>
                                </a>

                                <ul class="submenu">
                                    <?php
                         if(Session::get('currentActiveMenu') == '/admin/users/list'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                        <a href="/admin/users/list" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            List
                                        </a>
                                    </li>

                                   <?php
                         if(Session::get('currentActiveMenu') == '/admin/users/edit'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                        <a href="/admin/users/edit" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            Add 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                    <?php
                         if(Session::get('currentActiveMenu') == '/admin/groups/list' || Session::get('currentActiveMenu') == '/admin/groups/edit'){
                         ?>   
                        <li class="active open">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-list"></i>
                                    <span class="menu-text"> Groups </span>

                                    <b class="arrow icon-angle-down"></b>
                                </a>

                                <ul class="submenu">
                                 <?php   if(Session::get('currentActiveMenu') == '/admin/groups/list'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                        <a href="/admin/groups/list" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            List
                                        </a>
                                    </li>

                                        <?php   if(Session::get('currentActiveMenu') == '/admin/groups/edit'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>
                                        <a href="/admin/groups/edit" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            Add
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                       <?php
                         if(Session::get('currentActiveMenu') == '/admin/permissions/list' || Session::get('currentActiveMenu') == '/admin/permissions/edit'){
                         ?>   
                        <li class="active open">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>  
                                <a href="#" class="dropdown-toggle">
                                    <i class="icon-list"></i>
                                    <span class="menu-text"> Permissions </span>

                                    <b class="arrow icon-angle-down"></b>
                                </a>

                                <ul class="submenu">
                                                 <?php   if(Session::get('currentActiveMenu') == '/admin/permissions/list'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>
                                        <a href="/admin/permissions/list" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            List
                                        </a>
                                    </li>

                                              <?php   if(Session::get('currentActiveMenu') == '/admin/permissions/edit'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>
                                        <a href="/admin/permissions/edit" class="knowclick">
                                            <i class="icon-double-angle-right"></i>
                                            Add
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                         if(Session::get('currentActiveMenu') == '/admin/brands'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>    
                       
                                <a href="/admin/brands" class="knowclick">
                                    <i class="icon-dashboard"></i>
                                    <span class="menu-text"> Brands </span>
                                </a>
                            </li>
                        <?php   if(Session::get('currentActiveMenu') == '/admin/categories'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>    
                                <a href="/admin/categories" class="knowclick">
                         
                                    <i class="icon-dashboard"></i>
                                    <span class="menu-text"> Category </span>
                                </a>
                            </li>
                            
                           <?php   if(Session::get('currentActiveMenu') == '/admin/populars'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?>    
                                <a href="/admin/populars" class="knowclick">
                                    <i class="icon-dashboard"></i>
                                    <span class="menu-text"> Popular Categories </span>
                                </a>
                            </li>
                        <?php } ?>
                         <?php   if(Session::get('currentActiveMenu') == '/admin/products'){
                         ?>   
                        <li class="active">
                         <?php }else{ ?> 
                        <li>
                         <?php } ?> 
                            <a href="/admin/products" class="knowclick">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text"> Products </span>
                            </a>
                        </li>

                    </ul><!-- /.nav-list -->

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'collapsed')
                        } catch (e) {
                        }
                    </script>
                </div>

                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- .breadcrumb -->

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="icon-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- #nav-search -->
                    </div>

                    <div class="page-content">
                        @yield('content');
                    </div><!-- /.page-content -->
                </div><!-- /.main-content -->

                <div class="ace-settings-container" id="ace-settings-container">
                    <!--                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                            <i class="icon-cog bigger-150"></i>
                                        </div>
                    
                                        <div class="ace-settings-box" id="ace-settings-box">
                                            <div>
                                                <div class="pull-left">
                                                    <select id="skin-colorpicker" class="hide">
                                                        <option data-skin="default" value="#438EB9">#438EB9</option>
                                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                                    </select>
                                                </div>
                                                <span>&nbsp; Choose Skin</span>
                                            </div>
                    
                                            <div>
                                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                            </div>
                    
                                            <div>
                                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                            </div>
                    
                                            <div>
                                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                            </div>
                    
                                            <div>
                                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                            </div>
                    
                                            <div>
                                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                                <label class="lbl" for="ace-settings-add-container">
                                                    Inside
                                                    <b>.container</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div> /#ace-settings-container -->
                </div><!-- /.main-container-inner -->

                <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                    <i class="icon-double-angle-up icon-only bigger-110"></i>
                </a>
            </div><!-- /.main-container -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger delete-part" data-dismiss="modal">Delete</button>
                            <!--                    <a class="btn btn-danger" href="">
                                                                   Delete                                             
                                                 </a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--{{ HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery-1.10.2.min.js') }}-->
            <!-- basic scripts -->

            <!--[if !IE]> -->

            <script type="text/javascript">
                window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
            </script>

            <!-- <![endif]-->

            <!--[if IE]>
    <script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->

            <script type="text/javascript">
                if ("ontouchend" in document)
                    document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="/assets/js/bootstrap.min.js"></script>
            <script src="/assets/js/typeahead-bs2.min.js"></script>
            <script src="/js/jquery.validate.js"></script>

            <!-- page specific plugin scripts -->

            <!--[if lte IE 8]>
              <script src="assets/js/excanvas.min.js"></script>
            <![endif]-->

            <script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
            <script src="/assets/js/chosen.jquery.min.js"></script>
            <script src="/assets/js/fuelux/fuelux.spinner.min.js"></script>
            <script src="/assets/js/date-time/bootstrap-datepicker.min.js"></script>
            <script src="/assets/js/date-time/bootstrap-timepicker.min.js"></script>
            <script src="/assets/js/date-time/moment.min.js"></script>
            <script src="/assets/js/date-time/daterangepicker.min.js"></script>
            <script src="/assets/js/bootstrap-colorpicker.min.js"></script>
            <script src="/assets/js/jquery.knob.min.js"></script>
            <script src="/assets/js/jquery.autosize.min.js"></script>
            <script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
            <script src="/assets/js/jquery.maskedinput.min.js"></script>
            <script src="/assets/js/bootstrap-tag.min.js"></script>
            <script src="/assets/js/jquery.slimscroll.min.js"></script>
            <script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
            <script src="/assets/js/jquery.sparkline.min.js"></script>
            <script src="/assets/js/flot/jquery.flot.min.js"></script>
            <script src="/assets/js/flot/jquery.flot.pie.min.js"></script>
            <script src="/assets/js/flot/jquery.flot.resize.min.js"></script>

            <!-- ace scripts -->

            <script src="/assets/js/ace-elements.min.js"></script>
            <script src="/assets/js/ace.min.js"></script>

            <!-- inline scripts related to this page -->

            <script type="text/javascript">
                $(document).ready(function () {
                    $('.nav-list > li').removeClass('active');
                    
                    var active=$('.page-content h1').html();
                    
                    if (active == 'Categories'){                       
                    $('a[href$="/admin/categories"]').closest('li').addClass('active');
                    }else if(active == 'Products'){
                    $('a[href$="/admin/products"]').closest('li').addClass('active');
                    }else if(active == 'Brands'){
                          $('a[href$="/admin/brands"]').closest('li').addClass('active');   
                    }else if(active == 'Popular Categories'){
                          $('a[href$="/admin/populars"]').closest('li').addClass('active');
                    }
                     var dashboard=$('.page-content h3').text();
                     if (dashboard == ' Dashboard'){                       
                    $('a[href$="/admin/users/dashboard"]').closest('li').addClass('active');
                    }
                   
                   var mul=$('.panel-heading h3').text();
                  
                    if(mul == ' Users User search'){                       
                    $('a[href$="/admin/users/list"]').closest('li').addClass('active');
                    $('a[href$="/admin/users/list"]').closest('li').parent().parent().addClass('active open');
                    }else if(mul == ' Create user'){
                        console.log('asdasd');
                    $('a[href$="/admin/users/edit"]').closest('li').addClass('active');
                    $('a[href$="/admin/users/edit"]').closest('li').parent().parent().addClass('active open');
                    }else if(mul == ' Groups Group search'){
                    $('a[href$="/admin/groups/list"]').closest('li').addClass('active');   
                    $('a[href$="/admin/groups/list"]').closest('li').parent().parent().addClass('active open');
                    }else if(mul == ' Create group'){
                    $('a[href$="/admin/groups/edit"]').closest('li').addClass('active');     
                    $('a[href$="/admin/groups/edit"]').closest('li').parent().parent().addClass('active open');
                    }else if(mul == ' Permissions'){
                    $('a[href$="/admin/permissions/list"]').closest('li').addClass('active');   
                     $('a[href$="/admin/permissions/list"]').closest('li').parent().parent().addClass('active open');
                    }else if(mul == ' Create permission'){
                    $('a[href$="/admin/permissions/edit"]').closest('li').addClass('active');
                    $('a[href$="/admin/permissions/edit"]').closest('li').parent().parent().addClass('active open');
                    }
//                    console.log(active);
//                   function getActive(url){
//                        var ajaxurl = '<?php echo URL::to('/'); ?>/admin/products/currentActiveMenu';
//                            jQuery.ajax({
//                                type: 'POST',
//                                data: {'url': url},
//                                url: ajaxurl,
//                                success: function () {
//                                    setTimeout(
//                                    function() 
//                                    {
//                                       location.reload();
//                                    }, 0001);    
//                               }
//                         });
//                   }
                     
//                       $('.knowclick').click(function(){
//                       var url=$(this).attr('href');
//                       
//                       var ajaxurl = '<?php echo URL::to('/'); ?>/admin/products/currentActiveMenu';
//                            jQuery.ajax({
//                                type: 'POST',
//                                data: {'url': url},
//                                url: ajaxurl,
//                                success: function (html) {
//                                    setTimeout(
//                                    function() 
//                                    {
//                                      console.log("hello");
//                                    }, 0001);    
//                               }
//                         });
//
//                    }); 
//                    
                    $('.featured-item').click(function () {
                        var check='';
                        if ($(this).is(':checked')) {
                              var check='yes'; 
                           
                        } else {
                             var check='no';
                           
                        }                        
                         var id = $(this).closest("tr").data("id");
                            var ajaxurl = '<?php echo URL::to('/'); ?>/admin/products/featuredItems/' + id;
                            jQuery.ajax({
                                type: 'GET',
                                 data: {'check': check},
                                url: ajaxurl,
                                success: function () {

                                }
                            });


                    });
                     $('.top-selling').click(function () {
                        var check='';
                        if ($(this).is(':checked')) {
                              var check='yes'; 
                           
                        } else {
                             var check='no';
                           
                        }                        
                         var id = $(this).closest("tr").data("id");
                            var ajaxurl = '<?php echo URL::to('/'); ?>/admin/products/topSell/' + id;
                            jQuery.ajax({
                                type: 'GET',
                                 data: {'check': check},
                                url: ajaxurl,
                                success: function () {

                                }
                            });


                    });
                });

                // validate signup form on keyup and submit
                var urlname = window.location.href;
                var type = urlname.split('?');


                $('.alert-success').delay(2000).fadeOut('fast');
                function openModal(part, id, title) {

                    $('#myModal').modal('show');
                    $('.modal-body').html(' Are you sure you want to delete ' + title + ' ?');
                    if (part == 'products') {
                        $('.modal-title').html('Delete Product');
                    } else if (part == 'brands') {
                        $('.modal-title').html('Delete Brand');
                    } else if (part == 'populars') {
                        $('.modal-title').html('Delete Popular Category');
                    } else {
                        $('.modal-title').html('Delete Category');
                    }
                    var ajaxurl = '<?php echo URL::to('/'); ?>/admin/' + part + '/destroy/' + id;
                    $('.delete-part').click(function () {

                        console.log(ajaxurl);
                        jQuery.ajax({
                            type: 'GET',
                            url: ajaxurl,
                            success: function () {
                                //                            $('.product-table tr').filter('[data-id=' + id + ']').remove();
                                if (type[1]) {
                                    window.location.assign("http://localhost:8000/admin/" + part + "?" + type[1]);
                                } else {
                                    window.location.assign("http://localhost:8000/admin/" + part);
                                }

                            }
                        });
                    });


                }

                //            console.log(type[1]);
                $('#selectall').click(function (event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function () { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"              
                        });
                    } else {
                        $('.checkbox1').each(function () { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                        });
                    }
                });
                function multipleDelete(part) {
                    if ($(".product-table input:checkbox:checked").length > 0) {
                        $('#myModal').modal('show');
                        $('.modal-body').html(' Are you sure you want to delete ?');
                        if (part == 'products') {
                            $('.modal-title').html('Delete Product');
                        } else if (part == 'brands') {
                            $('.modal-title').html('Delete Brand');
                            ;
                        } else if (part == 'populars') {
                            $('.modal-title').html('Delete Popular Category');
                        } else {
                            $('.modal-title').html('Delete Category');
                        }
                        var ajaxurl = '<?php echo URL::to('/'); ?>/admin/' + part + '/destroy/';
                        $('.delete-part').click(function () {
                            $('input[type=checkbox]').each(function () {
                                var sThisVal = (this.checked ? $(this).val() : "");
                                console.log(sThisVal);
                                if (sThisVal != "") {
                                    var id = $(this).closest("tr").data("id");
                                    var url = ajaxurl + id;
                                    console.log(url);
                                    jQuery.ajax({
                                        type: 'GET',
                                        url: url,
                                        success: function () {
                                            if (type[1]) {
                                                window.location.assign("http://localhost:8000/admin/" + part + "?" + type[1]);
                                            } else {
                                                window.location.assign("http://localhost:8000/admin/" + part);
                                            }
                                        }
                                    });

                                }
                            });

                        });

                    } else {
                        $('#myModal').modal('show');
                        $('.modal-body').html('Please select one of the product from the list.');
                        $('.modal-title').html('Note:');
                        $('.delete-part').hide();
                    }

                }

                var id = $(this).closest("tr").data("id");
                $("#products-form").validate({
                    rules: {
                        title: "required",
                        subtitle: "required",
                        price: {
                            required: true,
                            number: true
                        },
                        likes: {
                            required: true,
                            number: true
                        },
                        star: {
                            required: true,
                            number: true
                        },
                    },
                    messages: {
                        title: "Please enter your title",
                        subtitle: "Please enter your subtitle",
                        price: {
                            required: "Please enter a price",
                            number: "Must be a number"
                        },
                        likes: {
                            required: "Please enter a likes",
                            number: "Must be a number"
                        },
                        star: {
                            required: "Please enter a star",
                            number: "Must be a number"
                        },
                    }
                });
                $("#populars-form").validate({
                    rules: {
                        name: "required",
                        price: {
                            required: true,
                            number: true
                        },
                    },
                    messages: {
                        name: "Please enter your name",
                        price: {
                            required: "Please enter a price",
                            number: "Must be a number"
                        },
                    }
                });
                $("#brands-form").validate({
                    rules: {
                        name: "required",
                    },
                    messages: {
                        name: "Please enter your brand name",
                    },
                });
                $("#categories-form").validate({
                    rules: {
                        name: "required",
                    },
                    messages: {
                        name: "Please enter your category name",
                    },
                });


                jQuery(function ($) {
                    $('.easy-pie-chart.percentage').each(function () {
                        var $box = $(this).closest('.infobox');
                        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                        var size = parseInt($(this).data('size')) || 50;
                        $(this).easyPieChart({
                            barColor: barColor,
                            trackColor: trackColor,
                            scaleColor: false,
                            lineCap: 'butt',
                            lineWidth: parseInt(size / 10),
                            animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                            size: size
                        });
                    })

                    $('.sparkline').each(function () {
                        var $box = $(this).closest('.infobox');
                        var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                        $(this).sparkline('html', {tagValuesAttribute: 'data-values', type: 'bar', barColor: barColor, chartRangeMin: $(this).data('min') || 0});
                    });




                    var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
                    var data = [
                        {label: "social networks", data: 38.7, color: "#68BC31"},
                        {label: "search engines", data: 24.5, color: "#2091CF"},
                        {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
                        {label: "direct traffic", data: 18.6, color: "#DA5430"},
                        {label: "other", data: 10, color: "#FEE074"}
                    ]
                    function drawPieChart(placeholder, data, position) {
                        $.plot(placeholder, data, {
                            series: {
                                pie: {
                                    show: true,
                                    tilt: 0.8,
                                    highlight: {
                                        opacity: 0.25
                                    },
                                    stroke: {
                                        color: '#fff',
                                        width: 2
                                    },
                                    startAngle: 2
                                }
                            },
                            legend: {
                                show: true,
                                position: position || "ne",
                                labelBoxBorderColor: null,
                                margin: [-30, 15]
                            }
                            ,
                            grid: {
                                hoverable: true,
                                clickable: true
                            }
                        })
                    }
                    drawPieChart(placeholder, data);

                    /**
                     we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                     so that's not needed actually.
                     */
                    placeholder.data('chart', data);
                    placeholder.data('draw', drawPieChart);



                    var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                    var previousPoint = null;

                    placeholder.on('plothover', function (event, pos, item) {
                        if (item) {
                            if (previousPoint != item.seriesIndex) {
                                previousPoint = item.seriesIndex;
                                var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                                $tooltip.show().children(0).text(tip);
                            }
                            $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
                        } else {
                            $tooltip.hide();
                            previousPoint = null;
                        }

                    });

                    var d1 = [];
                    for (var i = 0; i < Math.PI * 2; i += 0.5) {
                        d1.push([i, Math.sin(i)]);
                    }

                    var d2 = [];
                    for (var i = 0; i < Math.PI * 2; i += 0.5) {
                        d2.push([i, Math.cos(i)]);
                    }

                    var d3 = [];
                    for (var i = 0; i < Math.PI * 2; i += 0.2) {
                        d3.push([i, Math.tan(i)]);
                    }


                    var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
                    $.plot("#sales-charts", [
                        {label: "Domains", data: d1},
                        {label: "Hosting", data: d2},
                        {label: "Services", data: d3}
                    ], {
                        hoverable: true,
                        shadowSize: 0,
                        series: {
                            lines: {show: true},
                            points: {show: true}
                        },
                        xaxis: {
                            tickLength: 0
                        },
                        yaxis: {
                            ticks: 10,
                            min: -2,
                            max: 2,
                            tickDecimals: 3
                        },
                        grid: {
                            backgroundColor: {colors: ["#fff", "#fff"]},
                            borderWidth: 1,
                            borderColor: '#555'
                        }
                    });


                    $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                    function tooltip_placement(context, source) {
                        var $source = $(source);
                        var $parent = $source.closest('.tab-content')
                        var off1 = $parent.offset();
                        var w1 = $parent.width();

                        var off2 = $source.offset();
                        var w2 = $source.width();

                        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                            return 'right';
                        return 'left';
                    }


                    $('.dialogs,.comments').slimScroll({
                        height: '300px'
                    });


                    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                    //so disable dragging when clicking on label
                    var agent = navigator.userAgent.toLowerCase();
                    if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                        $('#tasks').on('touchstart', function (e) {
                            var li = $(e.target).closest('#tasks li');
                            if (li.length == 0)
                                return;
                            var label = li.find('label.inline').get(0);
                            if (label == e.target || $.contains(label, e.target))
                                e.stopImmediatePropagation();
                        });

                    $('#tasks').sortable({
                        opacity: 0.8,
                        revert: true,
                        forceHelperSize: true,
                        placeholder: 'draggable-placeholder',
                        forcePlaceholderSize: true,
                        tolerance: 'pointer',
                        stop: function (event, ui) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                            $(ui.item).css('z-index', 'auto');
                        }
                    }
                    );
                    $('#tasks').disableSelection();
                    $('#tasks input:checkbox').removeAttr('checked').on('click', function () {
                        if (this.checked)
                            $(this).closest('li').addClass('selected');
                        else
                            $(this).closest('li').removeClass('selected');
                    });


                })
            </script>
            <script type="text/javascript">
                jQuery(function ($) {
                    $('#id-disable-check').on('click', function () {
                        var inp = $('#form-input-readonly').get(0);
                        if (inp.hasAttribute('disabled')) {
                            inp.setAttribute('readonly', 'true');
                            inp.removeAttribute('disabled');
                            inp.value = "This text field is readonly!";
                        }
                        else {
                            inp.setAttribute('disabled', 'disabled');
                            inp.removeAttribute('readonly');
                            inp.value = "This text field is disabled!";
                        }
                    });


                    $(".chosen-select").chosen();
                    $('#chosen-multiple-style').on('click', function (e) {
                        var target = $(e.target).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if (which == 2)
                            $('#form-field-select-4').addClass('tag-input-style');
                        else
                            $('#form-field-select-4').removeClass('tag-input-style');
                    });


                    $('[data-rel=tooltip]').tooltip({container: 'body'});
                    $('[data-rel=popover]').popover({container: 'body'});

                    $('textarea[class*=autosize]').autosize({append: "\n"});
                    $('textarea.limited').inputlimiter({
                        remText: '%n character%s remaining...',
                        limitText: 'max allowed : %n.'
                    });

                    $.mask.definitions['~'] = '[+-]';
                    $('.input-mask-date').mask('99/99/9999');
                    $('.input-mask-phone').mask('(999) 999-9999');
                    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                    $(".input-mask-product").mask("a*-999-a999", {placeholder: " ", completed: function () {
                            alert("You typed the following: " + this.val());
                        }});



                    $("#input-size-slider").css('width', '200px').slider({
                        value: 1,
                        range: "min",
                        min: 1,
                        max: 8,
                        step: 1,
                        slide: function (event, ui) {
                            var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                            var val = parseInt(ui.value);
                            $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                        }
                    });

                    $("#input-span-slider").slider({
                        value: 1,
                        range: "min",
                        min: 1,
                        max: 12,
                        step: 1,
                        slide: function (event, ui) {
                            var val = parseInt(ui.value);
                            $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                        }
                    });


                    $("#slider-range").css('height', '200px').slider({
                        orientation: "vertical",
                        range: true,
                        min: 0,
                        max: 100,
                        values: [17, 67],
                        slide: function (event, ui) {
                            var val = ui.values[$(ui.handle).index() - 1] + "";

                            if (!ui.handle.firstChild) {
                                $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                            }
                            $(ui.handle.firstChild).show().children().eq(1).text(val);
                        }
                    }).find('a').on('blur', function () {
                        $(this.firstChild).hide();
                    });

                    $("#slider-range-max").slider({
                        range: "max",
                        min: 1,
                        max: 10,
                        value: 2
                    });

                    $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                        // read initial values from markup and remove that
                        var value = parseInt($(this).text(), 10);
                        $(this).empty().slider({
                            value: value,
                            range: "min",
                            animate: true

                        });
                    });


                    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                        no_file: 'No File ...',
                        btn_choose: 'Choose',
                        btn_change: 'Change',
                        droppable: false,
                        onchange: null,
                        thumbnail: false //| true | large
                                //whitelist:'gif|png|jpg|jpeg'
                                //blacklist:'exe|php'
                                //onchange:''
                                //
                    });

                    $('#id-input-file-3').ace_file_input({
                        style: 'well',
                        btn_choose: 'Drop files here or click to choose',
                        btn_change: null,
                        no_icon: 'icon-cloud-upload',
                        droppable: true,
                        thumbnail: 'small'//large | fit
                                //,icon_remove:null//set null, to hide remove/reset button
                                /**,before_change:function(files, dropped) {
                                 //Check an example below
                                 //or examples/file-upload.html
                                 return true;
                                 }*/
                                /**,before_remove : function() {
                                 return true;
                                 }*/
                        ,
                        preview_error: function (filename, error_code) {
                            //name of the file that failed
                            //error_code values
                            //1 = 'FILE_LOAD_FAILED',
                            //2 = 'IMAGE_LOAD_FAILED',
                            //3 = 'THUMBNAIL_FAILED'
                            //alert(error_code);
                        }

                    }).on('change', function () {
                        //console.log($(this).data('ace_input_files'));
                        //console.log($(this).data('ace_input_method'));
                    });


                    //dynamically change allowed formats by changing before_change callback function
                    $('#id-file-format').removeAttr('checked').on('change', function () {
                        var before_change
                        var btn_choose
                        var no_icon
                        if (this.checked) {
                            btn_choose = "Drop images here or click to choose";
                            no_icon = "icon-picture";
                            before_change = function (files, dropped) {
                                var allowed_files = [];
                                for (var i = 0; i < files.length; i++) {
                                    var file = files[i];
                                    if (typeof file === "string") {
                                        //IE8 and browsers that don't support File Object
                                        if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file))
                                            return false;
                                    }
                                    else {
                                        var type = $.trim(file.type);
                                        if ((type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type))
                                                || (type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name))//for android's default browser which gives an empty string for file.type
                                                )
                                            continue;//not an image so don't keep this file
                                    }

                                    allowed_files.push(file);
                                }
                                if (allowed_files.length == 0)
                                    return false;

                                return allowed_files;
                            }
                        }
                        else {
                            btn_choose = "Drop files here or click to choose";
                            no_icon = "icon-cloud-upload";
                            before_change = function (files, dropped) {
                                return files;
                            }
                        }
                        var file_input = $('#id-input-file-3');
                        file_input.ace_file_input('update_settings', {'before_change': before_change, 'btn_choose': btn_choose, 'no_icon': no_icon})
                        file_input.ace_file_input('reset_input');
                    });




                    $('#spinner1').ace_spinner({value: 0, min: 0, max: 200, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                            .on('change', function () {
                                //alert(this.value)
                            });
                    $('#spinner2').ace_spinner({value: 0, min: 0, max: 10000, step: 100, touch_spinner: true, icon_up: 'icon-caret-up', icon_down: 'icon-caret-down'});
                    $('#spinner3').ace_spinner({value: 0, min: -100, max: 100, step: 10, on_sides: true, icon_up: 'icon-plus smaller-75', icon_down: 'icon-minus smaller-75', btn_up_class: 'btn-success', btn_down_class: 'btn-danger'});



                    $('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
                        $(this).prev().focus();
                    });
                    $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function () {
                        $(this).next().focus();
                    });

                    $('#timepicker1').timepicker({
                        minuteStep: 1,
                        showSeconds: true,
                        showMeridian: false
                    }).next().on(ace.click_event, function () {
                        $(this).prev().focus();
                    });

                    $('#colorpicker1').colorpicker();
                    $('#simple-colorpicker-1').ace_colorpicker();


                    $(".knob").knob();


                    //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
                    var tag_input = $('#form-field-tags');
                    if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
                    {
                        tag_input.tag(
                                {
                                    placeholder: tag_input.attr('placeholder'),
                                    //enable typeahead by specifying the source array
                                    source: ace.variable_US_STATES, //defined in ace.js >> ace.enable_search_ahead
                                }
                        );
                    }
                    else {
                        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                        tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                        //$('#form-field-tags').autosize({append: "\n"});
                    }




                    /////////
                    $('#modal-form input[type=file]').ace_file_input({
                        style: 'well',
                        btn_choose: 'Drop files here or click to choose',
                        btn_change: null,
                        no_icon: 'icon-cloud-upload',
                        droppable: true,
                        thumbnail: 'large'
                    })

                    //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                    //and its width cannot be determined.
                    //so we set the width after modal is show
                    $('#modal-form').on('shown.bs.modal', function () {
                        $(this).find('.chosen-container').each(function () {
                            $(this).find('a:first-child').css('width', '210px');
                            $(this).find('.chosen-drop').css('width', '210px');
                            $(this).find('.chosen-search input').css('width', '200px');
                        });
                    })
                    /**
                     //or you can activate the chosen plugin after modal is shown
                     //this way select element becomes visible with dimensions and chosen works as expected
                     $('#modal-form').on('shown', function () {
                     $(this).find('.modal-chosen').chosen();
                     })
                     */

                });
            </script>
    </body>
</html>
