<x-layout>
    <x-slot:title>
        投稿ページ | お茶の間
    </x-slot>

    <main>
        <head>
            <title>管理者ダッシュボード</title>
        </head>
        <body class="admin">
            <title>{{ $title ?? '管理者ダッシュボード' }}</title>
            <h1>管理者ダッシュボード</h1>
            <p>ユーザー数: {{ $userCount }}</p>
            <p>投稿数: {{ $postCount }}</p>
            <p>コメント数: {{ $commentCount }}</p>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="login_btn">
                ログアウト
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @section('content')
                <div class="container">
                    <h1>管理者専用ダッシュボード</h1>
                    <p>ようこそ、{{ auth()->user()->name }}さん！</p>
                </div>
            @endsection
        </body>

        <p class="back-link">
            <a href="{{ route('posts.index') }}">戻る</a>
        </p>
    </main>
</x-layout>
