@extends('main')

@section('title', '| View Post' )

@section('content')
    <div class="row">
        <div class="col-md-8">
    <h1>{{ $post->title}}</h1>
    <p class="lead"> {{ $post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
            <dl class="dl-horizontal">
                    <dl> Url: </dl>
                    <dd><a href="{{ route('blog.single', $post->slug) }}">{{url($post->slug)}}</a></dd>
                </dl>
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
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                                                {{Form::open(array( 
    'route' => array( 'posts.destroy', $post->id), 
    'method' => 'delete', 
    'style' => 'display:inline',
    'onsubmit' => "return confirm('Are you sure you want to delete?')",
))}}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])!!}

                    {!! Form::close()!!}
                    </div>
                </div>
            <div class="row">
            <div class="col-md-12">
            {{Html::linkRoute('posts.index', '<< See All Posts', [], ['class'=> 'btn btn-default btn-block btn-h1-spacing'])}}
            </div>
            </div>
            </div>
        </div>
    </div> 
@endsection