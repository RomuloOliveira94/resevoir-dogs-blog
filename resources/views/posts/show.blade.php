<x-app-layout :title="$post->title">
    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
        <img class="w-fit my-2 rounded-lg" src="{{ $post->geThumbnailImage() }}" alt="thumbnail">
        <h1 class="text-4xl font-bold text-left text-gray-800">
            {{ $post->title }}
        </h1>
        <div class="mt-2 flex justify-between items-center">
            <div class="flex py-5 text-base items-center">
                <x-posts.author :author="$post->author" size="md" />
                <span class="text-gray-500 text-sm">| {{ $post->getReadingTime() }} min read</span>
            </div>
            <div class="flex items-center">
                <span class="text-gray-500 mr-2">{{ $post->published_at->diffForHumans() }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-5 h-5 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div
            class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
            <div class="flex items-center">
                <livewire:like-button :key="'likes' . $post->id" :$post>
            </div>
            <div>
                <div class="flex items-center">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-gray-500 hover:text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>

        <div class="prose article-content py-3 text-gray-800 text-lg text-justify">
            {!! $post->body !!}
        </div>
        {{-- @foreach ($post->body_with_content as $data)
            <div>
                {{ $data['title'] }}
                <p>{{ $data['text'] }}</p>
                @foreach ($data['content'] as $item)
                    <div id="decks-card" class="row bg-dark p-2 mb-3 text-light">
                        <div class="col-4 m-auto">
                            <div class="d-flex flex-column">
                                <a href="#" class="text-decoration-none">
                                    <h1 class="text-lg-start text-center">{{ $deck->find($item)->title }}</h1>
                                </a>
                                <a href="/user/id" class="text-decoration-none text-light">
                                    <p class="fs-4 text-lg-start text-center bg-primary p-1 rounded-3">Autor: Romas
                                        o alonso
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <small class="fs-4 text-lg-start text-center">Custo: 3.5</small>
                                <small class="fs-4 text-lg-start text-center">Poder: 3.8</small>
                            </div>
                        </div>
                        <div class="col-8 bg-gradient rounded-3 g-0 p-2 row">
                            @foreach ($deck->find($item)->deck as $cards)
                                <div class="col-lg-2 col-4">
                                    <a href="{{ $cards['name'] }}">
                                        <img src="{{ $cards['image'] }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            @endforeach

                            <div class="row mt-2 m-auto">
                                <button href="#" class="btn btn-outline-primary btn">
                                    Copiar
                                    <i class="fa-solid fa-copy fs-3 text-end"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach --}}
        <div class="flex items-center space-x-4 mt-10">
            @foreach ($post->categories as $category)
                <x-posts.category-badge :$category />
            @endforeach
        </div>
        <livewire:post-comments :key="'comments' . $post->id" :$post />
    </article>
</x-app-layout>
