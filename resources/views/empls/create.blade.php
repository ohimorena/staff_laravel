@extends('layouts/main')

@section('content')

<div align=center>
  <h4>Добавить сотрудника</h4>
</div>
<p>

<div class="container">
<form action="{{ route('empls.store') }}" method="post">
  @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Фамилия</label>
    <div class="col-sm-10">
    <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Имя</label>
    <div class="col-sm-10">
    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Отчество</label>
    <div class="col-sm-10">
    <input type="text" name="patronymic" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

  </div>
  <fieldset>
    <div class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Пол</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex1" value="мужской" checked>
          <label class="form-check-label" for="sex1">
            мужской
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex2" value="женский">
          <label class="form-check-label" for="sex2">
            женский
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <p>

    <label for="localdate">Дата рождения</label>
    <input type="date" id="localdate" name="date_of_birth">
  </p>

  <select class="form-select" multiple aria-label="Multiple select example" name="posit_id">
    <option selected>ДОЛЖНОСТЬ</option>

    @foreach ($posits as $posit)
      <option value="{{ $posit->id }}">{{ $posit->position }}</option>
    @endforeach

  </select>
  <p></p>

  <div align="center">
    <button type="submit" class="btn btn-info">Сохранить</button>
  </div>
</form>
</div>
<br>
<br>

@endsection