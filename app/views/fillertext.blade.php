@extends('_master')

@section('title')
    Assignment -3 for CSCIE-15 class- Filler text to create
@stop

@section('maincontent')
    <div class="container theme-showcase" role="main">  	
    <div class="jumbotron">
        <h1>Randomly creates a set of users</h1>
    </div>
    
    <ul class="nav nav-tabs">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span>  Welcome</a></li>
        <li><a href="/users"><span class="glyphicon glyphicon-user"></span> Users</a></li>
        <li class="active"><a href="/fillertext"><span class="glyphicon glyphicon-comment"></span> Messages</a></li>
    </ul>
    <p/>

    {{ Form::open(array('url' => '/fillertext', 'method' => 'GET')) }}

		{{ Form::label('no_of_paras','Enter no of paragraphs to generate:') }} &nbsp;
		{{ Form::text('no_of_paras', $no_of_paras)}} &nbsp;
		{{ Form::submit('GO!') }}

	{{ Form::close() }}


    <div class="panel panel-info">
        <div class="panel-heading">              
            <h3 class="panel-title">{{$no_of_paras}} random paragraphs generated</h3>
        </div>
        <div class="panel-body">
            @foreach($paras as $id=> $paragraph)

				<section>
					<p>{{$paragraph}}</p>
				</section>

			@endforeach
        </div>

    </div>
    
</div>

@stop