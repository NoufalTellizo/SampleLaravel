<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen w-screen flex overflow-y-auto bg-neutral-50">
        <livewire:components.sidebar-two />
        <div class="flex flex-col w-full bg-neutral-50">
            <livewire:components.header-two />
           {{ $slot }}
        </div>
    </div>
</body>

</html>
