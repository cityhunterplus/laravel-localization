@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row" style="margin-bottom: 20px">

        <div class="col-sm-12">

                {!! link_to_route('articles.create', trans('common.label_register'), [], ['class' => 'btn btn-primary']) !!}

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-heading">{{ trans('articles.index_label_title') }}</div>

        <div class="panel-body">

            <table class="table table-default">

                <thead>
                    <tr>
                        <th>{{ trans('articles.index_label_id') }}</th>
                        <th>{{ trans('articles.index_label_title') }}</th>
                        <th>{{ trans('articles.index_label_body') }}</th>
                        <th>{{ trans('common.label_operation') }}</th>
                    </tr>
                </thead>

                <tbody>

                @foreach ($articles as $article)

                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->body }}</td>
                        <td>
                            {!! link_to_action('ArticlesController@show', trans('common.label_show'), $article->id, ['class' => 'btn btn-default btn-sm']) !!}
                            {!! link_to_action('ArticlesController@edit', trans('common.label_edit'), $article->id, ['class' => 'btn btn-info btn-sm']) !!}
                        </td>
                    </tr>

                @endforeach

                </tbody>

            </table>

            {!! $articles->render() !!}

        </div>
        <!-- .penel-body end -->

    </div>
    <!-- .panel end -->

</div>
<!-- .container end -->

@endsection
