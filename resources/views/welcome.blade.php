<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project Template</title>
    @notifyCss
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-50 gap-4">
        <h1 class="text-2xl sm:text-3xl font-semibold text-gray-900">Laravel Projects Template</h1>
        <small class="text-sm text-gray-700">Edit file in
            <code class="bg-gray-200 px-2 py-1 rounded">resources/</code>
        </small>
    </div>
    <x-notify::notify />
    @notifyJs
</body>

</html>