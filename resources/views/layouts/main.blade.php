<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Персонал</title>
</head>

<body>
  <div class="container mt-4 mb-4">
    @section('navigation')
      <div class="row">
        <nav>
          <ul>
            <li><a href=" {{ route('empls.index') }} ">Список сотрудников</a></li>
            <li><a href=" {{ route('empls.create') }} ">Создать нового сотрудника</a></li>
            <li><a href=" {{ route('posits.index') }} ">Штатное расписание</a></li>
          </ul>
        </nav>
      </div>
    @show

    @yield('content')
  </div>
</body> 
</html>
                
