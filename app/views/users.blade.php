@extends('_master')

@section('title')
    Assignment -3 for CSCIE-15 class- List random set of users
@stop

@section('maincontent')
    <div class="container theme-showcase" role="main">  	
    <div class="jumbotron">
        <h1>Randomly creates a set of users</h1>
    </div>
    
    <ul class="nav nav-tabs">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span>  Welcome</a></li>
        <li class="active"><a href="/users"><span class="glyphicon glyphicon-user"></span> Users</a></li>
        <li><a href="/fillertext"><span class="glyphicon glyphicon-comment"></span> Messages</a></li>
    </ul>
    <p/>

    {{ Form::open(array('url' => '/users', 'method' => 'GET')) }}

		{{ Form::label('no_of_users','Enter no of users to generate:') }} &nbsp;
		{{ Form::text('no_of_users', $no_of_users)}} &nbsp;
		{{ Form::submit('GO!') }}

	{{ Form::close() }}


    <div class="panel panel-info">
        <div class="panel-heading">              
            <h3 class="panel-title">{{$no_of_users}} random users generated</h3>
        </div>
        <div class="panel-body">
            @foreach($users as $user_name => $user)

				<section>
					<h2>{{ $user_name }}</h2>
					<p>{{$user}}</p>
				</section>

			@endforeach
        </div>

    </div>
    
</div>

@stop