pati<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $berita->title }}</h1>
        @if($berita->image)
            <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="img-fluid mb-3">
        @endif
        @if($berita->video)
            <video controls class="mb-3" style="max-width: 100%;">
                <source src="{{ asset('storage/' . $berita->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif
        <p>{{ $berita->content }}</p>
        <a href="{{ route('public.index') }}" class="btn btn-primary">Back to Home</a>
        @if($berita->published_at)
            <p><strong>Tanggal:</strong> {{ $berita->published_at->format('d M Y') }}</p>
        @endif
        @if($berita->video_url)
            <p><strong>Source:</strong> <a href="{{ $berita->video_url }}" target="_blank">{{ $berita->video_url }}</a></p>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
