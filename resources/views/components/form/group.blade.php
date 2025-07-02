@props([
    'cols' => 4,
    'label' => null,
])

<div class="space-y-2 w-full">
    @if ($label)
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ $label }}
        </label>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-{{ $cols }} gap-4">
        {{ $slot }}
    </div>
</div>
