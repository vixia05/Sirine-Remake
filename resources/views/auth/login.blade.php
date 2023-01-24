<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>

    </style>
</head>

<body class="bg-prism-svg dark:bg-prism-svg-dark">
    <div class="flex justify-center min-w-full min-h-screen">
        <div
            class="flex flex-col justify-center w-2/5 max-w-lg gap-2 px-10 py-4 my-auto rounded-lg shadow-lg lg:w-1/5 bg-gradient-to-r from-slate-100 to-slate-300 bg-opacity-80 dark:bg-slate-900 shadow-slate-500 dark:shadow-slate-800 min-w-fit magic-card">
            <img src="{{ asset('img/logo-only.png') }}" class="w-24 mx-auto">
            <h3 class="mx-auto text-3xl text-slate-800 dark:text-slate-100 ">Sirine</h3>
            <span class="text-center text-slate-800 dark:text-slate-100">-- Sistem Informasi Kinerja --</span>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col gap-4 my-4">
                    <div
                        class="flex justify-start gap-2 transition duration-300 ease-in-out border-b border-slate-800 dark:border-slate-50 focus-within:border-b-blue-500 focus-within:brightness-125">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4 mx-auto my-auto text-slate-800 dark:text-slate-100">
                            <path
                                d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                        </svg>
                        <input type="text" id="np" name="np"
                            class="w-full py-1 pb-1 border-none outline-none appearance-none text-slate-800 dark:text-slate-100 bg-inherit placeholder-slate-800 dark:placeholder-slate-100 focus:ring-0"
                            placeholder="Username">
                    </div>
                    <div
                        class="flex justify-start gap-2 transition duration-300 ease-in-out border-b border-slate-800 dark:border-slate-50 focus-within:border-b-blue-500 focus-within:brightness-125">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4 mx-auto my-auto text-slate-800 dark:text-slate-100">
                            <path fill-rule="evenodd"
                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" id="password" name="password"
                            class="w-full py-1 pb-1 border-none outline-none text-slate-800 dark:text-slate-100 bg-inherit placeholder-slate-800 dark:placeholder-slate-100 focus:ring-0"
                            placeholder="Password">
                    </div>
                    <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="py-1 mt-4 text-blue-100 transition duration-300 ease-in-out bg-blue-600 rounded shadow-lg brightness-125 shadow-blue-600/30 hover:bg-blue-600/90">
                        Sign-in
                    </button>
                    <a href="{{ route('andon.verifPikai') }}" data-mdb-ripple="true" data-mdb-ripple-color="light"
                        class="py-1 text-blue-100 transition duration-300 ease-in-out bg-blue-600 rounded shadow-lg brightness-125 shadow-blue-600/30 hover:bg-blue-600/90">
                        Andon
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
