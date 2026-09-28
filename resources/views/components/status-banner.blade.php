@props([
    'type' => 'success',
])

@php
    $classes = match ($type) {
        'error' => 'bg-red-100 text-red-800 border-red-300',
        'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-300',
        default => 'bg-green-100 text-green-800 border-green-300',
    };
@endphp

<div class="border rounded-lg px-5 py-4 mb-6 {{ $classes }}">
    {{ $slot }}
</div>