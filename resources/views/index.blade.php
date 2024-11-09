<x-layout>
    <x-slot:title>
        お茶の間
    </x-slot>

    <header> * -- お茶の間 -- *</header>
    <main>
        <h1>* -- お茶の間 -- *</h1>
        <div class="main_pic">

            <img src="{{ asset('img/IMG_6013.2.jpg') }}">
          </div>
        <section class="about">
            <p>こんにちは！<br>このサイトはみなさんの抱えているお悩みやモヤモヤを文字にして投稿することで、気持ちの整理や辛い気持ちが少しでも和らぐような構成を目指して作成しました。<br>
                投稿ページでは、タイトルに加え、出来事の詳細と、どう感じたかという皆さんの思い思いの気持ち、そしてそれを不安や怒り、悲しみや焦燥感など分類することで、<br>気持ちの整理が出来るような構成になっています。<br>
                また投稿に対してコメントすることで、共感したりしてもらえたり、お互いに励ましあえるようなコメント機能も作成しました。<br>
                みなさんが温かいお茶でも飲みながらほっとした気持ちになれるような、そんな願いを込めてこのサイトをつくりました。<br>
                よければぜひゆっくり過ごしてくださいね(^^)
            </p>
        </section>
            {{-- <a href="{{ route('posts.create') }}">投稿はこちら</a> --}}
        <a href="{{ route('posts.create') }}" class="post">投稿はこちら</a>

        <section class="pics">
            <div class="box">

                <div class="box_pic">
                  <img src="{{ asset('img/IMG_6006.2.jpg') }}">
                </div>

                <div class="box_pic">
                  <img src="{{ asset('img/IMG_6008.2.jpg') }}">
                </div>

                <div class="box_pic">
                  <img src="{{ asset('img/IMG_6061.2.jpg') }}">
                </div>

                <div class="box_pic">
                  <img src="{{ asset('img/IMG_6065.2.jpg') }}">
                </div>

                <div class="box_pic">
                    <img src="{{ asset('img/IMG_6014.2.jpg') }}">
                  </div>

                  <div class="box_pic">
                    <img src="{{ asset('img/IMG_6025.2.jpg') }}">
                  </div>

              </div>

        </section>

        <section class="posts">
            <h2>みなさんの投稿</h2>
            <ul>
                @forelse ($posts as $post)
                <li class="index_li">
                    {{-- <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> --}}
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </li>
                @empty
                <li>投稿がありません！</li>
                @endforelse
            </ul>
        </section>
        <div>
            <a href="{{ route('posts.create') }}" class="post">投稿はこちら</a>
        </div>
    </main>
    <footer></footer>
</x-layout>

