@extends('layouts.main');
@section('title') Список новостей - @parent @stop
@section('slug') @parent @stop
@section('content')
@forelse($categories as $category)
<!-- Post preview-->
<div class="post-preview">
        <a href="{{ route('news/show', ['id' => $n['id']]) }}">
        
              <h2 class="post-title">{{ $category->title }}</h2>
              <h3 class="post-subtitle">{{ $category->description }}</h3>
                </a>
                <p class="post-meta">
                            Опубликовал
                 <a href="#!">Админ</a> on {{ now()->format('d-m-Y H:y')}}
                 </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
@empty
<h2>Новостей нет</h2>
@endforelse
                <!-- Post preview-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
@endsection


  
