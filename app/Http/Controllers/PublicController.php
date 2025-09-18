<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
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

        // Get video files from uploads/foto directory
        $videoFiles = [];
        $videoPath = public_path('uploads/foto');
        if (is_dir($videoPath)) {
            $files = scandir($videoPath);
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && in_array(pathinfo($file, PATHINFO_EXTENSION), ['mp4', 'webm', 'ogg'])) {
                    $videoFiles[] = [
                        'name' => pathinfo($file, PATHINFO_FILENAME),
                        'path' => asset('uploads/foto/' . $file)
                    ];
                }
            }
        }

        return view('public.index', compact('members', 'beritas', 'medsos', 'galeris', 'kontaks', 'comments', 'videoFiles'));
    }

    public function galeri()
    {
        $galeris = Galeri::all();

        return view('public.galeri', compact('galeris'));
    }

    public function storeComment(\Illuminate\Http\Request $request)
    {
        try {
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'pesan' => 'required|string',
            ]);

            $comment = \App\Models\Comment::create([
                'name' => $validated['nama'],
                'subject' => 'Pesan untuk Haruna',
                'message' => $validated['pesan'],
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan Anda telah terkirim. Terima kasih!',
                    'comment' => $comment
                ]);
            }

            return redirect()->back()->with('success', 'Pesan Anda telah terkirim. Terima kasih!');
        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal.',
                    'errors' => $e->errors(),
                ], 422);
            }
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat mengirim pesan.',
                ], 500);
            }
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan.');
        }
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
