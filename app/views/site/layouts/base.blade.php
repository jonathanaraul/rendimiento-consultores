<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>
    @section('title')
    CAOL - Controle de Atividades Online - Agence Interativa
    @show
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-select/bootstrap-select.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/jquery-multi-select/css/multi-select.css')}}"/>
<link href="{{asset('assets-template/admin/pages/css/blog.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/pages/css/news.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/pages/css/profile.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-datepicker/css/datepicker3.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/select2/select2.css')}}"/>
<link href="{{asset('assets-template/admin/pages/css/timeline.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-datepicker/css/datepicker.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-datepicker/css/datepicker3.css')}}"/>
<!-- BEGIN:File Upload Plugin CSS files-->
<link href="{{asset('assets-template/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}" rel="stylesheet"/>
<link href="{{asset('assets-template/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet"/>
<link href="{{asset('assets-template/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet"/>
<!-- END:File Upload Plugin CSS files-->
<link href="{{asset('assets-template/admin/pages/css/inbox.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{asset('assets-template/global/css/components.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/layout2/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('assets-template/admin/layout2/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/layout2/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/pages/css/todo.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
            <img src="{{asset('assets-template/admin/layout2/img/logo-default.png')}}" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        @unless (Auth::check())
        <div class="page-actions">
            <div class="btn-group">
                <a class="btn btn-circle red-pink dropdown-toggle" href="{{{ URL::to('user/login') }}}">
                <i class="icon-key"></i>&nbsp;<span class="hidden-sm hidden-xs">Login&nbsp;</span>
                </a>
            </div>
            <div class="btn-group">
                <a class="btn btn-circle green-haze dropdown-toggle"  href="{{{ URL::to('user/create') }}}">
                <i class="icon-users"></i>&nbsp;<span class="hidden-sm hidden-xs">Register&nbsp;</span></i>
                </a>
            </div>
        </div>
        @endunless
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    @if (Auth::check())
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger">
                        7 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <p>
                                     You have 14 new notifications
                                </p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-success">
                                        <i class="fa fa-plus"></i>
                                        </span>
                                        New user registered. <span class="time">
                                        Just now </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                        </span>
                                        Server #12 overloaded. <span class="time">
                                        15 mins </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-warning">
                                        <i class="fa fa-bell-o"></i>
                                        </span>
                                        Server #2 not responding. <span class="time">
                                        22 mins </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-info">
                                        <i class="fa fa-bullhorn"></i>
                                        </span>
                                        Application error. <span class="time">
                                        40 mins </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                        </span>
                                        Database overloaded 68%. <span class="time">
                                        2 hrs </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                        </span>
                                        2 user IP blocked. <span class="time">
                                        5 hrs </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-warning">
                                        <i class="fa fa-bell-o"></i>
                                        </span>
                                        Storage Server #4 not responding. <span class="time">
                                        45 mins </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-info">
                                        <i class="fa fa-bullhorn"></i>
                                        </span>
                                        System Error. <span class="time">
                                        55 mins </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                        </span>
                                        Database overloaded 68%. <span class="time">
                                        2 hrs </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="#">
                                See all notifications <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-primary">
                        4 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <p>
                                     You have 12 new messages
                                </p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                    <li>
                                        <a href="inbox.html?a=view">
                                        <span class="photo">
                                        <img src="{{asset('assets-template/admin/layout2/img/avatar2.jpg')}}" alt=""/>
                                        </span>
                                        <span class="subject">
                                        <span class="from">
                                        Lisa Wong </span>
                                        <span class="time">
                                        Just Now </span>
                                        </span>
                                        <span class="message">
                                        Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
                                        <span class="photo">
                                        <img src="{{asset('assets-template/admin/layout2/img/avatar3.jpg')}}" alt=""/>
                                        </span>
                                        <span class="subject">
                                        <span class="from">
                                        Richard Doe </span>
                                        <span class="time">
                                        16 mins </span>
                                        </span>
                                        <span class="message">
                                        Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
                                        <span class="photo">
                                        <img src="{{asset('assets-template/admin/layout2/img/avatar1.jpg')}}" alt=""/>
                                        </span>
                                        <span class="subject">
                                        <span class="from">
                                        Bob Nilson </span>
                                        <span class="time">
                                        2 hrs </span>
                                        </span>
                                        <span class="message">
                                        Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
                                        <span class="photo">
                                        <img src="{{asset('assets-template/admin/layout2/img/avatar2.jpg')}}" alt=""/>
                                        </span>
                                        <span class="subject">
                                        <span class="from">
                                        Lisa Wong </span>
                                        <span class="time">
                                        40 mins </span>
                                        </span>
                                        <span class="message">
                                        Vivamus sed auctor 40% nibh congue nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
                                        <span class="photo">
                                        <img src="{{asset('assets-template/admin/layout2/img/avatar3.jpg')}}" alt=""/>
                                        </span>
                                        <span class="subject">
                                        <span class="from">
                                        Richard Doe </span>
                                        <span class="time">
                                        46 mins </span>
                                        </span>
                                        <span class="message">
                                        Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="inbox.html">
                                See all messages <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-calendar"></i>
                        <span class="badge badge-success">
                        3 </span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li>
                                <p>
                                     You have 12 pending tasks
                                </p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        New release v1.2 </span>
                                        <span class="percent">
                                        30% </span>
                                        </span>
                                        <div class="progress">
                                            <div style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     40% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        Application deployment </span>
                                        <span class="percent">
                                        65% </span>
                                        </span>
                                        <div class="progress progress-striped">
                                            <div style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     65% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        Mobile app release </span>
                                        <span class="percent">
                                        98% </span>
                                        </span>
                                        <div class="progress">
                                            <div style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     98% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        Database migration </span>
                                        <span class="percent">
                                        10% </span>
                                        </span>
                                        <div class="progress progress-striped">
                                            <div style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     10% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        Web server upgrade </span>
                                        <span class="percent">
                                        58% </span>
                                        </span>
                                        <div class="progress progress-striped">
                                            <div style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     58% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        Mobile development </span>
                                        <span class="percent">
                                        85% </span>
                                        </span>
                                        <div class="progress progress-striped">
                                            <div style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     85% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <span class="task">
                                        <span class="desc">
                                        New UI release </span>
                                        <span class="percent">
                                        18% </span>
                                        </span>
                                        <div class="progress progress-striped">
                                            <div style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                <div class="sr-only">
                                                     18% Complete
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="page_todo.html">
                                See all tasks <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown dropdown-quick-sidebar-toggler hide">
                        <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle hide1" src="{{asset('assets-template/admin/layout/img/avatar3_small.jpg')}}"/>
                        <span class="username username-hide-on-mobile">
                        Bob </span>
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                7 </span>
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="{{{ URL::to('user/logout') }}}">
                                <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    @endif
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
                    <li class="start ">
                        <a href="{{{ URL::to('/') }}}">
                        <i class="icon-home"></i>
                        <span class="title">Agence</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="icon-briefcase"></i>
                        <span class="title">Projetos</span>
                        <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                <i class="fa fa-th-large"></i>
                                Undefined</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-o"></i>
                            <span class="title">Administrativo</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                <i class="fa fa-th-large"></i>
                                Undefined</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <span class="title">Comercial</span>
                        <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{{ URL::to('') }}}">
                                <i class="fa fa-th-large"></i> Performance Comercial
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                        <i class="icon-wallet"></i>
                        <span class="title">Financeiro</span>
                        <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                <i class="fa fa-th-large"></i>
                                undefined</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i>
                            <span class="title">Usuário</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                <i class="fa fa-th-large"></i>
                                undefined</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                        <!-- Begin: life time stats -->
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-folder font-green-sharp"></i>
                                    <span class="caption-subject font-green-sharp bold uppercase">
                                    Desempenho </span>
                                    <span class="caption-helper">Dec 27, 2013 7:16:25</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn btn-default btn-circle" href="#" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <span class="hidden-480">
                                        Ferramentas </span>
                                        <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#">
                                                Exportar para Excel </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                Exportar para CSV </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                Exportar para XML </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="#">
                                                Impressão </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs nav-tabs-lg">
                                        <li class="active">
                                            <a href="#tab_1" data-toggle="tab">
                                            Por Consultor </a>
                                        </li>
                                        <li>
                                            <a href="#tab_2" data-toggle="tab">
                                            Por Cliente
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                Desempenho por Consultor
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-responsive">
                                                                <!-- BEGIN FORM-->
                                                                {{ Form::open(array('class' => 'form-horizontal form-row-seperated', 'url' => 'ajax')) }}
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <td width="20%">
                                                                             Período
                                                                        </td>
                                                                        <td width="50%">
                                                                            <div class="col-md-4">
                                                                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                                    {{ Form::text('from', null, array('class' => 'form-control')) }}
                                                                                    <span class="input-group-addon">
                                                                                    up </span>
                                                                                    {{ Form::text('to', null, array('class' => 'form-control')) }}
                                                                                </div>
                                                                                <!-- /input-group -->
                                                                                <span class="help-block">
                                                                                Escolha intervalo </span>
                                                                            </div>
                                                                        </td>
                                                                        <td width="30%"  rowspan="2">
                                                                            <div class="form-actions">
                                                                                <div class="row">
                                                                                    <div class="col-md-offset-3">
                                                                                        {{ Form::button('Relatório', array('class' => 'btn blue')) }}
                                                                                        {{ Form::button('<i class="icon-bar-chart"></i> Gráfico', array('class' => 'btn blue')) }}
                                                                                        {{ Form::button('<i class="icon-bar-chart"></i> Pizza', array('class' => 'btn blue')) }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                             
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                             Consultores
                                                                        </td>
                                                                        <td>
                                                                            <div class="portlet-body form">
                                                                                    <div class="form-body">
                                                                                        <div class="form-group">
                                                                                            <div class="col-md-9">
                                                                                                <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]">
                                                                                                    <option>Dallas Cowboys</option>
                                                                                                    <option>New York Giants</option>
                                                                                                    <option selected>Philadelphia Eagles</option>
                                                                                                    <option selected>Washington Redskins</option>
                                                                                                    <option>Chicago Bears</option>
                                                                                                    <option>Detroit Lions</option>
                                                                                                    <option>Green Bay Packers</option>
                                                                                                    <option>Minnesota Vikings</option>
                                                                                                    <option selected>Atlanta Falcons</option>
                                                                                                    <option>Carolina Panthers</option>
                                                                                                    <option>New Orleans Saints</option>
                                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                                    <option>Arizona Cardinals</option>
                                                                                                    <option>St. Louis Rams</option>
                                                                                                    <option>San Francisco 49ers</option>
                                                                                                    <option>Seattle Seahawks</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </td>                                                         
                                                                    </tr>
                                                                </table>
                                                                {{ Form::close() }}
                                                                <!-- END FORM-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                            <div class="table-container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="portlet box blue">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    Desempenho por Cliente
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="table-responsive">
                                                                    <!-- BEGIN FORM-->
                                                                    {{ Form::open(array('class' => 'form-horizontal form-row-seperated', 'url' => 'ajax')) }}
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <td width="20%">
                                                                                 Período
                                                                            </td>
                                                                            <td width="50%">
                                                                                <div class="col-md-4">
                                                                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                                        {{ Form::text('from', null, array('class' => 'form-control')) }}
                                                                                        <span class="input-group-addon">
                                                                                        up </span>
                                                                                        {{ Form::text('to', null, array('class' => 'form-control')) }}
                                                                                    </div>
                                                                                    <!-- /input-group -->
                                                                                    <span class="help-block">
                                                                                    Escolha intervalo </span>
                                                                                </div>
                                                                            </td>
                                                                            <td width="30%"  rowspan="2">
                                                                                <div class="form-actions">
                                                                                    <div class="row">
                                                                                        <div class="col-md-offset-3">
                                                                                            {{ Form::button('Relatório', array('class' => 'btn blue')) }}
                                                                                            {{ Form::button('<i class="icon-bar-chart"></i> Gráfico', array('class' => 'btn blue')) }}
                                                                                            {{ Form::button('<i class="icon-bar-chart"></i> Pizza', array('class' => 'btn blue')) }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                             
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                 Clientes
                                                                            </td>
                                                                            <td>
                                                                                <div class="portlet-body form">
                                                                                        <div class="form-body">
                                                                                            <div class="form-group">
                                                                                                <div class="col-md-9">
                                                                                                    <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]">
                                                                                                        <option>Dallas Cowboys</option>
                                                                                                        <option>New York Giants</option>
                                                                                                        <option selected>Philadelphia Eagles</option>
                                                                                                        <option selected>Washington Redskins</option>
                                                                                                        <option>Chicago Bears</option>
                                                                                                        <option>Detroit Lions</option>
                                                                                                        <option>Green Bay Packers</option>
                                                                                                        <option>Minnesota Vikings</option>
                                                                                                        <option selected>Atlanta Falcons</option>
                                                                                                        <option>Carolina Panthers</option>
                                                                                                        <option>New Orleans Saints</option>
                                                                                                        <option>Tampa Bay Buccaneers</option>
                                                                                                        <option>Arizona Cardinals</option>
                                                                                                        <option>St. Louis Rams</option>
                                                                                                        <option>San Francisco 49ers</option>
                                                                                                        <option>Seattle Seahawks</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                            </td>                                                         
                                                                        </tr>
                                                                    </table>
                                                                    {{ Form::close() }}
                                                                    <!-- END FORM-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: life time stats -->
                <!-- BEGIN PAGE HEADER AND PAGE CONTENT-->
                        <div class="view-content">
                        </div>
                <!-- END PAGE HEADER AND PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <!--Cooming Soon...-->
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
             2014 &copy; Metronic by keenthemes.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{asset('assets-template/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
<script src="{{asset('assets-template/global/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('assets-template/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{asset('assets-template/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/layout2/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/layout2/scripts/demo.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets-template/admin/pages/scripts/form-samples.js')}}"></script>
<script src="{{asset('assets-template/global/scripts/datatable.js')}}"></script>
<script src="{{asset('assets-template/admin/pages/scripts/ecommerce-orders-view.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/clockface/js/clockface.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.stack.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.crosshair.min.js')}}"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<!-- BEGIN:File Upload Plugin JS files-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
<!-- blueimp Gallery script -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')}}"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
<!-- The basic File Upload plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
<!-- The File Upload processing plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js')}}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js')}}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js')}}"></script>
<!-- The File Upload video preview plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js')}}"></script>
<!-- The File Upload validation plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js')}}"></script>
<!-- The File Upload user interface plugin -->
<script src="{{asset('assets-template/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js')}}"></script>
<!-- The main application script -->
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
    <script src="../../assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->    
<!-- END:File Upload Plugin JS files-->
<script src="{{asset('assets-template/admin/pages/scripts/resultad.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/pages/scripts/components-pickers.js')}}"></script>
<script src="{{asset('assets-template/admin/pages/scripts/components-dropdowns.js')}}"></script>
<script src="{{asset('assets-template/admin/pages/scripts/charts.js')}}"></script>
<script>
jQuery(document).ready(function() {    
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
Resultad.init();
ComponentsDropdowns.init();
EcommerceOrdersView.init();
ComponentsPickers.init();
Charts.init();
Charts.initCharts();
Charts.initPieCharts();
Charts.initBarCharts();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>