@props([
    'name',
    'label' => null,
    'options' => [],
    'value' => '',
    'required' => false,
])

<div class="space-y-1">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ $label }}
        </label>
    @endif
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-white dark:text-black p-2 shadow-sm']) }}
    >
        <option value="">Selecione</option>
        @foreach ($options as $key => $text)
            <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>
</div>
