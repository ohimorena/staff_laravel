@extends('layouts.main')

@section('content')

  <div class="container text-center">
    <div class="my-3"><a href="{{ route('empls.index') }}">Назад</a></div>

    <div class="mb-4">
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
        @foreach($empl->positions as $posit)
        <tr>
          <th scope="col">Должность</th>
          <td>{{ $posit->position }}</td>
          <th scope="col">Оклад</th>
          <td>{{ $posit->salary }}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <form action="{{ route('empls.edit', $empl->id) }}" method="get">
      <div class="my-3">
        <input type="submit" value="Изменить" class="btn btn-info">
      </div>
    </form>

    <form action="{{ route('empls.destroy', $empl->id) }}" method="post">
      @csrf
      @method('delete')
      <div class="my-3">
        <input type="submit" value="Удалить" class="btn btn-danger">
      </div>
    </form>
    
  </div>

@endsection