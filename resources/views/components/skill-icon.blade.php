@props(['src', 'alt' => ''])

<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center 
            border-2 border-gray-400 hover:scale-110 transition-transform duration-300 ease-in-out">
  <img src="{{ asset($src) }}" alt="{{ $alt }}" class="w-10 h-10 object-contain">
</div>
