@props(['active' => false])

<li><a class="{{$active ? 'bg-red-500': 'hover:bg-gray-700'}} block py-2 px-4 rounded-l-full"  {{ $attributes }} > {{ $slot }}</a></li>