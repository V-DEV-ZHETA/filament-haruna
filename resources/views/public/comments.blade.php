<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pesan untuk Haruna - Semua Pesan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* CSS Variables untuk konsistensi warna dan tema */
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #ff6b81;
            --accent-hover: #ff4757;
            --text-primary: #333;
            --text-secondary: #555;
            --text-muted: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow-light: 0 10px 30px rgba(0,0,0,0.1);
            --shadow-medium: 0 20px 40px rgba(0,0,0,0.1);
            --transition-speed: 0.3s;
            --border-radius: 15px;
            --border-radius-small: 8px;
        }

        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            min-height: 100vh;
            color: var(--text-primary);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Styles */
        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 400;
        }

        /* Back Button */
        .back-btn {
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: var(--border-radius-small);
            transition: all var(--transition-speed) ease;
            font-weight: 500;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-btn:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .back-btn i {
            margin-right: 8px;
        }

        /* Comments Section */
        .comments-section {
            background: var(--bg-white);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow-medium);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .comments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        /* Comment Card */
        .comment-card {
            background: var(--bg-light);
            border-radius: var(--border-radius);
            padding: 25px;
            border-left: 5px solid var(--primary-color);
            transition: all var(--transition-speed) ease;
            position: relative;
            overflow: hidden;
        }

        .comment-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform var(--transition-speed) ease;
        }

        .comment-card:hover::before {
            transform: scaleX(1);
        }

        .comment-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-light);
        }

        /* Comment Header */
        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .comment-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .comment-info {
            flex: 1;
            min-width: 0;
        }

        .comment-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--text-primary);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .comment-date {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-top: 2px;
        }

        /* Comment Message */
        .comment-message {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-secondary);
            margin-bottom: 15px;
        }

        /* Comment Footer */
        .comment-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Like Button */
        .like-btn {
            background: none;
            border: none;
            color: var(--accent-color);
            cursor: pointer;
            font-size: 1.1rem;
            transition: all var(--transition-speed) ease;
            display: flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .like-btn:hover {
            color: var(--accent-hover);
            background: rgba(255, 107, 129, 0.1);
        }

        .like-btn i {
            transition: transform 0.3s ease;
        }

        .like-btn:hover i {
            transform: scale(1.2);
        }

        .like-count {
            margin-left: 5px;
            font-weight: 500;
        }

        /* Simple Pagination */
        .simple-pagination {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .page-info {
            font-size: 0.95rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .page-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 4px 10px rgba(102, 126, 234, 0.3);
            text-decoration: none;
        }

        .page-btn:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.4);
        }

        .page-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background: #a0aec0;
            box-shadow: none;
        }

        .page-btn:disabled:hover {
            transform: none;
            box-shadow: none;
        }

        .page-btn i {
            margin: 0 5px;
        }

        .page-btn.prev i {
            margin-right: 8px;
        }

        .page-btn.next i {
            margin-left: 8px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            animation: fadeIn 0.8s ease;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            opacity: 0.5;
        }

        .empty-state p {
            font-size: 1.2rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* Responsive Design */
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
            
            .comment-card {
                padding: 20px;
            }
            
            .comment-header {
                margin-bottom: 12px;
            }
            
            .comment-message {
                margin-bottom: 12px;
                font-size: 0.95rem;
            }
            
            .simple-pagination {
                gap: 15px;
            }
            
            .page-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }
            
            .comments-section {
                padding: 15px;
                border-radius: 15px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .comment-card {
                padding: 15px;
            }
            
            .comment-avatar {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .comment-name {
                font-size: 1rem;
            }
            
            .comment-date {
                font-size: 0.8rem;
            }
            
            .simple-pagination {
                flex-direction: column;
                gap: 10px;
            }
            
            .page-btn {
                width: 100%;
                max-width: 200px;
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
            <h1>Kolom Komentar Harudience</h1>
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
            
            <!-- Simple Pagination -->
            <div class="simple-pagination">
                @if($comments->onFirstPage())
                <button class="page-btn prev" disabled>
                    <i class="fas fa-arrow-left"></i> Previous
                </button>
                @else
                <a href="{{ $comments->previousPageUrl() }}" class="page-btn prev">
                    <i class="fas fa-arrow-left"></i> Previous
                </a>
                @endif
                
                <div class="page-info">
                    Halaman {{ $comments->currentPage() }} dari {{ $comments->lastPage() }}
                </div>
                
                @if($comments->hasMorePages())
                <a href="{{ $comments->nextPageUrl() }}" class="page-btn next">
                    Next <i class="fas fa-arrow-right"></i>
                </a>
                @else
                <button class="page-btn next" disabled>
                    Next <i class="fas fa-arrow-right"></i>
                </button>
                @endif
            </div>
            @else
            <div class="empty-state">
                <i class="fas fa-comment-slash"></i>
                <p>Belum ada pesan dari fans.</p>
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