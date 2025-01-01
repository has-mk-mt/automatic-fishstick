<x-layout>
    <x-slot:title>
        投稿ページ | お茶の間
    </x-slot>


    <main>
        <form method="POST" action="{{ route('login') }}" class="login_page">
            @csrf
            <p>eメール</p>
            <div>
                <input type="email" name="email" placeholder="eメール" required class="login_form">
            </div>
            <p>パスワード</p>
            <div>
                <input type="password" name="password" placeholder="パスワード" required class="login_form">
            </div>
            <div>
                <button type="submit" class="login_btn">ログイン</button>
            </div>
        </form>

        <p class="back-link">
            <a href="{{ route('posts.index') }}">戻る</a>
        </p>
    </main>
</x-layout>
