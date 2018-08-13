<!DOCTYPE html>
<html>
<head>
    @include('layouts._head')
	<title></title>
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
		  	<svg height="32" class="github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
		  		<path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
		  		</path>
		  	</svg>
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
		  			<svg class="github" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">
		  				<path fill-rule="evenodd" d="M13.99 11.991v1H0v-1l.73-.58c.769-.769.809-2.547 1.189-4.416.77-3.767 4.077-4.996 4.077-4.996 0-.55.45-1 .999-1 .55 0 1 .45 1 1 0 0 3.387 1.229 4.156 4.996.38 1.879.42 3.657 1.19 4.417l.659.58h-.01zM6.995 15.99c1.11 0 1.999-.89 1.999-1.999H4.996c0 1.11.89 1.999 1.999 1.999z">
		  				</path>
		  			</svg>
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
	          <a href="#" class="dropdown-toggle HeaderNavlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          	<img alt="@adiyani17a" class="avatar float-left" src="https://avatars1.githubusercontent.com/u/37235189?s=40&amp;v=4" height="20" width="20" >
	          	<span class="caret"></span>
	          </a>
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
							<img alt="" width="100%" height="100%" class="avatar width-full" src="{{ $user_detail->avatar_url }}" style="border-radius: 5%">
						</a>
					</div>
					<div class="col-sm-12 mb-2">
						<h2>{{ $user_detail->name }}</h2>
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
			          <li class="width-20">
			          	<a class="" data-toggle="tab" href="#">Repositories&nbsp;<span class="badge badge-pill">{{ $user_detail->public_repos }}</span>
			          	</a>
			          </li>
			          <li class="width-20">
			          	<a class="" data-toggle="tab" href="#">Stars&nbsp;<span class="badge badge-pill">{{ $user_detail->public_gists }}</span>
			          	</a>
			          </li>
			          <li class="width-20">
			          	<a class="" data-toggle="tab" href="#">Followers&nbsp;<span class="badge badge-pill">{{ $user_detail->followers }}</span>
			          	</a>
			          </li>
			          <li class="width-20">
			          	<a class="" data-toggle="tab" href="#">Following&nbsp;<span class="badge badge-pill">{{ $user_detail->following }}</span>
			          	</a>
			          </li>
			        </ul>
					<div class="tab-content"  >
			          <div id="overview" class="tab-pane fade in active">
			            <p class="">Pinned Repositories</p>
			            <div class="col-sm-14 nopadding">
			            	@foreach($user_repo as $i=>$val)
			            		@if ($i <= 3)
			            			@if($i+1 % 2 != 0)
			            			<div class="col-sm-6 nopadding-left ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2 ">
					            			<div class="mt-1  mb-1 col-sm-12 nopadding-left">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2 ml-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs"><b>{{ $val->name }}</b></span>
										        </a>
					            			</div>
					            			<div class="mb-2 col-sm-12 nopadding-left middle">
									        	<p class="pinned-repo-desc text-gray text-small d-block  ml-2 font-small">{{$val->description}}</p>
					            			</div>
					            			<div class="col-sm-12">
					            				<span class="d-inline-block mr-2"><i class="fa fa-cog" style="color: orange"></i> {{ $val->language }}</span>
					            				<a href="{{ $val->stargazers_url }}" class="d-inline-block grey mr-2"><i class="fa fa-star "></i>{{ $val->stargazers_count }}</a>
					            				<a href="{{ $val->contributors_url }} " class="pinned-repo-meta muted-link">
									              <i class="fa fa-circle-o-notch">{{ $val->watchers_count }}</i>
									            </a>
					            			</div>
					            		</div>
					            	</div>
					            	@else
					            	<div class="col-sm-6 nopadding-right ">
					            		<div class="col-sm-14 border-black box-git nopadding-left  mb-2 ">
					            			<div class="mt-1 mb-1 col-sm-12 nopadding-left">
					            				<a href="{{ $val->html_url }}" class="text-bold mt-2 ml-2">
										          	<span class="repo js-repo" title="mailchimp-nodejs">{{ $val->name }}</span>
										        </a>
					            			</div>
									        <div class="mb-2 col-sm-12 nopadding-left middle">
									        	<p class="pinned-repo-desc text-gray text-small d-block  ml-2 font-small">{{$val->description}}</p>
					            			</div>
					            			<div class="col-sm-12">
					            				<span class="d-inline-block mr-2"><i class="fa fa-cog" style="color: orange"></i> {{ $val->language }}</span>
					            				<a href="{{ $val->stargazers_url }}" class="d-inline-block grey mr-2"><i class="fa fa-star "></i>{{ $val->stargazers_count }}</a>
					            				<a href="{{ $val->contributors_url }} " class="pinned-repo-meta muted-link">
									              <i class="fa fa-circle-o-notch">{{ $val->watchers_count }}</i>
									            </a>
					            			</div>
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
					<img src="{{ asset('assets/images/git.png') }}" width="30" height="30">
				</div>
				<ul class="d-inline none pull-right" style="display: inline;margin-top: 5px">
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