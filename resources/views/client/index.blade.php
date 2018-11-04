@extends('client.layouts.master')

@section('body_class', 'home')

@section('body')

	<div class="container">
		<div class="top row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-2 macrolytic-logo">
				</div>
				<div class="col-sm-8 menu">
					<div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link" href="#">Product</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">About Us</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">News</a>
					      </li>
					    </ul>
					</div>
				</div>
				<div class="col-sm-2 contract no-padding">
					<ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" href="#">Contract Us</a>
				      </li>				
				    </ul>
			</div>
		</div>
		<div class="content"></div>
		<div class="bottom"></div>
	</div>

@stop