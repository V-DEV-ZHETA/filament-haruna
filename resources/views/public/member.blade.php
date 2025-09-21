<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $member->nama }} - Biodata Member</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
            position: relative;
        }

        /* Efek glassmorphism untuk container */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            gap: 2rem;
        }

        .container::before {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1) 0%, rgba(199, 216, 249, 0.1) 100%);
            z-index: 0;
        }

        .container::after {
            content: "";
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(199, 216, 249, 0.1) 0%, rgba(255, 107, 129, 0.1) 100%);
            z-index: 0;
        }

        .image-section {
            flex: 0 0 40%;
            position: relative;
            z-index: 1;
        }

        .content-section {
            flex: 0 0 60%;
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-weight: 900;
            font-size: 2.5rem;
            color: #ff6b81;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
        }

        h1::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #ff6b81;
            border-radius: 2px;
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 700px;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        .info-section {
            margin-bottom: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            margin-right: 2rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .info-item:hover {
            background: rgba(255, 107, 129, 0.1);
            transform: translateX(5px);
        }

        .info-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 107, 129, 0.2);
            color: #ff6b81;
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .info-label {
            font-weight: 700;
            color: #ff6b81;
            margin-right: 0.5rem;
            min-width: 120px;
        }

        .info-value {
            color: #555;
            font-weight: 500;
        }

        .bio-section {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            margin-right: 2rem;
            position: relative;
            border-left: 4px solid #ff6b81;
            flex-grow: 1;
        }

        .bio-section::before {
            content: """;
            position: absolute;
            top: 10px;
            left: 15px;
            font-size: 3rem;
            color: rgba(255, 107, 129, 0.2);
            font-family: serif;
        }

        .bio-text {
            font-style: italic;
            color: #333;
            line-height: 1.6;
            position: relative;
            z-index: 1;
            padding-left: 1rem;
        }

        .social-section {
            margin-bottom: 1.5rem;
        }

        .social-title {
            font-weight: 700;
            color: #ff6b81;
            margin-bottom: 1rem;
            font-size: 1.2rem;
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-icons a {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.7);
            color: #ff6b81;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            cursor: pointer;
            text-decoration: none;
        }

        .social-icons a:hover {
            background: #ff6b81;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(255, 107, 129, 0.3);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 107, 129, 0.8);
            color: white;
            font-weight: 700;
            text-decoration: none;
            border-radius: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 107, 129, 0.3);
            width: 90%;
        }

        .back-link:hover {
            background: rgba(255, 71, 87, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(255, 107, 129, 0.4);
        }

        .back-link i {
            margin-right: 0.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .container {
                flex-direction: column;
                padding: 1.5rem;
                gap: 1.5rem;
            }

            .image-section,
            .content-section {
                flex: 1;
            }

            .image-container {
                height: 300px;
            }

            h1 {
                font-size: 2rem;
            }

            .info-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-icon {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }

            .info-label {
                min-width: auto;
                margin-right: 0;
                margin-bottom: 0.25rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container glass">
        <div class="image-section">
            <div class="image-container">
                @if($member->foto)
                <img src="{{ asset('storage/' . $member->foto) }}" alt="{{ $member->nama }}" />
                @else
                <div class="w-full h-full bg-gradient-to-br from-pink-400 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                    <i class="fas fa-user text-6xl"></i>
                </div>
                @endif
            </div>
        </div>

        <div class="content-section">
            <div class="content-wrapper">
                <h1>{{ $member->nama }}</h1>

                <div class="info-section">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="info-label">Zodiak:</span>
                        <span class="info-value">{{ $member->zodiak }}</span>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <span class="info-label">Warna Favorit:</span>
                        <span class="info-value">{{ $member->warna_favorit }}</span>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-paw"></i>
                        </div>
                        <span class="info-label">Hewan Favorit:</span>
                        <span class="info-value">{{ $member->hewan_favorit }}</span>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <span class="info-label">Tanggal Lahir:</span>
                        <span class="info-value">{{ $member->tanggal_lahir }}</span>
                    </div>
                </div>

                <div class="bio-section">
                    <p class="bio-text">{{ $member->jiko }}</p>
                </div>

                @if($member->media_sosial)
                <div class="social-section">
                    <h3 class="social-title">Media Sosial</h3>
                    <div class="social-icons">
                        @foreach($member->media_sosial as $platform => $url)
                        @php
                            // Ensure URL has proper protocol
                            $formattedUrl = $url;
                            if (!preg_match('/^https?:\/\//', $url)) {
                                $formattedUrl = 'https://' . $url;
                            }
                        @endphp
                        <a href="{{ $formattedUrl }}"
                           target="_blank"
                           title="{{ ucfirst($platform) }}"
                           onclick="return true;"
                           style="cursor: pointer; display: inline-block;">
                            @if($platform == 'instagram')
                            <i class="fab fa-instagram"></i>
                            @elseif($platform == 'youtube')
                            <i class="fab fa-youtube"></i>
                            @elseif($platform == 'tiktok')
                            <i class="fab fa-tiktok"></i>
                            @else
                            <i class="fas fa-globe"></i>
                            @endif
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <a href="{{ route('public.index') }}" class="back-link">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</body>
</html>
