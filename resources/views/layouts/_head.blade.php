<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Lavensi Tour & Travel</title>

<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


<!-- Bootstrap Core Css -->
<link href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<!-- Custom Css -->
<link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">

{{-- <link href="{{ asset ('assets_frontend/css/package_style.css') }}" rel="stylesheet"> --}}

<!-- Waves Effect Css -->
<link href="{{ asset ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />


<!-- Animation Css -->
<link href="{{ asset ('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

{{-- Bootstrap Datatable --}}
<link href="{{ asset ('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

<!-- Swall Css-->
<link href="{{ asset ('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="{{ asset ('assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset ('assets/css/themes/all-themes.css') }}" rel="stylesheet" />


<link href="{{ asset ('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

<link href="{{ asset ('assets/plugins/waitme/waitMe.css') }}" rel="stylesheet" />
{{-- DATEPICKER --}}
<link href="{{ asset ('assets/plugins/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />


<!-- Font awesome-->
{{-- <link href="{{ asset ('assets/css/fontawesome/css/all.css') }}" rel="stylesheet" /> --}}

 <!-- Colorpicker Css -->
<link href="{{ asset ('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />

<!-- Izi toast-->
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.min.css') }}" rel="stylesheet" />

<!-- font awesome-->
<link href="{{ asset ('assets/plugins/fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
{{-- <link href="{{ asset ('assets/plugins/fontawesome/css/all.css') }}" rel="stylesheet" /> --}}
{{-- SELECT2 --}}
<link href="{{ asset ('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
{{-- Bootstrap-select --}}
<link href="{{ asset ('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />




<style type="text/css">
	.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
	.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
	.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
	.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
	.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
	.file-upload .file-select.file-select-disabled{opacity:0.65;}
	.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
	.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
	.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
	.readonly:read-only
	{
	    background-color: #ebebeb;
		pointer-events: none;
	}
	.center{
		text-align: center;
	}
	.right{
		text-align: right;
	}
	.left{
		text-align: left;
	}
	.borderless{
		border: none !important;
	}
	.form-control-label {
	    text-align: left;
	}
	table .v_center { 
	  display: table-cell;
	  vertical-align: center; 
	}
	.over-flow-x{
		overflow-x: auto;
	}
	.paging-trans{
		-webkit-transition: all 0.2s ease;
		-moz-transition: all 0.2s ease;
		-o-transition: all 0.2s ease;
		-ms-transition: all 0.2s ease;
		transition: all 0.2s ease;
	}
	.arrow{
		color: green;
		background: white;
	}
	.arrow:hover{
		color: red;
		background: #8888;
	}
	.on_screen{
		left: 0;
		opacity: 1;
		display: inline-block;
	}
	.delayed{
		left: /*1500*/;
		opacity: 0;
		display: none;
	}
	.select2-container{
		border: none !important;
	}
	.select2-selection{
		border: none !important;
	}
	.width100{
		width: 100%;
	}
	th { font-size: 12px; }
	td { font-size: 11px; }
	.select2-selection__rendered{
		width: auto !important;
	}
	.select2-results__options{
		width: auto !important;
	}
	.uppercase{
        text-transform: uppercase;
    }

    body { 
		background-color: white !important;
	}
	.black{
		background: #24292e;
	}
	.header-logo-invertocat{
		background: white;
	}
	.github{
		fill: white;
	}
	.github-grey{
		fill: grey;
	}
	.grey-input{
		background-color: #8888;
	}
	.input-container{
		width: 30%;
		padding-top: 5px;
		position: relative;
	}
	.HeaderNavlink{
		margin-top: 13px !important;
	}
	.navbar-nav li .HeaderNavlink:hover{
		color: #9999 !important;
	}
	.navbar-nav  li  .HeaderNavlink{
		color: #fff!important;
	}
	.container{
		width: 1000px;
	}
	.pl-2{

	}
	.navbar-nav{
		display: flex;
	}
	.white {
	  -webkit-filter: opacity(.8) drop-shadow(0 0 0 white);
		  filter: opacity(.8) drop-shadow(0 0 0 white);
	}
	.bell{
		margin-top: 13px !important;
	}
	.green{
		background:green;
	}
	.blue{
		background:blue;
	}
	.yellow{
		background:yellow;
	}
	.block{
		width: 100%;
		height: 500px;
	}
	.container-content{
		width: 100%;
		height: 55px;
	}
	.pt-2{
		padding-top: 20px;
	}
	.pl-2{
		padding-top: 20px;
	}
	.width-10{
		width: 10%;
	}
	.width-20{
		width: 20%;
	}
	.border-black{
		border:1px solid #9999;
	}
	.box-git{
		width: 100%;
		height: 133px;
	}
	.nopadding-right {
	   padding-right: 0 !important;
	   margin-right: 0 !important;
	}

	.nopadding-left {
	   padding-left: 0 !important;
	   margin-left: 0 !important;
	}
	.mt-1{
		margin-top: 10px !important;
	}
	.mt-2{
		margin-top: 20px !important;
	}
	.mb-1{
		margin-bottom: 10px !important;
	}
	.mb-2{
		margin-bottom: 20px !important;
	}
	.mr-1{
		margin-right: 10px !important;
	}
	.mr-2{
		margin-right: 20px !important;
	}
	.ml-1{
		margin-left: 10px !important;
	}
	.ml-2{
		margin-left: 20px !important;
	}
	.grey{
		color: grey;
	}
	.width-100{
		width: 100%;
	}
	.none{
		text-decoration: none;
		list-style-type: none;
	}
	.d-inline-block{
		display: inline-block;
		vertical-align: middle;
	}
	.d-inline{
		display: inline;
		vertical-align: middle;
	}
	.d-inline li{
		display: inline;
	}
	.m-auto{
		margin: auto;
	}
	.nav-tabs li a{
		padding-left: 0 !important;
		padding-right: 0 !important;
		text-align: center !important;
	}
	.font-small{
		font-size: 12px;
	}
	.middle{
		height: 47px;
	}
</style>