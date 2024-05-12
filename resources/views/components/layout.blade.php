<!doctype html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Neucha">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Neucha&display=swap">

    <title>{{ $title ?? 'Мясная Долина' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    <x-menu />
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            btn = document.querySelector('.burger')
            close = document.querySelector('.close')
            menu = document.querySelector('.menu')

            btn.addEventListener('click', () => {
                menu.classList.add('active')
            }) 
            close.addEventListener('click', () => {
                menu.classList.remove('active')
            }) 
        })
    </script>
    <div class="min-h-full flex flex-col">
        <x-header/>
        <main class="flex-auto">
            {{ $slot }}
        </main>
        <x-footer/>
    </div>
</body>
</html>
