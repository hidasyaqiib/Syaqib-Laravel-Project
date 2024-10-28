<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  @vite('resources/css/app.css')
<body>
  <h1 class="text-3xl font-bold underline text-orange-700 p-10 bg-sky-950 text-center">
    About                                                                                                                                                                                                                                                                             
  </h1>
  
  <p class="text-3xl" >
    Hello, Im {{ $name }}!!!
  </p>

  <p class="text-3xl" >
    I live in {{ $address }}, and my email is {{ $email }}
  </p>
</body>
</html> 