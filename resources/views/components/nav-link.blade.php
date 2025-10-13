@props(["active" => false])

<a {{ $attributes }}  class="{{ $active ? "bg-gray-950/50 text-white rounded-md":"text-white rounded-md"  }} hover:bg-white/5 hover:text-white px-3 py-2 text-sm font-medium">{{ $slot }}</a>
