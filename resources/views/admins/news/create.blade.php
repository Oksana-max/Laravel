@extends('layouts.admin');
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Добавить новость</h1>
                        <a href="{{ route('admin.news.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i> К списку новостей</a>
                    </div>

                    <!-- Content Row -->
<div class="row">
<div class="col-12">
<form method="post" action= "{{ route('admin.news.store') }}">
    @csrf
            <div class="form-group">
               <label for="category_id">Категория</label>
               <select class="form-control" id="category_id" name="category_id">
                   <option value="0">Выбрать категорию</option>
                   @foreach($categories as $category)
                       <option value="{{ $category->id }}"
                               @if(old('category_id') === $category->id) selected @endif>
                           {{ $category->title }}
                       </option>
                   @endforeach
               </select>
           </div>
           <div class="form-group">
               <label for="title">Заголовок</label>
               <input type="text" class="form-control" name="title" id="title" value = "{{ old('title') }}">
           </div>
           <div class="form-group">
               <label for="author">Автор</label>
               <input type="text" class="form-control" name="author" id="author" value = "{{ old('author') }}">
           </div>
           <div class="form-group">
               <label for="image">Изображение</label>
               <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}">
           </div>

           <div class="form-group">
               <label for="status">Статус</label>
               <select class="form-control" id="status" name="status">
                   <option value="DRAFT" @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
                   <option value="PUBLISHED" @if(old('status') === 'PUBLISHED') selected @endif>PUBLISHED</option>
                   <option value="DELETED" @if(old('status') === 'DELETED') selected @endif>DELETED</option>
               </select>
           </div>
           <div class="form-group">
               <label for="description">Описание</label>
               <textarea class="form-control" name="description" id="description" value = "{{ old('description') }}"></textarea>
           </div>

           <button class="btn btn-primary">Сохранить</button>
       </form>
</div> </dev>

@endsection