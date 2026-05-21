<nav class="sticky w-full top-0 left-0 z-50 border-b-8 border-b-nw-blue-600 bg-nw-blue-50" x-data="{ open: false }">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">{{-- Primary Navigation Menu  --}}
        <div class="flex h-20 justify-between">
            <div class="flex shrink-0 items-center">{{-- Logo - click on LOGO - GO Home --}}
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-12" />
                </a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex  print:hidden">{{--  Navigation --}}

                <x-dropdown2> {{--  --------- Get Data --------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Data') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'data_shop']) }}">
                            {{ __('Where to get Data') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}">
                            {{ __('Datasets Available and Record Counts') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('nw-guides') }}">
                            {{ __('Data User Guides') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'filestore']) }}">
                            {{ __('Supplementary Information') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'information']) }}">
                            {{ __('Known Issues and Workarounds on the Data Portal') }}
                        </x-dropdown-link>
                        <x-dropdown-link
                            href="http://exadcon.rothamsted.ac.uk/livedata/collection.jsf?template=weather&node=4826&units=metric">
                            {{ __('Met Data Live') }}
                        </x-dropdown-link>

                    </x-slot>
                </x-dropdown2>

                <x-dropdown2> {{--  --------- Impact --------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Impact') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('publications') }}">
                            {{ __('Publications') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'advanced_technologies']) }}">
                            {{ __('Advanced Technologies') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">
                            {{ __('Agri-modelling') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'key_findings']) }}">
                            {{ __('Key Findings') }}
                        </x-dropdown-link>

                    </x-slot>
                </x-dropdown2>
                <x-dropdown2> {{--  --------- Engage --------- --}}
                    {{--  anything to do with data  --}}
                    <x-slot name="trigger">
                        {{ __('Collaborate') }}
                    </x-slot>
                    <x-slot name="content">

                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'study_with_us']) }}">
                            {{ __('Study with us') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'work_with_us']) }}">
                            {{ __('Work with us') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'site_visits']) }}">
                            {{ __('Visit us') }}
                        </x-dropdown-link>
{{--                         <x-dropdown-link href="{{ route('content.with.page', ['page' => 'hackathon']) }}">
                            {{ __('Rothamsted Data Hackathon') }}
                        </x-dropdown-link> --}}


                    </x-slot>
                </x-dropdown2>  {{--  --------- NEWS --------- --}}
<x-dropdown2 href="{{ route('content.with.page', ['page' => 'news']) }}">
                    <x-slot name="trigger">
                        {{ __('News') }}
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'news']) }}">
                            {{ __('News & Press Releases') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="https://bsky.app/profile/thefarmplatform.bsky.social">
                        <img src="{{ asset('logos/bluesky-logo-blue.svg') }}" alt="blueskylogo" class="h-4 inline-block align-middle">
                            {{ __('Follow us on Bluesky') }}
                        </x-dropdown-link>
                    </x-slot>

                </x-dropdown2>
                <x-dropdown2> {{--  --------- ABOUT --------- --}}
                    {{--  the usual contacts, team, maps and so on  --}}
                    <x-slot name="trigger">
                        {{ __('About') }}
                    </x-slot>
                    <x-slot name="content">
                        {{-- <x-dropdown-link href="{{ route('content.with.page', ['page' => 'index']) }}">
                            {{ __('Content') }}
                        </x-dropdown-link> --}}
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'overview']) }}">
                            {{ __('Overview and Hypothesis') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'map']) }}">
                            {{ __('Map of the Farm Platform') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'timeline']) }}">
                            {{ __('Timeline of Events') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'facilities']) }}">
                            {{ __('Facilities') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('content.with.page', ['page' => 'contacts']) }}">
                            {{ __('The Team') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown2>

                {{-- ---------  Search that has not been implemented yet !  ---------
                <x-dropdown2>
                    <x-slot name="trigger">
                        <span
                            class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-1 text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                            id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>
                    </x-slot>
                    <x-slot name="content">
                        <div class="justify-middle flex">
                            <x-input class="ml-2 mt-1 block w-full" id="examplesearch" type="search"
                                placeholder="Search" />
                            <span
                                class="dark:border-neutral-400 flex items-center whitespace-nowrap px-3 py-1 text-nw-blue-700 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                                id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </span>
                        </div>
                    </x-slot>
                </x-dropdown2>
                --}}
                @if (Route::has('login') && env('FILAMENT_USE') == true) {{--  ---------  Profile Picture of the logged in person --------- --}}
                    @auth
                        <x-dropdown2>
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex rounded-full border-2 border-transparent text-sm transition focus:border-nw-blue-200 focus:outline-hidden">
                                        <img class="aspect-square h-16 rounded-full border-4 border-nw-blue-600 object-scale-down p-1"
                                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button
                                            class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:bg-gray-50 focus:outline-hidden active:bg-gray-50"
                                            type="button">
                                            {{ Auth::user()->name }}

                                            <svg class="-me-0.5 ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('dashboard') }}">
                                    {{ __('My Platform') }}
                                </x-dropdown-link>
                                <!-- Account Management
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Manage Account') }}
                                                            </div>
                                                        -->

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif
                                <div class="border-t border-nw-blue-700"></div>
                                <x-dropdown-link href="{{ env('FILAMENT_PATH') }}">
                                    {{ __('Admin') }}
                                </x-dropdown-link>
                                <div class="border-t border-nw-blue-700"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown2>
                    @endauth
                @endif
            </div>
            <div class="-me-2 flex items-center sm:hidden">{{--  Hamberger Menu Don't gorget to update --}}
                <button
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-hidden"
                    @click="open = ! open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">{{-- Responsive Navigation Menu --}}
        <div class="space-y-1 pb-3 pt-2">

            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
                {{ __('Area 2') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
                {{ __('Area 3') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('content.with.page', ['page' => 'index']) }}" :active="request()->routeIs('content')">
                {{ __('Area 4') }}
            </x-responsive-nav-link>
        </div>
        @if (Route::has('login'))
            <div class="space-y-1 pb-3 pt-2">
                <div class="border-t border-gray-200 pb-1 pt-4">
                    @auth
                        <!-- Responsive Settings Options -->

                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif
                        <x-responsive-nav-link href="{{ env('FILAMENT_PATH') }}">
                            {{ __('Admin') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link href="{{ route('login') }}">
                            Log in
                        </x-responsive-nav-link>

                        @if (Route::has('register'))
                            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </x-responsive-nav-link>
                        @endif

                    @endauth
                </div>
            </div>
        @endif
    </div>
    {{--  This is an ecxample of link without drop down
                <x-nav-link href="{{ route('content.with.page', ['page' => 'data_collection']) }}" :active="request()->routeIs('data_collection')">
                    {{ __('Get Data') }}
                </x-nav-link> --}}
</nav>
