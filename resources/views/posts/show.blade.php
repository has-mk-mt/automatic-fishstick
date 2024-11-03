<x-layout>
    <x-slot:title>
        {{ $post->title }} | お悩みサイト
    </x-slot>

    <main class="show">
        <h1>
            {{ $post->title }}
            <a href="{{ route('posts.edit', $post) }}">編集する</a>
            <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete-form">
                @method('DELETE')
                @csrf
                <button>削除する！</button>
            </form>
        </h1>
        <p>
            <div>
                <h2>出来事</h2>
                <p>{!! nl2br(e($post->event)) !!}</p>
            </div>

            <div>
                <h2>思考</h2>
                <p>{!! nl2br(e($post->thought)) !!}</p>
                </div>

            <div>
                <h2>感情</h2>
                <p>{!! nl2br(e($post->emotion)) !!}</p>
            </div>
        </p>

        <h2>コメント</h2>
        <ul>
        @forelse ($post->comments as $comment)
            <li>
                {{ $comment->body }}
                <form class="comment-delete-form" method= "post" action="{{ route('posts.comments.destroy', [$post,$comment]) }}">
                    @csrf
                    @method('DELETE')
                    <button>削除する</button>
                </form>
            </li>

        @empty
            <li>コメントはありません</li>
        @endforelse
        </ul>

        <h2>コメントを投稿する</h2>

        <div>
        <form method="post" action="{{ route('posts.comments.store', $post) }}">
            @csrf
            <div>
                <textarea name="body"></textarea>
                @error('body')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button>投稿する</button>
            </div>
        </form>
        </div>



        <p class="back-link">
            <a href="{{ route('posts.index') }}">戻る</a>
        </p>
    </main>

    <script>
        'use strict';

        {
            const form = document.querySelector('#delete-form');
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                if (confirm('削除してよろしいですか？') === false) {
                    return;
                }

                form.submit();
            });

            const commentForms = document.querySelectorAll('.comment-delete-form');
                commentForms.forEach((commentForm) => {
                    commentForm.addEventListener('submit', (e) => {
                    e.preventDefault();

                    if (confirm('削除してよろしいですか？') === false) {
                        return;
                    }

                    commentForm.submit();
                });
            });

        }
    </script>
</x-layout>
