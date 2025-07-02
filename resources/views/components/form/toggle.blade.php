@props([
    'name',
    'label' => null,
    'checked' => false,
])

<div class="flex items-center space-x-2">
    <label for="{{ $name }}" class="text-sm text-gray-700 dark:text-gray-300">{{ $label }}</label>
    <input
        type="checkbox"
        id="{{ $name }}"
        name="{{ $name }}"
        value="1"
        {{ old($name, $checked) ? 'checked' : '' }}
        class="rounded-full h-5 w-10 appearance-none bg-gray-300 checked:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 transition"
    />
</div>
