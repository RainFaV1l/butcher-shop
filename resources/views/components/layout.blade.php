<!doctype html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Neucha">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Neucha&display=swap">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <title>{{ $title ?? 'Мясная Долина' }}</title>
{{--    <link rel="stylesheet" href="{{ asset('build/assets/app-Cy5JjQrf.css') }}">--}}
{{--    <script src="{{ asset('build/assets/app-CrG2wnyX.js') }}" defer></script>--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    <x-menu />
    <div class="fixed bottom-4 right-4 alert transition duration-300">
        <x-alert type="success" class="bg-green-700 text-green-100 p-4 rounded" />
        <x-alert type="warning" class="bg-yellow-700 text-yellow-100 p-4 rounded" />
        <x-alert type="danger" class="bg-red-700 text-red-100 p-4 rounded" />
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.querySelector('.burger')
            const close = document.querySelector('.close')
            const menu = document.querySelector('.menu')
            const alert = document.querySelector('.alert')

            if(alert) {
                setTimeout(() => {
                    alert.classList.add('opacity-0');
                }, 3000)
            }

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
