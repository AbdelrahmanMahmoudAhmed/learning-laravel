<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title' , 'unKnown page') </title>
</head>
<body>
    @yield('content')
    @section('sidebar')
    this is the main sidebar from the layout
    <br>
    @show
</body>
</html>
