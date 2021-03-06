@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p style="text-align: center"><span class="label label-primary">Категорий {{$categories->count()}}</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p style="text-align: center"><span class="label label-primary">Материалов {{$articles->count()}}</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p style="text-align: center"><span class="label label-primary">Посетителей 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p style="text-align: center"><span class="label label-primary">Сегодня 0</span></p>
        </div>
	 </div>
	 </div>

	 <div class="row">
		<div class="col-sm-6">
			<a class="btn btn-block btn-success" href="{{route('admin.category.create')}}">Создать категорию</a>
            @foreach($categories as $category)
			<a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
				<h4 class="list-group-item-heading">{{$category->title}}</h4>
				<p class="list-group-item-text">
				{{$category->articles()->count()}}
				</p>
			</a>
            @endforeach
		</div>
	<div class="col-sm-6">
		<a class="btn btn-block btn-success" href="{{route('admin.article.create')}}">Создать материал</a>
        @foreach($articles as $article)
		<a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
			<h4 class="list-group-item-heading">{{$article->title}}</h4>
			<p class="list-group-item-text">
				{{$article->categories()->pluck('title')->implode(', ')}}
			</p>
		</a>
        @endforeach
	</div>
@endsection
