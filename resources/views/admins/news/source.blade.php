@extends('layouts.admin');
@section('content')

<form method="post" action= "">
    @csrf
           <div class="form-group">
               <label for="name">Имя заказчика</label>
               <input type="name" class="form-control" name="name" id="name" value = "{{ old('name') }}">
           </div>
           <div class="form-group">
               <label for="tel">Номер телефона</label>
               <input type="tel" class="form-control" name="tel" id="tel" value = "{{ old('tel') }}">
           </div>
           <div class="form-group">
               <label for="email">Емайл:</label>
               <textarea class="form-control" name="email" id="email" value = "{{ old('email') }}"></textarea>
           </div>
           <div class="form-group">
               <label for="message">Сообщение:</label>
               <textarea class="form-control" name="message" id="message" value = "{{ old('message') }}"></textarea>
           </div>


           <button class="btn btn-primary">Отправить</button>
       </form>
@endsection