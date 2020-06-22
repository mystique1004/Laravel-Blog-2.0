@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

<div class="row">
<!-- form open here -->
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT'])!!}
        <div class="col-md-8">
        {{ Form::label('title', 'Title:')}}
        {{Form::text('title', null, ['class' => 'form-control input-lg'])}} 

        {{Form::label('slug', 'Slug:')}}
        {{Form::text('slug', null, ['class' => 'form-control'])}}

        {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
        {{Form::textarea('body', null, ['class' => 'form-control'])}}
    <h1>{{ $post->title}}</h1>
    <p class="lead"> {{ $post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dl> Created At: </dl>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dl> Updated At: </dl>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at
                    )) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    <!--<a href="#" class="btn btn-danger btn-block"></a> -->
                    </div>
                    <div class="col-sm-6">
                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
                   
                    <!--<a href="#" class="btn btn-success btn-block">Delete</a> -->
                    </div>
                </div>
            
            </div>
        </div><!-- close form here -->

        {!! Form::close()!!}
    </div>  

@stop