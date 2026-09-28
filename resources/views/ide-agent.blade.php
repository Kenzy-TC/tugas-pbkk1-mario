@extends('layouts.app')

@section('content')

{{-- HEADER --}}
<div class="mb-10">
    <p class="text-blue-600 dark:text-blue-400 font-semibold mb-2">
        AGENTIC AI PLATFORM
    </p>

    <h1 class="text-4xl font-bold">
        Sistem Verifikasi SOP K3 Laboratorium
    </h1>

    <p class="mt-3 max-w-3xl text-slate-600 dark:text-slate-300">
        Platform peminjaman alat laboratorium berbasis Agentic AI dan MCP Server
        yang menggunakan AI sebagai orkestrator, sementara seluruh keputusan
        keamanan dan kelayakan peminjaman tetap dikendalikan oleh aturan
        deterministik pada sistem backend.
    </p>
</div>


{{-- SUCCESS / ERROR --}}
@if(session('success'))
    <x-status-banner type="success">
        {{ session('success') }}
    </x-status-banner>
@endif

@if($errors->any())
    <x-status-banner type="error">
        <ul class="list-disc ml-5">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-status-banner>
@endif


{{-- ===================================================== --}}
{{-- 1. PLATFORM AGENTIC AI --}}
{{-- ===================================================== --}}

<div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 md:p-8 mb-10">

    <div class="mb-8">
        <h2 class="text-2xl font-bold">
            Platform Agentic AI
        </h2>

        <p class="mt-2 text-slate-600 dark:text-slate-300">
            Alur kerja sistem dari permintaan pengguna sampai proses verifikasi
            peminjaman alat laboratorium.
        </p>
    </div>


    {{-- FLOW UTAMA --}}
    <div class="grid md:grid-cols-5 gap-4 items-stretch text-center">

        {{-- USER --}}
        <div class="rounded-xl bg-blue-100 dark:bg-blue-900 p-5">
            <div class="text-3xl mb-3">👨‍🎓</div>

            <h3 class="font-bold text-lg">
                Pengguna
            </h3>

            <p class="text-sm mt-2">
                Menyampaikan kebutuhan menggunakan bahasa manusia.
            </p>
        </div>


        <div class="hidden md:flex items-center justify-center text-3xl">
            →
        </div>


        {{-- AI --}}
        <div class="rounded-xl bg-purple-100 dark:bg-purple-900 p-5">
            <div class="text-3xl mb-3">🤖</div>

            <h3 class="font-bold text-lg">
                AI Orchestrator
            </h3>

            <p class="text-sm mt-2">
                Memahami maksud pengguna dan menentukan tool yang perlu dipanggil.
            </p>
        </div>


        <div class="hidden md:flex items-center justify-center text-3xl">
            →
        </div>


        {{-- MCP --}}
        <div class="rounded-xl bg-emerald-100 dark:bg-emerald-900 p-5">
            <div class="text-3xl mb-3">🛡️</div>

            <h3 class="font-bold text-lg">
                MCP Server
            </h3>

            <p class="text-sm mt-2">
                Menjalankan verifikasi aturan dan membatasi wewenang AI.
            </p>
        </div>

    </div>


    {{-- MCP SERVICES --}}
    <div class="mt-8">

        <h3 class="text-xl font-bold mb-4">
            Komponen di dalam MCP Server
        </h3>

        <div class="grid md:grid-cols-4 gap-4">

            <div class="border dark:border-slate-600 rounded-xl p-5">
                <div class="text-2xl mb-2">📦</div>

                <h4 class="font-bold">
                    Inventory Service
                </h4>

                <p class="text-sm mt-2 text-slate-600 dark:text-slate-300">
                    Mencari alat berdasarkan katalog inventaris resmi.
                </p>
            </div>


            <div class="border dark:border-slate-600 rounded-xl p-5">
                <div class="text-2xl mb-2">📋</div>

                <h4 class="font-bold">
                    SOP K3 Engine
                </h4>

                <p class="text-sm mt-2 text-slate-600 dark:text-slate-300">
                    Memeriksa seluruh aturan dan persyaratan peminjaman.
                </p>
            </div>


            <div class="border dark:border-slate-600 rounded-xl p-5">
                <div class="text-2xl mb-2">🔐</div>

                <h4 class="font-bold">
                    Identity Verification
                </h4>

                <p class="text-sm mt-2 text-slate-600 dark:text-slate-300">
                    Menggunakan session login kampus untuk memastikan identitas.
                </p>
            </div>


            <div class="border dark:border-slate-600 rounded-xl p-5">
                <div class="text-2xl mb-2">📱</div>

                <h4 class="font-bold">
                    OTP Service
                </h4>

                <p class="text-sm mt-2 text-slate-600 dark:text-slate-300">
                    Autentikasi tambahan untuk alat dengan risiko tinggi.
                </p>
            </div>

        </div>
    </div>


    {{-- SECURITY PRINCIPLE --}}
    <div class="mt-8 bg-slate-100 dark:bg-slate-700 rounded-xl p-5">

        <h3 class="font-bold text-lg mb-2">
            Prinsip Keamanan Sistem
        </h3>

        <p class="text-sm leading-6 text-slate-700 dark:text-slate-200">
            AI tidak memiliki akses langsung ke database dan tidak menentukan
            sendiri apakah pengguna boleh meminjam alat. AI hanya berperan sebagai
            orkestrator komunikasi. Keputusan akhir tetap dijalankan oleh kode
            deterministik pada MCP Server berdasarkan SOP K3.
        </p>

    </div>

</div>


{{-- ===================================================== --}}
{{-- 2. IDE AGENTIC AI --}}
{{-- ===================================================== --}}

<div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 md:p-8 mb-10">

    <div class="mb-8">

        <p class="text-purple-600 dark:text-purple-400 font-semibold mb-2">
            IDE AGENTIC AI
        </p>

        <h2 class="text-2xl font-bold">
            Sistem Verifikasi SOP K3 Laboratorium berbasis MCP Server
        </h2>

        <p class="mt-3 text-slate-600 dark:text-slate-300 leading-7">
            Ide proyek ini mengubah proses peminjaman alat laboratorium dari
            form yang kaku menjadi asisten otonom yang mampu memahami bahasa
            manusia, melakukan verifikasi prosedural, dan memberikan solusi
            yang sesuai dengan SOP keselamatan kerja.
        </p>

    </div>


    {{-- 4 KEMAMPUAN UTAMA --}}
    <div class="grid md:grid-cols-2 gap-5">

        <x-info-card title="1. Natural Language Translation">

            <p class="text-slate-600 dark:text-slate-300 leading-6">
                Pengguna dapat menyebut alat menggunakan bahasa sehari-hari.
                Misalnya, "alat peleleh timah" dapat diterjemahkan menjadi
                query resmi seperti "Solder 40W" untuk pencarian katalog inventaris.
            </p>

        </x-info-card>


        <x-info-card title="2. Autonomous Rule Verification">

            <p class="text-slate-600 dark:text-slate-300 leading-6">
                LLM hanya menjadi orkestrator. Keputusan kelayakan peminjaman
                sepenuhnya ditentukan oleh kode deterministik pada MCP Server
                berdasarkan SOP K3, bukan berdasarkan keputusan bebas dari AI.
            </p>

        </x-info-card>


        <x-info-card title="3. Contextual Problem Solving">

            <p class="text-slate-600 dark:text-slate-300 leading-6">
                Sistem tidak hanya menolak permintaan ketika persyaratan belum
                lengkap. Sistem dapat memberikan solusi prosedural, misalnya
                menawarkan peminjaman dengan pendampingan Asisten Laboratorium.
            </p>

        </x-info-card>


        <x-info-card title="4. Anti-Spoofing Verification">

            <p class="text-slate-600 dark:text-slate-300 leading-6">
                Identitas pengguna tidak dipercaya dari isi percakapan.
                Verifikasi menggunakan session login kampus dan OTP tambahan
                dapat diterapkan untuk peminjaman alat dengan risiko tinggi.
            </p>

        </x-info-card>

    </div>


    {{-- NILAI PROYEK --}}
    <div class="mt-8 border-l-4 border-blue-600 bg-blue-50 dark:bg-slate-700 rounded-r-xl p-5">

        <h3 class="font-bold text-lg mb-2">
            Tujuan dan Nilai Proyek
        </h3>

        <p class="text-sm leading-6 text-slate-700 dark:text-slate-200">
            Sistem dirancang untuk menyelesaikan masalah nyata dalam proses
            peminjaman alat laboratorium sekaligus menjaga keamanan data dan
            kontrol terhadap keputusan AI. Arsitektur ini menempatkan backend
            dan aturan keselamatan sebagai sumber keputusan utama.
        </p>

    </div>

</div>


{{-- ===================================================== --}}
{{-- 3. FORM SUBMIT IDE --}}
{{-- ===================================================== --}}

<div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 md:p-8">

    <div class="mb-8">

        <h2 class="text-2xl font-bold">
            Form Pengajuan Ide Agentic AI
        </h2>

        <p class="mt-2 text-slate-600 dark:text-slate-300">
            Gunakan form berikut untuk mengajukan atau mengembangkan ide Agentic AI.
        </p>

    </div>


    <form method="POST" action="{{ route('ide-agent.submit') }}">

        @csrf

        <input
            type="hidden"
            name="mode"
            value="{{ $darkMode ? 'dark' : 'light' }}"
        >


        {{-- NAMA --}}
        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Nama Mahasiswa
            </label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama') }}"
                placeholder="Masukkan nama kamu"
                class="w-full rounded-lg border border-slate-300
                       dark:border-slate-600 dark:bg-slate-700
                       px-4 py-3 focus:ring-2 focus:ring-blue-500"
            >

        </div>


        {{-- JUDUL --}}
        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Judul Ide
            </label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul') }}"
                placeholder="Contoh: Sistem Verifikasi SOP K3 Laboratorium berbasis MCP Server"
                class="w-full rounded-lg border border-slate-300
                       dark:border-slate-600 dark:bg-slate-700
                       px-4 py-3 focus:ring-2 focus:ring-blue-500"
            >

        </div>


        {{-- DESKRIPSI --}}
        <div class="mb-5">

            <label class="block font-semibold mb-2">
                Deskripsi Ide
            </label>

            <textarea
                name="deskripsi"
                rows="6"
                placeholder="Jelaskan ide Agentic AI yang ingin dikembangkan..."
                class="w-full rounded-lg border border-slate-300
                       dark:border-slate-600 dark:bg-slate-700
                       px-4 py-3 focus:ring-2 focus:ring-blue-500"
            >{{ old('deskripsi') }}</textarea>

        </div>


        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white
                   font-semibold px-6 py-3 rounded-lg transition"
        >
            Kirim Ide
        </button>

    </form>

</div>

@endsection