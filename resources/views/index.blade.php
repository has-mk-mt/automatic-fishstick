<x-layout>
    <x-slot:title>
        タイトル
    </x-slot>

    <header></header>
    <main>
        <h1>タイトル </h1>
        <section class="about">
            <p>せつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめいせつめい</p>
        </section>
            {{-- <a href="{{ route('posts.create') }}">投稿はこちら</a> --}}
        <a href="{{ route('posts.create') }}">投稿はこちら</a>

        <section class="pics">
            <div class="box">

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

                <div class="box_pic">
                  <img src="">
                </div>

              </div>

        </section>

        <section class="posts">
            <h2>皆さんの投稿</h2>
            <ul>
                @forelse ($posts as $post)
                <li>
                    {{-- <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> --}}
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </li>
                @empty
                <li>投稿がありません！</li>
                @endforelse
            </ul>
        </section>
        <div>
            <a href="{{ route('posts.create') }}">投稿はこちら</a>
        </div>
    </main>
    <footer></footer>
</x-layout>

