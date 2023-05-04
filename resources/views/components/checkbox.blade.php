@props(['disabled' => false, 'messages' => null, 'label' => ''])

<div>
    <div class="flex items-center gap-2">
        <input {{$attributes->merge(['type'=> 'checkbox', 'class' => "w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"])}}>
        @if($label)<label for="{{$attributes->get('id')}}" class="block text-sm font-light dark:text-slate-400">{{$label}}</label>@endif
    </div>

    {{-- errors --}}
    @if ($messages)
    <ul class='mt-2 space-y-1 text-sm text-red-600 dark:text-red-400'>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
