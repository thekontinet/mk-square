@props(['disabled' => false, 'messages' => null, 'label' => ''])

<div class="mb-6">
    {{-- label --}}
    @if($label)<label for="{{$attributes->get('id')}}" class="block mb-2 text-sm font-medium dark:text-slate-400">{{$label}}</label>@endif

    {{-- input --}}
    <div class="relative" x-data="{show: false}">
        <input x-ref='input' {{$attributes->class([
            'w-full py-2 px-2.5 text-sm rounded-sm border-0 ring-slate-500 ring-1',

            'bg-gray-50 border-gray-500 text-gray-900 dark:text-gray-400 placeholder-gray-700 dark:placeholder-gray-500 focus:ring-primary-500 block dark:bg-gray-700 dark:border-gray-500' => !$messages,

            "bg-red-50 border-red-500 text-red-900 dark:text-red-400 placeholder-red-700 dark:placeholder-red-500 focus:ring-red-500  block dark:bg-gray-700 dark:border-red-500" => !!$messages
        ])}}/>

        @if ($attributes->get('type') === 'password')
            <div class="absolute top-0 right-0 flex items-center justify-end h-full pr-4 cursor-pointer">
                <span x-show='!show' @click="$refs.input.type = 'text'; show=true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 dark:stroke-slate-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                <span x-show='show' @click="$refs.input.type = 'password'; show=false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 dark:stroke-slate-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </span>
            </div>
        @endif
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
