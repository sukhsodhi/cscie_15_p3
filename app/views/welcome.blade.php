@extends('_master')

@section('title')
    Assignment -3 for CSCIE-15 class- Welcome Page
@stop

@section('maincontent')
    <div class="container theme-showcase" role="main">  	
    <div class="jumbotron">
        <h1>Developers best friends</h1>
        <p>This is a sample application lets you  </p>
        <ul>
            <li>Create a set of random users</li>
            <li>Create random Lorum Ipsom text</li>
        </ul>
    </div>
    

    <ul class="nav nav-tabs">
        <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span>  Welcome</a></li>
        <li><a href="/users"><span class="glyphicon glyphicon-user"></span> Users</a></li>
        <li><a href="/fillertext"><span class="glyphicon glyphicon-comment"></span> Messages</a></li>
    </ul>
    <p/>

    <div class="panel panel-info">
        <div class="panel-heading">              
            <h3 class="panel-title">Random Users</h3>
        </div>
        <div class="panel-body">
            This <a href="/users">link</a> creates a random list of users.
        </div>

    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">              
            <h3 class="panel-title">Random Lorum Ipsum text</h3>
        </div>
        <div class="panel-body">
            This <a href="/fillertext">link</a> creates a filler text (lorum Ipsum)
        </div>

    </div>

</div>

@stop