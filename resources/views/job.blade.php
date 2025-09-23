<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h1>{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
    <h4><a href="/jobs">Back to all jobs</a></h4>
</x-layout>