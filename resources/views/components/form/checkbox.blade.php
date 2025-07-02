@props([
    'name',
    'label' => null,
    'checked' => false,
])

<div class="flex items-center space-x-2">
    <input
        type="checkbox"
        id="{{ $name }}"
        name="{{ $name }}"
        value="1"
        {{ old($name, $checked) ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'rounded text-blue-600 border-gray-300 dark:border-gray-600']) }}
    >
    @if ($label)
        <label for="{{ $name }}" class="text-sm text-gray-700 dark:text-gray-300">{{ $label }}</label>
    @endif
</div>
