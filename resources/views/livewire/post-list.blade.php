<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-600">
            @if ($this->activeCategory || $search)
                <button class="gray-500 text-xs mr-3" wire:click='clearFilters()'>X</button>
            @endif
            @if ($this->activeCategory)
                <x-posts.category-badge :category="$this->activeCategory" />
            @endif
            @if ($search)
                <span class="ml-2">
                    {{ __('blog.containing') }}: <strong>{{ $search }}</strong>
                </span>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-label>
                <span class="text-gray-500">{{ __('blog.popular') }}</span>
            </x-label>
            <x-checkbox wire:model.live="popular" />
            <button class="{{ $sort === 'desc' ? 'text-gray-900 py-4 border-b border-gray-700' : 'text-gray-500 py-4' }}"
                x-data="{ sort: '{{ $sort }}' }" x-on:click="sort = 'desc'; $wire.setSort('desc')">
                {{ __('blog.latest') }}
            </button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 py-4 border-b border-gray-700' : 'text-gray-500 py-4' }}"
                x-data="{ sort: '{{ $sort }}' }" x-on:click="sort = 'asc'; $wire.setSort('asc')">
                {{ __('blog.oldest') }}
            </button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item wire:key="{{ $post->id }}" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
