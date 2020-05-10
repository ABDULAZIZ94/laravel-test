<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>W3Adda - Laravel 6 CRUD Example Tutorial</title>
  <link href="{{ asset('scss/app.scss') }}" rel="stylesheet" type="text/scss" />
</head>
<body>
  <div class="container">
    <h2>W3Adda - Laravel 6 CRUD Example</h2>
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>