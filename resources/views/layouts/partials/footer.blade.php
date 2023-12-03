<footer class="text-sm mx-5 flex items-center border-t border-gray-100 flex-wrap justify-between py-4">
    <div class="flex gap-3">
        @foreach (config('app.supported_locales') as $locale => $language)
            <a class="text-gray-500 hover:text-yellow-500" href="{{ route('language', $locale) }}"><x-dynamic-component
                    :component="'flag-country-' . $language['flag']"
                    class="h-9 w-9" /></a>
        @endforeach
    </div>
    <div class="flex gap-3">
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.footer.about') }}</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.footer.help') }}</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.footer.login') }}</a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.footer.blog') }}</a>
    </div>
</footer>
