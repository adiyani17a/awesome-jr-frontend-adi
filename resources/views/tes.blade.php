<!DOCTYPE html>
<html>
<head>
    @include('layouts._head')
	<title></title>
	<style type="text/css">
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
			background-image: url() no-repeat;
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
		.mb-2{
			margin-bottom: 20px !important;
		}
		.mr-1{
			margin-right: 10px !important;
		}
		.mr-2{
			margin-right: 20px !important;
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
	</style>
</head>
<body>
	<nav class="navbar navbar-default black" >
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
		  <a href="#" class="">
		  	<img src="{{ asset('assets/images/git.png') }}" width="35" height="35">
		  </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <div class="navbar-form navbar-left input-container">
	          <input type="text" class="form-control input-sm grey-input" placeholder="Search"  style="width: 100%;color: #fff" >
	      </div>
	      <ul class="nav navbar-nav">
	        <li class=""><a href="#" class="HeaderNavlink">Pull Request <span class="sr-only">(current)</span></a></li>
	        <li><a href="#" class="HeaderNavlink">Issues</a></li>
	        <li><a href="#" class="HeaderNavlink">Marketplace</a></li>
	        <li><a href="#" class="HeaderNavlink">Explore</a></li>
	      </ul>

	      <ul class="nav navbar-nav navbar-right">
	        <li>
		  		<a class="bell" href="#">
		  			<img src="{{ asset('assets/images/bell.png') }}" width="20" height="20" class="white">
		  		</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle HeaderNavlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus"></i> <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle HeaderNavlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img alt="@adiyani17a" class="avatar float-left mr-1" src="https://avatars1.githubusercontent.com/u/37235189?s=40&amp;v=4" height="20" width="20"><span class="dropdown-caret white"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container container-content">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 ">
				<div class="col-sm-4 pt-2">
					<div class="col-sm-12">
						<a itemprop="image" class="u-photo d-block position-relative" aria-hidden="true" href="https://avatars3.githubusercontent.com/u/4925655?s=400&amp;v=4">
							<img alt="" width="100%" height="100%" class="avatar width-full rounded-2" src="{{ $user_detail->avatar_url }}">
						</a>
					</div>
					<div class="col-sm-12 mb-2">
						<h1><span>{{ $user_detail->name }}</span></h1>
						<span class="grey">{{ $user_detail->login }}</span>
					</div>
					<div class="col-sm-12 mb-2">
						<p>{{ $user_detail->bio }}</p>
					</div>
					<div class="col-sm-12 mb-2">
						<button class="btn btn-default width-100 waves-effect">
							FOLLOW
						</button>
					</div>
					<div class="col-sm-12">
						<a href="#" class="grey">Block or report user</a>
						<hr>
						<a class="member-badge border-top border-gray-light py-3 d-block" href="https://developer.github.com">
					    	<img src="{{ asset('assets/images/git.png') }}" width="20" height="20">
					    	<span style="padding-top: 1px">Developer Program Member</span>
					    </a>
					    <hr>
					</div>
					<div class="col-sm-12">
						<div class="col-sm-12 nopadding-left nopadding-right mb-1">
	                    	<i class="material-icons d-inline-block">people</i>
                    		<a class="user-mention d-inline-block" href="https://github.com/Labku"><label>{{ $user_detail->company }}</label></a>
                			{{-- <a class="user-mention d-inline-block" href="https://github.com/Qupas"><label>@Qupas</label></a> --}}
						</div>	
						<div class="col-sm-12 nopadding-left nopadding-right mb-1">
	                    	<i class="material-icons d-inline-block">navigation</i>
	                    	<span class="p-label d-inline-block">{{ $user_detail->location }}</span>
						</div>							
						<div class="col-sm-12 nopadding-left nopadding-right mb-1">	
							<i class="material-icons d-inline-block">message</i>
							<a class="u-email d-inline-block" href="mailto:andhikamaheva@gmail.com">andhikamaheva@gmail.com</a>
						</div>		
						<div class="col-sm-12 nopadding-left nopadding-right mb-1">
							<i class="material-icons d-inline-block	">link</i>
							<a rel="nofollow me d-inline-block" class="u-url" href="{{ $user_detail->blog }}">{{ $user_detail->blog }}</a>
						</div>		
					</div>
				</div>
				<div class="col-sm-8 pt-2">
					<ul class="nav nav-tabs">
			          <li class="active width-20"><a class="" data-toggle="tab" href="#overview">Overview</a></li>
			          <li class="width-20"><a class="" data-toggle="tab" href="#">Repositories <span class="badge badge-pill">{{ $user_detail->public_repos }}</span></a></li>
			          <li class="width-20"><a class="" data-toggle="tab" href="#">Stars <span class="badge badge-pill">{{ $user_detail->public_gists }}</span></a></li>
			          <li class="width-20"><a class="" data-toggle="tab" href="#">Followers  <span class="badge badge-pill">{{ $user_detail->followers }}</span></a></li>
			          <li class="width-20"><a class="" data-toggle="tab" href="#">Following  <span class="badge badge-pill">{{ $user_detail->following }}</span></a></li>
			        </ul>
					<div class="tab-content"  >
			          <div id="overview" class="tab-pane fade in active">
			            <p class="">Pinned Repositories</p>
			            <div class="col-sm-14 nopadding">
			            	@foreach($user_repo as $i=>$val)
			            		@if ($i <= 1)
			            			@if($i+1 % 2 != 0)
			            			<div class="col-sm-6 nopadding-left ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2">
					            			<div class="mt-2">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs">{{ $val->name }}</span>
										        </a>
					            			</div>
									        <p class="pinned-repo-desc text-gray text-small d-block mt-2 mb-3">{{$val->description}}</p>
					            		</div>
					            	</div>
					            	@else
					            	<div class="col-sm-6 nopadding-right ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2">
					            			<div class="mt-2">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs">{{ $val->name }}</span>
										        </a>
					            			</div>
									        <p class="pinned-repo-desc text-gray text-small d-block mt-2 mb-3">{{$val->description}}</p>
					            		</div>
					            	</div>
					            	@endif
			            		@endif
				            @endforeach
			            	@foreach($user_repo as $i=>$val)
			            		@if ($i > 1 and $i <=3)
			            			@if($i+1 % 2 != 0)
			            			<div class="col-sm-6 nopadding-left ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2">
					            			<div class="mt-2">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs">{{ $val->name }}</span>
										        </a>
					            			</div>
									        <p class="pinned-repo-desc text-gray text-small d-block mt-2 mb-3">{{$val->description}}</p>
					            		</div>
					            	</div>
					            	@else
					            	<div class="col-sm-6 nopadding-right ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2">
									          <div class="mt-2">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs">{{ $val->name }}</span>
										        </a>
					            			</div>
									        <p class="pinned-repo-desc text-gray text-small d-block mt-2 mb-3">{{$val->description}}</p>
					            		</div>
					            	</div>
					            	@endif
			            		@endif
				            @endforeach
			            </div>
			          </div>
			          <div id="menu1" class="tab-pane fade" >
			            <div>
			                <table width="100%" class="table table-striped table-hover table_addition">
			                    <thead >
			                        <tr>
			                            <th style="text-align: center;">Name</th>
			                            <th style="text-align: center;">Additional</th>
			                            <th style="text-align: center;">Price</th>
			                        </tr>
			                    </thead>
			                    <tbody class="append_additional">
			                    </tbody>
			                </table>
			            </div>
			          </div>
			        </div>
				</div>
			</div>
		</div>
	</div>
</body>
<hr>
<footer>
	<div class="footer container">
		<div class="row" >
			<div class="col-sm-12" style="height: 100px;padding-top: 30px">
				<div>
					<ul class="d-inline none" style="display: inline;margin-right: 80px">
					<li class="mr-2">© 2018 <span title="0.51205s from unicorn-2517545031-xp8f2">GitHub</span>, Inc.</li>
					<li class="mr-1"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a></li>
					<li class="mr-1"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a></li>
					<li class="mr-1"><a href="https://help.github.com/articles/github-security/" data-ga-click="Footer, go to security, text:security">Security</a></li>
					<li class="mr-1"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
					<li><a data-ga-click="Footer, go to help, text:help" href="https://help.github.com">Help</a></li>
				</ul>
				<div class="d-inline m-auto">
					<img src="{{ asset('assets/images/git.png') }}" width="20" height="20">
				</div>
				<ul class="d-inline none pull-right" style="display: inline">
			        <li class="mr-1"><a data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
			      	<li class="mr-1"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
			      	<li class="mr-1"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
			      	<li class="mr-1"><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
			        <li class="mr-1"><a href="https://blog.github.com" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
			        <li><a data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>
			    </ul>
				</div>
				
			</div>
		</div>
	</div>
</footer>
</html>
@include('layouts._scripts')
<script type="text/javascript">
	{{-- console.log('{{ $user_detail->name }}'); --}}

</script>