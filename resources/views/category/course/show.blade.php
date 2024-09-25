<x-layout>
    <x-header>
        <x-slot:heading>{!! $course->name !!}</x-slot:heading>
    </x-header>

    <main class="relative bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 lg:py-16">
            <article class="mx-auto prose lg:prose-xl">
                <h3>{{ $course->title }}</h3>
                <p>
                    {{ $course->description }}
                </p>
            </article>
        </div>
    </main>
</x-layout>
