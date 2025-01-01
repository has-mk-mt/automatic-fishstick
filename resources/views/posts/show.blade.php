<x-layout>
    <x-slot:title>
        {{ $post->title }} | お茶の間
    </x-slot>

    <main class="show">
        <h1>
            {{ $post->title }}
        </h1>
        <div class="show_btn_area">
            <div class="edit-btn2">
                <a href="{{ route('posts.edit', $post) }}" class="edit_btn">編集する！</a>
            </div>
            <div class="delete_btn2">
                <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete-form">
                    @method('DELETE')
                    @csrf
                    <button class="show_delete_btn">削除する！</button>
                </form>
            </div>
        </div>

        <div class="show_post">
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
    </div>

    <div class="comment_area">
        <h2>コメント</h2>
        <ul>
        @forelse ($post->comments as $comment)
            <li class="comment_li">
                {{ $comment->body }}
                <form class="comment-delete-form" method= "post" action="{{ route('posts.comments.destroy', [$post,$comment]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="comment_delete_btn">削除する</button>
                </form>
            </li>

        @empty
            <li>コメントはありません</li>
        @endforelse
        </ul>
    </div>

    <div class="comment_area">
        <h2>コメントを投稿する</h2>
    </div>

        <div>
        <form method="post" action="{{ route('posts.comments.store', $post) }}">
            @csrf
            <div>
                <textarea name="body" id="comment_form"></textarea>
                @error('body')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button class="comment_post_btn">投稿する</button>
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
