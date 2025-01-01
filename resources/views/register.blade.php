<x-layout>
    <x-slot:title>
        投稿ページ | お茶の間
    </x-slot>

    <main>
        <h1>ユーザー登録</h1>
        <form method="POST" action="{{ route('register') }}" class="register_page">
            @csrf
            <div>
                <p>ユーザー名</p>
                <input type="text" name="name" placeholder="ユーザー名" required class="register_form">
            </div>
            <div>
                <p>eメール</p>
                <input type="email" name="email" placeholder="eメール" required class="register_form">
            </div>
            <div>
                <p>パスワード</p>
                <input type="password" name="password" placeholder="パスワード" required class="register_form">
            </div>
            <div>
                <p>パスワード（確認）</p>
                <input type="password" name="password_confirmation" placeholder="パスワード(確認)" required class="register_form">
            </div>
            <div>
                <button type="submit" class="register_btn">登録する！</button>
            </div>
        </form>

        <p class="back-link">
            <a href="{{ route('posts.index') }}">戻る</a>
        </p>
    </main>
</x-layout>
