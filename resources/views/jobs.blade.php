<x-layout>
    <x-slot:heading>
        AboutPage
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
       <li>
            <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['Id'] }}">
                <strong>{{ $job['Title'] }}</strong> : {{ $job['salary'] }}
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>