@extends('layouts.main')

@section('content')

<div class="container text-center">

  <div><a href="{{ route('empls.index') }}">Назад</a></div><p>

  <div>
    <table class="table table-bordered">

      <tr>
        <th scope="col">Фамилия, имя, отчество</th>
        <td>{{ $empl->surname }}</td>
        <td>{{ $empl->name }}</td>
        <td>{{ $empl->patronymic }}</td>
      </tr>

      <tr>
        <th scope="col">Пол</th>
        <td>{{ $empl->sex }}</td>
        <th scope="col">Дата рождения</th>
        <td>{{ $empl->date_of_birth }}</td>
      </tr>
    
      <tr>
        <th scope="col">Должность</th>
        <td></td>
        <th scope="col">Оклад</th>
        <td></td>
      </tr>

    </table>
  </div>
  <br>

  <form action="{{ route('empls.edit', $empl->id) }}" method="get">
    <input type="submit" value="Изменить" class="btn btn-info">
  </form><br>

  
  <form action="{{ route('empls.destroy', $empl->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Удалить" class="btn btn-danger">
  </form><br><br>
  
</div>

@endsection