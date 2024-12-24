@extends('layouts/main')

@section('content')

  <div class="text-center mb-4">
    <h4>Добавить должность</h4>
  </div>

  <form action="{{ route('posits.store') }}" method="post">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Должность</label>
      <div class="col-sm-10">
        <input type="text" name="position" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Количество ставок</label>
      <div class="col-sm-10">
        <input type="text" name="position_amount" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Оклад</label>
      <div class="col-sm-10">
        <input type="text" name="salary" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="text-center my-4">
      <button type="submit" class="btn btn-info">Сохранить</button>
    </div>
  </form>

@endsection