<x-html 
    :html-class="isset($htmlClass) ? $htmlClass : 'h-100'"
    :title="isset($title) ? $title . ' | ' . config('app.name') : ''"
    :class="isset($class) ? $class : 'd-flex flex-column h-100 light-version'"
>
    <x-slot name="head">
        <x-social-meta
            title="{{ $component->title() }}"
            description="{{ $component->title() }}"
        />

        @vite(['resources/js/app.js', 'resources/sass/app.scss'])

        @livewireStyles
        @chuckuiStyles
    </x-slot>

    <main role="main" class="flex-shrink-0">

        <x-chuck-admin::layouts.navigation />
        
        {{ $slot }}

    </main>

    <x-chuck-admin::layouts.footer />

    @livewireScripts
    @chuckuiScripts
</x-html>