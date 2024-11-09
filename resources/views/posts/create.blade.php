<x-layout>
    <x-slot:title>
        投稿ページ | お茶の間
    </x-slot>

    <main class="create">
        <h1>* -- 投稿ページ -- *</h1>
        <form method="post" action="{{ route('posts.store') }}" class="postcreate">
        @csrf
        <div class="post_lbl">
            <label>
                <h2>タイトル</h2>
                <input type="text" name='title' value="{{ old('title') }}" placeholder="(例)仕事で失敗してしまった、先生に怒られてしまった など">
            </label>
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="post_lbl">
            <label>

                <h2>出来事</h2>
                <textarea name="event" id="textarea_form" placeholder="(例)タイトルに書いた出来事の詳細 どんな状況だったのか など">{{ old('event') }}</textarea>
            </label>
            @error('event')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="post_lbl">
            <label>
                <h2>思考</h2>
                <textarea name="thought" id="textarea_form" placeholder="(例)失敗続きでとても辛かった、みんなの前で怒られて恥ずかしかった など">{{ old('thought') }}</textarea>
            </label>
            @error('thought')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="post_lbl">
            <label>
                <h2>感情</h2>
                <textarea name="emotion" id="textarea_form" placeholder="(例)辛い、しんどい、疲労感、自己否定、恥ずかしい、悲しい など、感じた感情を一言で表してみましょう。(何個でも大丈夫です)">{{ old('emotion') }}</textarea>

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
