@props(['active'])

<nav class="three-d-nav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('frontend.home') }}" class="three-d-logo">
                        <span class="text-2xl font-bold text-indigo-600">Jalundra</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <x-three-d-nav-link href="{{ route('frontend.home') }}" :active="request()->routeIs('frontend.home')">
                        Home
                    </x-three-d-nav-link>
                    <x-three-d-nav-link href="{{ route('frontend.services') }}" :active="request()->routeIs('frontend.services')">
                        Services
                    </x-three-d-nav-link>
                    <x-three-d-nav-link href="{{ route('frontend.gallery') }}" :active="request()->routeIs('frontend.gallery')">
                        Gallery
                    </x-three-d-nav-link>
                    <x-three-d-nav-link href="{{ route('frontend.contact') }}" :active="request()->routeIs('frontend.contact')">
                        Contact
                    </x-three-d-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .three-d-nav {
        position: relative;
        z-index: 10;
    }
    .three-d-logo {
        transform-style: preserve-3d;
        transition: transform 0.5s ease;
    }
    .three-d-logo:hover {
        transform: rotateY(180deg);
    }
</style> 