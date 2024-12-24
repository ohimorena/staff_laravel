@extends('layouts/main')

@section('content')

  <div class="text-center mb-4">
    <h4>Добавить сотрудника</h4>
  </div>

  <form action="{{ route('empls.store') }}" method="post">
    @csrf

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Фамилия</label>
      <div class="col-sm-10">
        <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('surname') }}">
      </div>
      @error('surname')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Имя</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('name') }}">
      </div>
      @error('name')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Отчество</label>
      <div class="col-sm-10">
        <input type="text" name="patronymic" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('patronymic') }}">
      </div>
      @error('patronymic')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>

    <fieldset>
      <div class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Пол</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sex1" value="мужской" {{ old('sex') == 'мужской' ? 'checked' : '' }}>
            <label class="form-check-label" for="sex1">мужской</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sex2" value="женский" {{ old('sex') == 'женский' ? 'checked' : '' }}>
            <label class="form-check-label" for="sex2">женский</label>
          </div>
        </div>
      </div>
    </fieldset>

    <p>
      <label for="localdate">Дата рождения</label>
      <input type="date" id="localdate" name="date_of_birth" value="{{ old('date_of_birth') }}">
      @error('date_of_birth')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </p>

    <label for="form-select">ДОЛЖНОСТЬ</label>
    <select class="form-select" id="form-select" multiple aria-label="Multiple select example" name="posit_id[]">
      @foreach ($posits as $posit)
        <option 
          {{ old('posit_id') == $posit->id ? 'selected' : '' }}
          value="{{ $posit->id }}">{{ $posit->position }}</option>
      @endforeach
      @error('posit_id')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </select>

    <div class="text-center my-4">
      <button type="submit" class="btn btn-info">Сохранить</button>
    </div>

  </form>
  
@endsection