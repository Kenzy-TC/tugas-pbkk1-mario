@props([
    'title',
])

<div {{ $attributes->merge([
    'class' => 'bg-white dark:bg-slate-800 rounded-xl shadow p-6'
]) }}>

    <h2 class="text-xl font-bold text-blue-700 dark:text-blue-300 mb-4">
        {{ $title }}
    </h2>

    <div>
        {{ $slot }}
    </div>

</div>