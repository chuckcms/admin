@aware(['title'])

<x-navbar class="d-flex" expand="lg" dark-mode logo="https://laravel.com/img/logomark.min.svg" logo-text="ChuckCMS">
    <ul class="navbar-nav nav-pills me-auto mb-2 mb-lg-0">
        <x-nav-item>
            <x-nav-link label="Dashboard" url="/"></x-nav-link>
        </x-nav-item>

        <x-nav-item>
            <x-nav-link label="Paginas" url="/pages"></x-nav-link>
        </x-nav-item>

        <x-nav-dropdown label="Navigatie ">
            <li>
                <x-nav-link 
                    dropdown 
                    label="Menu's" 
                    url="/menus"
                ></x-nav-link>
            </li>
            <li>
                <x-nav-link 
                    dropdown 
                    label="Redirects" 
                    url="/redirects"
                ></x-nav-link>
            </li>
        </x-nav-dropdown>

        <x-nav-dropdown label="Gebruikers ">
            <li>
                <x-nav-link 
                    dropdown 
                    label="Overzicht" 
                    url="/users"
                ></x-nav-link>
            </li>
            <li>
                <x-nav-link 
                    dropdown 
                    label="Rollen & Rechten" 
                    url="/roles-permissions"
                ></x-nav-link>
            </li>
        </x-nav-dropdown>

        <x-nav-item>
            <x-nav-link label="Templates" url="/templates"></x-nav-link>
        </x-nav-item>

        <x-nav-item>
            <x-nav-link label="Formulieren" url="/forms"></x-nav-link>
        </x-nav-item>

        <x-nav-dropdown label="Content ">
            <li>
                <x-nav-link 
                    dropdown 
                    label="Media" 
                    url="/media"
                ></x-nav-link>
            </li>
            <li>
                <x-nav-link 
                    dropdown 
                    label="Resources" 
                    url="/resources"
                ></x-nav-link>
            </li>
            <li>
                <x-nav-link 
                    dropdown 
                    label="Repeaters" 
                    url="/repeaters"
                ></x-nav-link>
            </li>
        </x-nav-dropdown>

        <x-nav-item last>
            <x-nav-link label="Instellingen" url="/settings"></x-nav-link>
        </x-nav-item>
    </ul>

    <form role="search">
        <x-input id="forminput" placeholder="Search" name="help" aria-label="Search" />
    </form>
</x-navbar>

<div class="bg-white">
    <div class="container-sm bg-white">
        <h1 class="h2 text-black py-4">{{ $title }}</h1>
    </div>
</div>