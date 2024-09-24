<header class="relative">
    <!-- Mobile -->
    <nav class="relative z-10" aria-label="Top">
        <!-- Secondary navigation -->
        <div class="bg-white lg:hidden">
            <div class="mx-auto max-w-7xl lg:px-6">
                <div class="flex h-14 sm:h-12 items-center">
                    <!-- Logo (md+) -->
                    <a href="{{ url('/') }}" class="hidden sm:flex sm:items-center sm:flex-shrink-0">
                        <img class="relative top-[13px] z-10 h-[74px] w-auto" alt="JUUL DANMARK" loading="lazy" src="{{ asset('gfx/logo.svg') }}">
                    </a>

                    <!-- Mobile menu and logo (md-) -->
                    <a href="{{ url('/') }}" class="flex flex-shrink-0 sm:hidden">
                        <img class="h-14 w-14 sm:h-12 bg-stiletto-500" alt="JUUL DANMARK" loading="lazy" src="{{ asset('gfx/juul.svg') }}">
                    </a>

                    <div class="flex flex-grow h-full">
                        <!-- Flyout menus -->
                        <div class="flex inset-x-0 bottom-0 pl-4">
                            <div class="flex flex-shrink flex-wrap h-full space-x-2">
                                <div class="relative flex h-full">
                                    <a href="{{ url('/') }}" class="relative flex h-full items-center gap-x-1 border-b-2 px-2 pt-0.5 text-sm font-medium transition-colors duration-200 ease-out border-stiletto-500 text-stiletto-500">Kurser</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Desktop -->
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" alt="" loading="lazy" width="100%" height="100%" style="height: var(--navbar-height)" src="{{ asset('gfx/warehouse-header.jpg') }}">
        <div class="absolute inset-0" style="background: var(--navbar-bg); mix-blend-mode: multiply;" aria-hidden="true"></div>
    </div>
    <div class="relative">
        <a href="{{ url('/') }}" class="hidden lg:flex mx-auto max-w-7xl flex-shrink-0 items-center px-4 sm:px-6 lg:px-8">
            <img width="230px" height="74px" alt="JUUL DANMARK" class="block z-10 h-[74px] w-auto" src="{{ asset('gfx/logo.svg') }}">
        </a>
    </div>
    <div class="relative mx-auto max-w-7xl lg:px-8">
        <nav class="hidden lg:flex lg:space-x-12 lg:mt-2 lg:mb-2 lg:text-3xl lg:tracking-tight" aria-label="Global">
            <a href="{{ url('/') }}" class="pt-2.5 pb-1 text-3xl text-white font-medium tracking-wide border-b-2 transition duration-100 border-b-stiletto-500">Kurser</a>
        </nav>
    </div>

    <div class="p-4 sm:px-6 flex flex-col justify-center mx-auto max-w-7xl min-h-44 sm:min-h-56 lg:mt-8 lg:px-8 lg:pb-10">
        <div class="relative">
            <h1 class="text-center uppercase tracking-wide text-3xl font-black text-white sm:text-3xl lg:text-6xl">{{ $heading }}</h1>
        </div>
    </div>
</header>
