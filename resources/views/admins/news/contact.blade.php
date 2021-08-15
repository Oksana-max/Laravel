@extends('layouts.admin');
@section('content')

<form method="post" action= "">
    @csrf
           <div class="form-group">
               <label for="name">Имя</label>
               <input type="name" class="form-control" name="name" id="name" value = "{{ old('name') }}">
           </div>
           <div class="form-group">
               <label for="message">Сообщение:</label>
               <textarea class="form-control" name="message" id="message" value = "{{ old('message') }}"></textarea>
           </div>


           <button class="btn btn-primary">Отправить</button>
       </form>
@endsection