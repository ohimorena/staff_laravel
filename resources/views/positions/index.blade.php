@extends('layouts.main')

@section('content')
<p>
  <h1 align="center">Штатное расписание</h1>
</p>

<div class="container">
  <div>
    <table class="table">

    <thead class="thead-dark">
      <tr>
        <th scope="col">№</th>
        <th scope="col">Должность</th>
        <th scope="col">Количество ставок</th>
        <th scope="col">Оклад</th>
        <th scope="col">Создано</th>
        <th scope="col">Обновлено</th>
        <th scope="col">&#9998;</th>
        <th scope="col">&#10008;</th>
      </tr>
    </thead>
  
    <div>
      <tbody>
      @foreach($positions as $position)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $position->position }}</td>
          <td>{{ $position->position_amount }}</td>
          <td>{{ $position->salary }}</td>
          <td>{{ $position->created_at }}</td>
          <td>{{ $position->updated_at }}</td>
          <td>
            <form action="{{ route('positions.edit', $position->id) }}" method="get">
              <input type="submit" value="Изменить" class="btn btn-info">
            </form>
          <td>
            <form action="{{ route('positions.destroy', $position->id) }}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="Удалить" class="btn btn-danger">
            </form>
          </td>
        
        </tr>
      </tbody>
      @endforeach
    </div>
  </div>
  <br>
</div>

<div class="container">
  <form action=" {{ route('positions.create') }} " method="get">
    <input type="submit" value="Добавить" class="btn btn-info">
  </form>
</div>
<br>
@endsection