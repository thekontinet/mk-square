<x-app-layout>
    @forelse ($businesses as $business)
        <h1>{{$business->name}}</h1>
    @empty
        <p>No Business Available. <a class="block text-blue-400 underline" href="{{route('business.create')}}">Create One</a></p>
    @endforelse
</x-app-layout>
