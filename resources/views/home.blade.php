<x-layout>
    <x-slot:headings>
        Home Page
    </x-slot:headings>

    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">
            <strong class="text-red-600">
                {{ $job['title'] }}
            </strong>
            pays {{ $job['salary'] }} per year.
        </a href="/jobs/{}"><br>

    @endforeach
</x-layout>
