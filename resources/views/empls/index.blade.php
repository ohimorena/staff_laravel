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
          <th scope="col">Должность</th>
          <th scope="col">&#128195;</th>
        </tr>
      </thead>
      <tbody>
      @foreach($empls as $empl)
        <tr>
          <td>{{ $empls->perPage() * ($empls->currentPage() - 1) + $loop->iteration }}</td>
          <td>{{ $empl->surname }}</td>
          <td>{{ $empl->name }}</td>
          <td>{{ $empl->patronymic }}</td>
          <td>
          @foreach($empl->positions as $posit)
            {{ $posit->position }} <br>
          @endforeach
          </td>
          <td><a href="{{ route('empls.show', $empl->id) }}">Подробнее</td></a>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <div>
    {{ $empls->links() }}
  </div>
@endsection