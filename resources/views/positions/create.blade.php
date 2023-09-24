@extends('layouts/main')

@section('content')

<div align=center>
  <h4>Добавить должность</h4>
</div>
<p>

<div class="container">
<form action="{{ route('positions.store') }}" method="post">
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

  <p>

  <div align="center">
    <button type="submit" class="btn btn-info">Сохранить</button>
  </div>
</form>
</div>
<br>
<br>

@endsection