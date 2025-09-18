<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Berita;
use App\Models\MediaSosial;
use App\Models\Galeri;
use App\Models\Kontak;

class PublicController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $beritas = Berita::all();
        $medsos = MediaSosial::all();
        $galeris = Galeri::all();
        $kontaks = Kontak::all();

        return view('public.index', compact('members', 'beritas', 'medsos', 'galeris', 'kontaks'));
    }

    public function storeComment(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        \App\Models\Comment::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'subject' => $validated['subjek'],
            'message' => $validated['pesan'],
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim. Terima kasih!');
    }

    public function showMember($id)
    {
        $member = Member::findOrFail($id);
        return view('public.member', compact('member'));
    }

    public function showBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('public.berita', compact('berita'));
    }
}
