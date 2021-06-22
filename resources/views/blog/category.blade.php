@extends('layouts.app')


@section('title', $category->title . " - BLOG")

@section('content')
{{--    <link rel="stylesheet" href="{{ asset('css/styler.css') }}">--}}
    <div class="container">
        <div class="card">
            <span  class="card-header-news">
                <h2>
                    {{$category->title}}
                </h2>
            </span>
            @forelse ($articles as $article)
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <h2><a class="link-style-news" href="{{route('article', $article->slug)}}">{{$article->title}}</a> </h2>
                    <p>{!! $article->description_short !!}</p>
                    @if($articles->count() > 1)
                        <hr>
                    @endif
                </div>
            </div>
        @empty
            <h2 class="text-center">Пусто</h2>
        @endforelse
            {{$articles->links()}}
        </div>
    </div>
@endsection
