<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<header>
    <a href="{{ route('posts.index') }}">
        <h1> * -- お茶の間 -- * </h1>
    </a>
    @auth
    <span>ようこそ、 {{ Auth::user()->name }}さん!</span>
    <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="log">
            ログアウト
        </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <a href="{{ route('login') }}" class="log">ログイン</a>
    <a href="{{ route('register') }}" class="register">ユーザー登録</a>
@endauth
</nav>
</header>
<body>
    <div class="container">
       {{ $slot }}
    </div>
</body>
</html>

