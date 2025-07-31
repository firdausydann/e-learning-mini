@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">{{ $materi->judul }}</h1>

    <p class="mb-4">{{ $materi->deskripsi }}</p>

    @if ($materi->tipe === 'pdf')
        <iframe src="{{ asset('storage/materi/' . $materi->file) }}" class="w-full h-[600px] border"></iframe>
    
    @elseif ($materi->tipe === 'video')
        <video controls class="w-full">
            <source src="{{ asset('storage/materi/' . $materi->file) }}" type="video/mp4">
            Browser tidak mendukung tag video.
        </video>
    
    @elseif ($materi->tipe === 'link')
        <a href="{{ $materi->file }}" target="_blank" class="text-blue-500 underline">Kunjungi Link Materi</a>
    @endif

    <div class="mt-6">
        <a href="{{ route(auth()->user()->role . '.materi.index') }}" class="text-blue-500 underline">
            ← Kembali ke Daftar Materi
        </a>
    </div>
</div>
@endsection
