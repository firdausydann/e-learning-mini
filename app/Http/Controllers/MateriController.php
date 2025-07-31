<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    // ==================== ADMIN & USER INDEX ====================
    public function index()
    {
        $materis = Materi::latest()->get();
        return view('materi.index', compact('materis'));
    }

    // ==================== ADMIN CREATE ====================
   public function create()
{
    return view('admin.materi.create'); // ✅ benar
}



    // ==================== STORE ====================
   public function store(Request $request)
{
    $request->validate([
        'judul'     => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'file'      => 'required|file|mimes:pdf,mp4,avi,mov|max:10240',
    ]);

    $filePath = $request->file('file')->store('materi', 'public');

    Materi::create([
        'judul'     => $request->judul,
        'deskripsi' => $request->deskripsi,
        'file_path' => $filePath,
        'user_id'   => Auth::id(),
    ]);

    return redirect()->route(
        Auth::user()->role === 'admin' ? 'admin.materi.index' : 'user.materi.index'
    )->with('success', 'Materi berhasil diupload.');
}


    // ==================== DELETE ====================
    public function destroy(Materi $materi)
    {
        if ($materi->file && Storage::disk('public')->exists($materi->file)) {
            Storage::disk('public')->delete($materi->file);
        }

        $materi->delete();

        // Dynamic redirect based on role
        $route = Auth::user()->role === 'admin' ? 'admin.materi.index' : 'user.materi.index';
        return redirect()->route($route)->with('success', 'Materi berhasil dihapus.');
    }
}
