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
<title>CAOL - Controle de Atividades Online - Agence Interativa</title>
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
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/bootstrap-select/bootstrap-select.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets-template/global/plugins/jquery-multi-select/css/multi-select.css')}}"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="{{asset('assets-template/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{asset('assets-template/global/css/components.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('assets-template/admin/layout/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets-template/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
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
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="{{asset('assets-template/admin/layout/img/logo.png')}}" alt="logo" class="logo-default"/>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu-light hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					Agence <i class="fa fa-angle-down"></i>
					</a>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					Projetos <i class="fa fa-angle-down"></i>
					</a>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					Administrativo <i class="fa fa-angle-down"></i>
					</a>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					Comercial <i class="fa fa-angle-down"></i>
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					Financeiro <i class="fa fa-angle-down"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
			@if (Auth::check())
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle hide1" src="{{asset('assets-template/admin/layout/img/avatar3_small.jpg')}}"/>
					<span class="username username-hide-on-mobile">
					User </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="#">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">
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
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
							<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								Desempenho <span class="hidden-480">
								| Dec 27, 2013 7:16:25 </span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
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
														Desempenho pelo Consultor
													</div>
												</div>
												<div class="portlet-body">
													<div class="table-responsive">
														<table class="table table-bordered">
														<tbody>
														<tr>
															<td width="20%">
																 Período
															</td>
															<td width="60%">
																 <div class="form-group">
																	<div class="col-md-4">
																		<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
																			<input type="text" class="form-control" name="from">
																			<span class="input-group-addon">
																			to </span>
																			<input type="text" class="form-control" name="to">
																		</div>
																		<!-- /input-group -->
																		<span class="help-block">
																		Selecione um intervalo de datas </span>
																	</div>
																</div>
															</td>
															<td width="20%" rowspan="2">
																 
															</td>
														</tr>
														<tr>
															<td>
																 Consultores
															</td>
															<td>
																<!-- BEGIN PORTLET-->
																<div class="portlet box green">
																	<div class="portlet-title">
																		<div class="caption">
																			<i class="fa fa-gift"></i>Multiple Select
																		</div>
																		<div class="tools">
																			<a href="javascript:;" class="collapse">
																			</a>
																			<a href="#portlet-config" data-toggle="modal" class="config">
																			</a>
																			<a href="javascript:;" class="reload">
																			</a>
																			<a href="javascript:;" class="remove">
																			</a>
																		</div>
																	</div>
																	<div class="portlet-body form">
																		<!-- BEGIN FORM-->
																		<form action="index.html" class="form-horizontal form-row-seperated">
																			<div class="form-body">
																				<div class="form-group">
																					<label class="control-label col-md-3">Default</label>
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
																				<div class="form-group last">
																					<label class="control-label col-md-3">Grouped Options</label>
																					<div class="col-md-9">
																						<select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]">
																							<optgroup label="NFC EAST">
																							<option>Dallas Cowboys</option>
																							<option>New York Giants</option>
																							<option>Philadelphia Eagles</option>
																							<option>Washington Redskins</option>
																							</optgroup>
																							<optgroup label="NFC NORTH">
																							<option>Chicago Bears</option>
																							<option>Detroit Lions</option>
																							<option>Green Bay Packers</option>
																							<option>Minnesota Vikings</option>
																							</optgroup>
																							<optgroup label="NFC SOUTH">
																							<option>Atlanta Falcons</option>
																							<option>Carolina Panthers</option>
																							<option>New Orleans Saints</option>
																							<option>Tampa Bay Buccaneers</option>
																							</optgroup>
																							<optgroup label="NFC WEST">
																							<option>Arizona Cardinals</option>
																							<option>St. Louis Rams</option>
																							<option>San Francisco 49ers</option>
																							<option>Seattle Seahawks</option>
																							</optgroup>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="form-actions">
																				<div class="row">
																					<div class="col-md-offset-3 col-md-9">
																						<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
																						<button type="button" class="btn default">Cancel</button>
																					</div>
																				</div>
																			</div>
																		</form>
																		<!-- END FORM-->
																	</div>
																</div>
																<!-- END PORTLET-->
															</td>
														</tr>
														</tbody>
														</table>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_2">
										<div class="table-container">
											<div class="table-actions-wrapper">
												<span>
												</span>
												<select class="table-group-action-input form-control input-inline input-small input-sm">
													<option value="">Select...</option>
													<option value="pending">Pending</option>
													<option value="paid">Paid</option>
													<option value="canceled">Canceled</option>
												</select>
												<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
											</div>
											<table class="table table-striped table-bordered table-hover" id="datatable_invoices">
											<thead>
											<tr role="row" class="heading">
												<th width="5%">
													<input type="checkbox" class="group-checkable">
												</th>
												<th width="5%">
													 Invoice&nbsp;#
												</th>
												<th width="15%">
													 Bill To
												</th>
												<th width="15%">
													 Invoice&nbsp;Date
												</th>
												<th width="10%">
													 Amount
												</th>
												<th width="10%">
													 Status
												</th>
												<th width="10%">
													 Actions
												</th>
											</tr>
											<tr role="row" class="filter">
												<td>
												</td>
												<td>
													<input type="text" class="form-control form-filter input-sm" name="order_invoice_no">
												</td>
												<td>
													<input type="text" class="form-control form-filter input-sm" name="order_invoice_bill_to">
												</td>
												<td>
													<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
														<input type="text" class="form-control form-filter input-sm" readonly name="order_invoice_date_from" placeholder="From">
														<span class="input-group-btn">
														<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
														</span>
													</div>
													<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
														<input type="text" class="form-control form-filter input-sm" readonly name="order_invoice_date_to" placeholder="To">
														<span class="input-group-btn">
														<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
														</span>
													</div>
												</td>
												<td>
													<div class="margin-bottom-5">
														<input type="text" class="form-control form-filter input-sm" name="order_invoice_amount_from" placeholder="From"/>
													</div>
													<input type="text" class="form-control form-filter input-sm" name="order_invoice_amount_to" placeholder="To"/>
												</td>
												<td>
													<select name="order_invoice_status" class="form-control form-filter input-sm">
														<option value="">Select...</option>
														<option value="pending">Pending</option>
														<option value="paid">Paid</option>
														<option value="canceled">Canceled</option>
													</select>
												</td>
												<td>
													<div class="margin-bottom-5">
														<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
													</div>
													<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
												</td>
											</tr>
											</thead>
											<tbody>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
			<!-- BEGIN PAGE HEADER AND PAGE CONTENT-->
				@yield('content')
			<!--END PAGE HEADER AND PAGE CONTENT-->
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Agence
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/gritter/js/jquery.gritter.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{asset('assets-template/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery-easypiechart/jquery.easypiechart.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-template/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets-template/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>
<script src="{{asset('assets-template/admin/pages/scripts/components-pickers.js')}}"></script>
<script src="{{asset('assets-template/admin/pages/scripts/components-dropdowns.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features // initlayout and core plugins
	Index.init();
	Index.initJQVMAP(); // init index page's custom scripts
	Index.initCalendar(); // init index page's custom scripts
	Index.initCharts(); // init index page's custom scripts
	Index.initChat();
	Index.initMiniCharts();
	Index.initDashboardDaterange();
	Tasks.initDashboardWidget();
	ComponentsDropdowns.init();
	ComponentsPickers.init();
	MultiSelect.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>