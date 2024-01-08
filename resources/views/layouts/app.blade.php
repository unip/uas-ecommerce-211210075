<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ app('name', 'Mansyurina Baby Care') }}</title>

  <link rel="stylesheet" href="/css/app.css">
  @yield('style')
</head>
<body>

  @yield('content')
    
  <!-- JavaScript -->
  @yield('script')
</body>
</html>