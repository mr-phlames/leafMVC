<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ _env('APP_NAME', 'My Leaf MVC App') }}</title>
    <link rel="shortcut icon" href="https://leafphp.dev/logo-circle.png" type="image/x-icon">

    {{-- assets() points to the public/assets folder --}}
    <link rel="stylesheet" href="{{ assets('css/styles.css') }}">

    {{--
        You generally want to keep all your css and js in the public folder
        unless you are using a bundler like vite. vite() looks for assets in
        the app/views folder by default. You can uncomment the line below to
        use vite.

        Be sure to run `npm install` and then `npm run dev` or `npm run build` first.
    --}}
    {{-- {{ vite('css/app.css') }} --}}

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700;display=swap">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="overflow-hidden">
    {{-- @include('components.topnav') --}}

    <main class="flex flex-col justify-center items-center h-svh">
        <div class="flex flex-col justify-center items-center min-h-96 w-full max-w-[500px] bg-[url(/public/assets/img/eclipse.svg)] bg-cover pt-28">
            <h1 class="text-6xl font-light">Leaf MVC</h1>
            <p class="text-lg mt-5">Lightweight MVC for humans</p>
        </div>
        <p class="mt-16 mb-32 rounded-xl border border-[rgba(172,175,176,0.3)] py-3 px-8">Get started by editing<code class="text-[#5e79c7]"> app/views/index.blade.php</code></p>
        <div class="flex gap-5">
            <a class="border border-slate-300 hover:border-slate-500 py-3 px-6 rounded-full" href="https://leafphp.dev/"
                target="_blank">Leaf Docs</a>
        </div>
    </main>
</body>

</html>
