@props(['name'])

@error($name)
    <p class="xs text-red-500 italic font-semibold mt-1">{{ $message }}</p>
@enderror
