<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
}; ?>

{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav> --}}

<div class="bg-primary">
    <nav class="container mx-auto px-6 py-8" x-data="{ menu: false }">
        <div class="flex items-center justify-between">
            <div class="text-white font-bold text-xl">
                <a href="#"><img src="{{ asset('images/webteractive-logo.png') }}" alt=""></a>
            </div>
            <div class="hidden md:block">
                <ul class="flex items-center space-x-8">
                    <li><a href="#" class="text-white font-jakarta hover:text-secondary">News</a></li>
                    <li><a href="#" class="text-white font-jakarta hover:text-secondary">Blogs</a></li>
                    <li><a href="#" class="text-white font-jakarta hover:text-secondary">Tutorials</a></li>
                    <li><a href="#" class="text-white font-jakarta hover:text-secondary">Videos</a></li>
                    <li><a href="#" class="text-white font-jakarta hover:text-secondary">Podcast</a></li>
                    @auth
                        <li x-data="{ dropdown: false }">
                            <button @click="dropdown = !dropdown"
                                class="relative text-white  transition-all duration-200 focus:overflow-visible w-max h-max p-2 overflow-hidden flex flex-row items-center justify-center bg-transparent gap-2 rounded-lg border-0">
                                <span>
                                    {{ $user->name }}
                                </span>
                                <svg :class="{ 'rotate-0': dropdown, 'rotate-180': !dropdown }"
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                                </svg>
                                <div x-show="dropdown"
                                    class="absolute shadow-lg -bottom-20 left-0 w-full h-max p-2 bg-white border border-zinc-200 text-black rounded-md flex flex-col gap-2">
                                    <span wire:click="logout"
                                        class="flex gap-2 items-center text-red-500 hover:text-red-800 p-2 rounded-lg">
                                        <p class="font-jakarta">Logout</p>
                                    </span>
                                </div>
                            </button>
                        </li>
                    @endauth
                </ul>
            </div>
            <div class="md:hidden">
                <button @click="menu = !menu" class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div x-show="menu" class="md:hidden">
            <ul class="mt-4 space-y-4">
                <li><a href="#"
                        class="block px-4 py-2 text-white active:text-secondary bg-gray-900 rounded">News</a></li>
                <li><a href="#"
                        class="block px-4 py-2 text-white active:text-secondary bg-gray-900 rounded">Blogs</a></li>
                <li><a href="#"
                        class="block px-4 py-2 text-white active:text-secondary bg-gray-900 rounded">Tutorials</a></li>
                <li><a href="#"
                        class="block px-4 py-2 text-white active:text-secondary bg-gray-900 rounded">Videos</a></li>
                <li><a href="#"
                        class="block px-4 py-2 text-white active:text-secondary bg-gray-900 rounded">Podcast</a></li>
            </ul>
        </div>

    </nav>
</div>
