<x-layout>
    <x-header>
        <x-slot:heading>{{ $category->header }}</x-slot:heading>
    </x-header>

    <main class="relative bg-gray-100">
        <div class="relative overflow-hidden bg-white">
            <div class="relative max-w-7xl mx-auto my-6 px-4 sm:px-6 lg:px-8 lg:pt-3 lg:pb-6">
                <ul class="mx-auto text-center grid gap-x-2 gap-y-5 sm:gap-12 grid-cols-1 sm:grid-cols-3 sm:space-y-0 lg:max-w-7xl">
                    @foreach($category->courses as $course)
                        <li class="flex flex-col items-center">
                            <a href="{{ url(request()->segment(1) . "/$course->slug") }}" class="flex flex-col items-center h-full group" tabindex="-1">
                                <picture class="relative flex justify-center motion-reduce:transition-colors active:transition-shadow duration-100 ease-in-out">
                                    <source srcset="{{ asset('gfx/course/' . $course->gfx . '.webp') }}" type="image/webp">
                                    <img
                                        class="w-auto max-h-[168px] sm:max-h-none sm:w-[168px] object-contain"
                                        alt="{{ $course->name }}"
                                        loading="lazy"
                                        width="100%"
                                        height="100%"
                                        src="{{ asset('gfx/course/' . $course->gfx . '.png') }}"
                                    >
                                </picture>
                                <div class="flex-grow mt-2">
                                    <h2 class="text-base leading-6 text-gray-900 font-bold uppercase sm:text-lg sm:mb-2">{!! $course->name !!}</h2>
                                </div>
                                <div class="flex-shrink">
                                    <p class="text-gray-500 group-hover:text-gray-900">
                                        {{ (intval($course->days) ? $course->days . ' dage' : 'Online') }}
                                    </p>
                                </div>
                                <div class="mt-2 sm:mt-3 py-0.5 px-8 rounded-md text-sm text-white bg-rhino-500 focus:outline-none focus:ring focus:ring-rhino-500/50 group-focus:outline-none group-focus:ring group-focus:ring-3 group-focus:ring-rhino-500/50 group-hover:shadow group-hover:bg-rhino-600 motion-reduce:transition-colors duration-100 ease-in-out">
                                    Læs mere
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
</x-layout>
