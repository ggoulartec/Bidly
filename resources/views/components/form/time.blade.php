@props([
    'name',
    'label' => null,
    'value' => '',
    'required' => false,
])

<div class="space-y-1">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ $label }}
        </label>
    @endif
    <input
        type="time"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-white dark:text-black p-2 shadow-sm']) }}
    />
</div>
