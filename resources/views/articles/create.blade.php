@extends('layouts.app')

@section('content')

<div class="container">

    <div class="panel panel-default">

        <div class="panel-heading">{{ trans('articles.create_headline') }}</div>

        <div class="panel-body">

            {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('title', trans('articles.create_label_title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', trans('articles.create_label_body')) !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

        </div>
        <!-- .penel-body end -->

    </div>
    <!-- .panel end -->

</div>
<!-- .container end -->

@endsection