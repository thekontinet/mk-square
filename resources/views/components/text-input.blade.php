@props(['disabled' => false, 'messages' => null, 'label' => ''])

<div class="mb-6">
    {{-- label --}}
    @if($label)<label for="{{$attributes->get('id')}}" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">{{$label}}</label>@endif

    {{-- input --}}
    <input {{$attributes->class([
        'bg-gray-50 border border-gray-500 text-gray-900 dark:text-gray-400 placeholder-gray-700 dark:placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-500' => !$messages,
        
        "bg-red-50 border border-red-500 text-red-900 dark:text-red-400 placeholder-red-700 dark:placeholder-red-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-red-500" => !!$messages
    ])}}/>

    {{-- errors --}}
    @if ($errors)
    <ul class='mt-2 text-sm text-red-600 dark:text-red-400 space-y-1'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
