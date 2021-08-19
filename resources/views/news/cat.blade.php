

@extends('layouts.main')
@section('title')  - @parent @stop
@section('slug') @parent @stop
@section('content')
<h1>Все о спорте</h1>
<br>
 @foreach($newsList as $n)
    <div>
        <strong><a href="<?=route('articale/show', [
            'id' => $n['id']
        ])?>"><?=$n['title']?></a></strong>
        <p><?= $n['description']?></p>
    </div>
@endforeach
@endsection



