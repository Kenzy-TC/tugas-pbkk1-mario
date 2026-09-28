<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $user = $request->query('user', 'Mahasiswa');

        return view('welcome', [
            'title' => 'Beranda',
            'user' => $user,
            'darkMode' => false,
        ]);
    }

    public function profile()
{
    $mahasiswa = [
        'nama' => 'Mario Napitupulu',
        'nim' => '5025241085',
        'prodi' => 'Teknik Informatika',
        'fakultas' => 'Fakultas Informatika',
        'universitas' => 'Institut Teknologi Sepuluh Nopember',
        'email' => '5025241085@student.its.ac.id',
    ];

    return view('profil', [
        'title' => 'Profil Mahasiswa',
        'mahasiswa' => $mahasiswa,
        'darkMode' => false,
    ]);
}

    public function agent(Request $request)
    {
        $darkMode = $request->query('mode') === 'dark';

        return view('ide-agent', [
            'title' => 'Agentic AI',
            'darkMode' => $darkMode,
        ]);
    }

    public function submitIdea(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'judul' => 'required|max:150',
            'deskripsi' => 'required|min:10',
        ]);

        return redirect()
            ->route('ide-agent', [
                'mode' => $request->input('mode'),
            ])
            ->with('success', 'Ide Agentic AI berhasil dikirim!');
    }
}