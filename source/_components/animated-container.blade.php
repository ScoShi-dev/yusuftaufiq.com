@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge([
  'class' => implode(' ', [
    'transition',
    'ease-in-out',
    'delay-150',
    'duration-300',
    'hover:text-blue-700',
    'hover:-translate-y-1',
    'hover:scale-110',
    'active:text-blue-700',
    'active:-translate-y-1',
    'active:scale-110',
    'focus:text-blue-700',
    'focus:-translate-y-1',
    'focus:scale-110',
  ])
]) }}>
  {{ $slot }}
</{{ $tag }}>