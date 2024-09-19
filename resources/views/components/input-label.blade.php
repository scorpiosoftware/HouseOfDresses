@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#b69357]']) }}>
    {{ $value ?? $slot }}
</label>
