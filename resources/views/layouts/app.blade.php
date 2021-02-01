<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('styles')
    <title>Sandboxing Laravel | {{$title ?? 'Untitled'}}</title>
</head>
<body>
    <h1><a href="/">Home</a></h1>
    @yield('content')
    @yield('scripts')
</body>
</html>
