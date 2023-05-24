
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script> 
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Products List</title>
</head>
<body>
  <div class="bg-white">
  
                  
                <main class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
@yield ('content')
@include('master.footer')
</main>    
</div>
@yield('scripts') 
</body>
</html>