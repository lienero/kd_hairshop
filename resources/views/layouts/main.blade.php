<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Web App</title>
    <!--jquery script-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="/js/index.js"></script>
    <!-- Tailwind Css Style -->
    <!--<link rel="stylesheet" href="/css/main.css">-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="/css/mobiscroll.javascript.min.css">
    <script src="/js/mobiscroll.javascript.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src ="/js/checks.js"></script>
</head>
<body class="font-sans bg-gray-700 text-white">
    @include('sweetalert::alert')
    <nav class="border-b border-gray-400">

        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between py-6">
            <ul class="flex flex-col md:flex-row items-cneter">
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/" class="hover:text-gray-300 font-black text-xl">KD-harisop</a>
                </li>
            </ul>
            <ul class="flex flex-col md:flex-row items-cneter">
                @if(session('member_id'))
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/login/logout" class="hover:text-gray-300 font-bold">ログアウト</a>
                </li>
                @if(session('rank'))
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/manager" class="hover:text-gray-300 font-bold">マネージャーページ</a>
                </li>
                @else
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/mypage" class="hover:text-gray-300 font-bold">マイページ</a>
                </li>
                @endif
                @else
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/login/login" class="hover:text-gray-300 font-bold">ログイン</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/login/register" class="hover:text-gray-300 font-bold">会員登録</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('sliderbox')
    @yield('nav_bar')
    @yield('nav_bar_manager')
    @yield('content')
    @yield('footer')
</body>

</html>