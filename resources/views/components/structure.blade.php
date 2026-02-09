<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
  </head>
  <body class="min-h-screen bg-white text-slate-900 [font-size:18px] lg:[font-size:19px]">

{{$slot}}
@livewireScripts
</body>
</html>

