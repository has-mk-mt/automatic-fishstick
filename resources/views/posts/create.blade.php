<x-layout>
    <x-slot:title>
        投稿ページ | お悩みサイト
    </x-slot>

    <main class="create">
        <h1>投稿ページ</h1>
        <form method="post" action="{{ route('posts.store') }}" class="postcreate">
        @csrf
        <div>
            <label>
                タイトル
                <input type="text" name='title' value="{{ old('title') }}">
            </label>
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>
                出来事
                <textarea name="event" id="textarea_form">{{ old('event') }}</textarea>
            </label>
            @error('event')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>
                思考
                <textarea name="thought" id="textarea_form">{{ old('thought') }}</textarea>
            </label>
            @error('thought')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>
                感情
                <textarea name="emotion" id="textarea_form">{{ old('emotion') }}</textarea>
            </label>
            @error('emotion')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button class="create_post_btn">投稿する！</button>
    </form>
        <p class="back-link">
            <a href="{{ route('posts.index') }}">戻る</a>
        </p>
    </main>
</x-layout>
