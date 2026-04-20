<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>

         <script src="http://cdn.tailwindcss.com"></script>
      <!-- Favicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />


  </head>
  <body class="bg-gray-100 h-screen overflow-hidden">


<div class="flex h-full">
    <aside class="w-64 bg-slate-900 text-white ">
    @include('components.sidebar')
    </aside>

    <main class="flex-1 overflow-y-auto p-4">
        <div class="space-y-4">
            <div class="h-[1000px] ">
          @yield('content')
        </div>
    </main>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-pkA87J96DdW1c5sXa8Z9V3d4f0Fv3pGz4H7l9g8e2c9pT+fXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
