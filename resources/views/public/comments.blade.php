<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan untuk Haruna - Semua Pesan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .comments-section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .comments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
        }

        .comment-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            border-left: 5px solid #667eea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .comment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .comment-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 15px;
        }

        .comment-info {
            flex: 1;
        }

        .comment-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        .comment-date {
            font-size: 0.9rem;
            color: #666;
            margin-top: 2px;
        }

        .comment-message {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        .comment-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .like-btn {
            background: none;
            border: none;
            color: #ff6b81;
            cursor: pointer;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .like-btn:hover {
            color: #ff4757;
        }

        .like-count {
            margin-left: 5px;
        }

        .pagination {
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .pagination a, .pagination span {
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 8px;
            text-decoration: none;
            color: #667eea;
            background: white;
            border: 1px solid #667eea;
            transition: all 0.3s ease;
        }

        .pagination .active {
            background: #667eea;
            color: white;
        }

        .pagination a:hover {
            background: #667eea;
            color: white;
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .back-btn:hover {
            background: #5a6fd8;
        }

        @media (max-width: 768px) {
            .comments-grid {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 2rem;
            }

            .comments-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="{{ route('public.index') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
            <h1>Semua Pesan untuk Haruna</h1>
            <p>Baca semua pesan dari fans yang mendukung Haruna</p>
        </div>

        <div class="comments-section">
            @if($comments->count() > 0)
            <div class="comments-grid">
                @foreach($comments as $comment)
                <div class="comment-card">
                    <div class="comment-header">
                        <div class="comment-avatar">{{ strtoupper(substr($comment->name, 0, 1)) }}</div>
                        <div class="comment-info">
                            <div class="comment-name">{{ $comment->name }}</div>
                            <div class="comment-date">{{ date('d M Y, H:i', strtotime($comment->created_at)) }}</div>
                        </div>
                    </div>
                    <div class="comment-message">{{ $comment->message }}</div>
                    <div class="comment-footer">
                        <button class="like-btn" data-id="{{ $comment->id }}">
                            <i class="far fa-heart"></i> <span class="like-count">{{ $comment->likes ?? 0 }}</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $comments->links() }}
            @else
            <div class="text-center py-5">
                <i class="fas fa-comment-slash fa-4x mb-4" style="color: #667eea; opacity: 0.5;"></i>
                <p style="font-size: 1.2rem; color: #666;">Belum ada pesan dari fans.</p>
            </div>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.like-btn').on('click', function() {
                const btn = $(this);
                const commentId = btn.data('id');
                const likeCount = btn.find('.like-count');

                $.ajax({
                    url: `/comments/${commentId}/like`,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') || '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            likeCount.text(response.likes);
                            btn.find('i').removeClass('far').addClass('fas');
                            setTimeout(() => {
                                btn.find('i').removeClass('fas').addClass('far');
                            }, 1000);
                        }
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat memberikan like.');
                    }
                });
            });
        });
    </script>
</body>
</html>
