@props(['title'])
<section {{$attributes->class("w-full px-6 py-10 mt-6 overflow-hidden bg-white text-gray-900 shadow-md dark:bg-gray-800 sm:rounded-sm")}}>
    <h4 class="my-3 font-light text-center uppercase dark:text-slate-300">{{$title}}</h4>
    {{$slot}}
</section>
