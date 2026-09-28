@extends('layouts.app')

@section('content')

<div class="mb-8">
    <h1 class="text-3xl font-bold">
        Profil Mahasiswa
    </h1>

    <p class="mt-2 text-slate-600 dark:text-slate-300">
        Informasi akademik mahasiswa.
    </p>
</div>

<div class="grid md:grid-cols-2 gap-6">

    <x-info-card title="Identitas Mahasiswa">

        <div class="space-y-3">
            <p>
                <span class="font-semibold">Nama:</span>
                {{ $mahasiswa['nama'] }}
            </p>

            <p>
                <span class="font-semibold">NIM:</span>
                {{ $mahasiswa['nim'] }}
            </p>

            <p>
                <span class="font-semibold">Program Studi:</span>
                {{ $mahasiswa['prodi'] }}
            </p>
        </div>

    </x-info-card>

    <x-info-card title="Informasi Akademik">

        <div class="space-y-3">
            <p>
                <span class="font-semibold">Fakultas:</span>
                {{ $mahasiswa['fakultas'] }}
            </p>

            <p>
                <span class="font-semibold">Universitas:</span>
                {{ $mahasiswa['universitas'] }}
            </p>

            <p>
                <span class="font-semibold">Email:</span>
                {{ $mahasiswa['email'] }}
            </p>
        </div>

    </x-info-card>

</div>

@endsection