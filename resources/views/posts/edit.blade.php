<x-layout>
    <x-slot:title>
        編集ページ | お茶の間
    </x-slot>

<main class="create">
    <h1>* -- 編集ページ -- *</h1>
   <form method="post" action="{{ route('posts.update', $post) }}" class="postcreate">
    @method('PATCH')
    @csrf
    <div class="post_lbl">

            <label>
                <h2>タイトル</h2>
                <input type="text" name='title' value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
            <p>{{ $message }}</p>
            @enderror
    </div>

    <div class="post_lbl">
        <label>
            <h2>出来事</h2>
            <textarea name="event" id="textarea_form">{{ old('event', $post->event) }}</textarea>
        </label>
        @error('event')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div class="post_lbl">
        <label>
            <h2>思考</h2>
            <textarea name="thought" id="textarea_form">{{ old('thought', $post->thought) }}</textarea>
        </label>
        @error('thought')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div class="post_lbl">
        <label>
            <h2>感情</h2>
            <textarea name="emotion" id="textarea_form">{{ old('emotion', $post->emotion) }}</textarea>
        </label>
        @error('emotion')
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button class="create_post_btn">更新する！</button>
    </div>
   </form>
    <p class="back-link">
        <a href="{{ route('posts.show', $post) }}">戻る</a>
    </p>
</main>
</x-layout>
