<x-app-layout>
    @forelse ($businesses as $business)
        <h1>{{$business->name}}</h1>
    @empty
        <p>No Business Available.</p>
    @endforelse
</x-app-layout>
