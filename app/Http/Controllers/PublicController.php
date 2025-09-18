<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Berita;
use App\Models\MediaSosial;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Comment;

class PublicController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $beritas = Berita::all();
        $medsos = MediaSosial::all();
        $galeris = Galeri::all();
        $kontaks = Kontak::all();
        $comments = Comment::all();

        return view('public.index', compact('members', 'beritas', 'medsos', 'galeris', 'kontaks', 'comments'));
    }

    public function galeri()
    {
        $galeris = Galeri::all();

        return view('public.galeri', compact('galeris'));
    }

    public function storeComment(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        \App\Models\Comment::create([
            'name' => $validated['nama'],
            'subject' => 'Pesan untuk Haruna',
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

    public function likeComment(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        // For simplicity, just increment likes. In a real app, you'd track user likes.
        $comment->increment('likes');

        // Broadcast the like update event
        event(new \App\Events\LikeUpdated($comment));

        return response()->json([
            'success' => true,
            'likes' => $comment->likes
        ]);
    }
}
