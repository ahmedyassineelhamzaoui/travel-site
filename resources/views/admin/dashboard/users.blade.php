@extends('layouts.dashboard-app')

@section('title', 'users')

@section('content')

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    
    <div id="main-wrapper">

        
		
		@include('layouts.dashboard-header')

        @include('layouts.dashboard-sidebar')
		
		
        <div class="content-body">
			<div class="container-fluid">
				<div class=" form-head d-flex flex-wrap mb-4 align-items-center">
					<h2 class="text-black mr-auto font-w600 mb-3">Users</h2>

				</div>
			
            </div>
		</div>
    </div>
	
        

        @include('layouts.dashboard-footer')


  
@endsection
