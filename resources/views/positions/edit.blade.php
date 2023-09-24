@extends('layouts/main')

@section('content')

<div align=center>
  <h4>Редактировать данные</h4>
</div>
<p>

<div class="container">
<form action="{{ route('positions.update', $position->id) }}" method="post">
  @csrf
  @method('patch')

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Должность</label>
    <div class="col-sm-10">
    <input type="text" name="position" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $position->position }}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Количество ставок</label>
    <div class="col-sm-10">
    <input type="text" name="position_amount" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $position->position_amount }}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Оклад</label>
    <div class="col-sm-10">
    <input type="text" name="salary" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $position->salary }}">
  </div>
  <br>
  <br>

  <div align="center">
    <button type="submit" class="btn btn-info">Сохранить</button>
  </div>
</form>
</div>
<br>
<br>

@endsection