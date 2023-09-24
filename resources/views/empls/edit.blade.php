@extends('layouts/main')

@section('content')

<div align=center>
  <h4>Редактировать данные</h4>
</div>
<p>

<div class="container">
<form action="{{ route('empls.update', $empl->id) }}" method="post">
  @csrf
  @method('patch')

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Фамилия</label>
    <div class="col-sm-10">
    <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $empl->surname }}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Имя</label>
    <div class="col-sm-10">
    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $empl->name }}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Отчество</label>
    <div class="col-sm-10">
    <input type="text" name="patronymic" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $empl->patronymic }}">
    </div>

  </div>
  <fieldset>
    <div class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Пол</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex1" value="мужской" {{ ($empl->sex == "мужской")? "checked" : "" }}>
          <label class="form-check-label" for="sex1">
            мужской
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex2" value="женский" {{ ($empl->sex == "женский")? "checked" : "" }}>
          <label class="form-check-label" for="sex2">
            женский
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <p>

    <label for="localdate">Дата рождения</label>
    <input type="date" id="localdate" name="date_of_birth" value="{{ $empl->date_of_birth }}">
  </p>

  <div align="center">
    <button type="submit" class="btn btn-info">Сохранить</button>
  </div>
</form>
</div>
<br>
<br>

@endsection