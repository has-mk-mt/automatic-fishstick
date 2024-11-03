<x-layout>
    <x-slot:title>
        編集ページ | お悩みサイト
    </x-slot>

<main class="create">
    <h1>編集ページ</h1>
   <form method="post" action="{{ route('posts.update', $post) }}">
    @method('PATCH')
    @csrf
    <div>
        <label>
            タイトル
            <input type="text" name='title' value="{{ old('title', $post->title) }}">
        </label>
        @error('title')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>
            出来事
            <textarea name="event">{{ old('event', $post->event) }}</textarea>
        </label>
        @error('event')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>
            思考
            <textarea name="thought">{{ old('thought', $post->thought) }}</textarea>
        </label>
        @error('thought')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>
            感情
            <textarea name="emotion">{{ old('emotion', $post->emotion) }}</textarea>
        </label>
        @error('emotion')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button>更新する！</button>
    </div>
   </form>
    <p class="back-link">
        <a href="{{ route('posts.show', $post) }}">戻る</a>
    </p>
</main>
</x-layout>
