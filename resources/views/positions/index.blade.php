@extends('layouts.main')

@section('content')

  <div class="text-center mb-4">
    <h2>Штатное расписание</h2>
  </div>

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
        @foreach($posits as $posit)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $posit->position }}</td>
            <td>{{ $posit->position_amount }}</td>
            <td>{{ $posit->salary }}</td>
            <td>{{ $posit->created_at }}</td>
            <td>{{ $posit->updated_at }}</td>
            <td>
              <form action="{{ route('posits.edit', $posit->id) }}" method="get">
                <input type="submit" value="Изменить" class="btn btn-info">
              </form>
            <td>
              <form action="{{ route('posits.destroy', $posit->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger">
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </div>
    </table>
  </div>

  <div class="text-center my-4">
    <form action=" {{ route('posits.create') }} " method="get">
      <input type="submit" value="Добавить" class="btn btn-info">
    </form>
  </div>

@endsection