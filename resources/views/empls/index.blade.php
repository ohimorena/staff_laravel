@extends('layouts.main')

@section('content')
<div>
<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Пол</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">&#128195;</th>
    </tr>
  </thead>
  
  <div>
    <tbody>
    @foreach($empls as $empl)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $empl->surname }}</td>
        <td>{{ $empl->name }}</td>
        <td>{{ $empl->patronymic }}</td>
        <td>{{ $empl->sex }}</td>
        <td>{{ $empl->date_of_birth }}</td>
        <td><a href="{{ route('empls.show', $empl->id) }}">Подробнее</td></a>
      </tr>
    </tbody>
    @endforeach
  </div>
    
</div>
@endsection 
    