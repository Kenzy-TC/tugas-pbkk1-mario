@extends('layouts.app')

@section('content')

<div class="text-center mb-12">

    <p class="text-blue-600 dark:text-blue-400 font-semibold mb-3">
        WEBSITE AKADEMIK MAHASISWA
    </p>

    <h1 class="text-4xl md:text-5xl font-bold mb-5">
        Selamat Datang, {{ $user }}!
    </h1>

    <p class="max-w-2xl mx-auto text-slate-600 dark:text-slate-300">
        Website mini untuk menampilkan profil akademik mahasiswa
        dan rancangan platform Agentic AI.
    </p>

</div>

<div class="grid md:grid-cols-3 gap-6">

    <x-info-card title="Profil Mahasiswa">
        <p class="text-slate-600 dark:text-slate-300">
            Menampilkan informasi identitas dan akademik mahasiswa.
        </p>

        <a
            href="{{ route('profil') }}"
            class="inline-block mt-4 font-semibold text-blue-600 dark:text-blue-400"
        >
            Lihat Profil →
        </a>
    </x-info-card>

    <x-info-card title="Platform Agentic AI">
        <p class="text-slate-600 dark:text-slate-300">
            Menampilkan visualisasi konsep platform Agentic AI.
        </p>

        <a
            href="{{ route('ide-agent') }}"
            class="inline-block mt-4 font-semibold text-blue-600 dark:text-blue-400"
        >
            Lihat Platform →
        </a>
    </x-info-card>

    <x-info-card title="Submit Ide">
        <p class="text-slate-600 dark:text-slate-300">
            Kirim gagasan pengembangan Agentic AI untuk kebutuhan akademik.
        </p>

        <a
            href="{{ route('ide-agent') }}"
            class="inline-block mt-4 font-semibold text-blue-600 dark:text-blue-400"
        >
            Kirim Ide →
        </a>
    </x-info-card>

</div>

@endsection