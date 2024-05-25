
<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h2 class=""font-bold text-lg>{{$job['title']}}</h2>
    <p>
        This job pay{{$job['salary']}}
    </p>
</x-layout>