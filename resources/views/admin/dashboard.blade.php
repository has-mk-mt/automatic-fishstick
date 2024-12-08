<!DOCTYPE html>
<html>
<head>
    <title>管理者ダッシュボード</title>
</head>
<body>
    <h1>管理者ダッシュボード</h1>
    <p>ユーザー数: {{ $userCount }}</p>
    <p>投稿数: {{ $postCount }}</p>
    <p>コメント数: {{ $commentCount }}</p>
    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        ログアウト
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
