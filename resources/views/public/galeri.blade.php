<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeri - Komunitas Dance Cover Haruna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;900&display=swap" rel="stylesheet">
    
    <style>
        /* CSS Variables untuk konsistensi warna dan efek */
        :root {
            --primary-color: #ff6b81;
            --secondary-color: #c7d8f9;
            --text-dark: #333;
            --text-medium: #555;
            --text-light: #666;
            --white: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.25);
            --glass-border: rgba(255, 255, 255, 0.18);
            --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            --transition-speed: 0.3s;
        }

        /* Global Styles */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
            z-index: -1;
            opacity: 0.4;
            animation: backgroundMove 20s linear infinite;
        }

        @keyframes backgroundMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(40px, 40px); }
        }

        /* Glassmorphism Effect */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            position: relative;
            overflow: hidden;
        }

        .glass::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .glass:hover::before {
            transform: translateX(100%);
        }

        .glass-dark {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
        }

        /* Navigation */
        nav {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            position: sticky;
            top: 0;
            z-index: 50;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        nav ul {
            display: flex;
            justify-content: center;
            gap: 2rem;
            padding: 1rem 0;
            margin: 0;
            list-style: none;
            font-weight: 700;
            color: var(--text-dark);
        }

        nav ul li a {
            color: var(--text-dark);
            text-decoration: none;
            transition: all var(--transition-speed) ease;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            position: relative;
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width var(--transition-speed) ease;
        }

        nav ul li a:hover {
            color: var(--primary-color);
            background: rgba(255, 107, 129, 0.1);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        /* Gallery Section */
        .gallery-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 60px 0;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--glass-shadow);
            position: relative;
            overflow: hidden;
        }

        .gallery-section::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 107, 129, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: rotate 50s linear infinite reverse;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .gallery-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .gallery-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        /* Filter Buttons */
        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: var(--text-medium);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all var(--transition-speed) ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .filter-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 107, 129, 0.2), rgba(199, 216, 249, 0.2));
            transform: translateX(-100%);
            transition: transform 0.5s ease;
            z-index: -1;
        }

        .filter-btn:hover::before {
            transform: translateX(100%);
        }

        .filter-btn:hover {
            background: rgba(255, 107, 129, 0.2);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: rgba(255, 107, 129, 0.7);
            color: var(--white);
            border-color: rgba(255, 255, 255, 0.5);
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            perspective: 1000px;
        }

        .gallery-item {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            box-shadow: var(--glass-shadow);
            transition: all 0.5s ease;
            transform-style: preserve-3d;
            position: relative;
        }

        .gallery-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 0;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }

        .gallery-item:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px 0 rgba(31, 38, 135, 0.25);
        }

        /* Gallery Image */
        .gallery-image-container {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
            cursor: pointer;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
            display: flex;
            align-items: flex-end;
            padding: 15px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-category {
            display: inline-block;
            padding: 5px 20px;
            background: linear-gradient(90deg, rgba(255, 107, 129, 0.8), rgba(199, 216, 249, 0.8));
            color: var(--white);
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Gallery Content */
        .gallery-content {
            padding: 20px;
        }

        .gallery-title-text {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .gallery-description {
            color: var(--text-medium);
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .gallery-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gallery-date {
            color: var(--text-light);
            font-size: 0.8rem;
        }

        .gallery-view-btn {
            background: rgba(255, 107, 129, 0.2);
            color: var(--primary-color);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed) ease;
        }

        .gallery-view-btn:hover {
            background: rgba(255, 107, 129, 0.4);
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
            font-weight: 600;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            z-index: 1000;
            display: none;
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .lightbox.show {
            display: flex !important;
            opacity: 1 !important;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            z-index: 1001;
        }

        .lightbox-close:hover {
            background: rgba(255, 107, 129, 0.8);
            transform: rotate(90deg);
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .lightbox-image {
            width: 100%;
            height: auto;
            display: block;
        }

        .lightbox-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: var(--white);
            padding: 20px;
            box-sizing: border-box;
        }

        .lightbox-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .lightbox-description {
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Lightbox Navigation */
        .lightbox-prev, .lightbox-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: var(--white);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1002;
            transition: all var(--transition-speed) ease;
            font-size: 1rem;
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        .lightbox-prev:hover, .lightbox-next:hover {
            background: rgba(255, 107, 129, 0.8);
            transform: translateY(-50%) scale(1.1);
        }

        /* Back Button */
        .back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: var(--white);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px 15px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 4px 15px 0 rgba(255, 107, 129, 0.2);
            z-index: 100;
        }

        .back-btn:hover {
            background: rgba(255, 71, 87, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(255, 107, 129, 0.3);
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery-title {
                font-size: 2rem;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            nav ul {
                gap: 1rem;
                flex-wrap: wrap;
            }
            
            nav ul li a {
                padding: 0.3rem 0.8rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<!-- Back to Home Button -->
<a href="{{ route('public.index') }}" class="back-btn">
    <i class="fas fa-arrow-left"></i> Kembali ke Beranda
</a>

<header>
    <nav>
        <ul>
            <li><a href="{{ route('public.index') }}#beranda">Beranda</a></li>
            <li><a href="{{ route('public.index') }}#members">Member</a></li>
            <li><a href="{{ route('public.index') }}#medsos">Medsos</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="{{ route('public.index') }}#berita">Berita</a></li>
            <li><a href="{{ route('public.index') }}#kontak">Kontak</a></li>
        </ul>
    </nav>
</header>

<main class="container mx-auto px-4 py-8 space-y-16">

    <!-- Galeri Section -->
    <section id="galeri" class="gallery-section fade-in">
        <div class="gallery-container">
            <h2 class="gallery-title">Galeri Haruna</h2>

            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="performance">Performance</button>
                <button class="filter-btn" data-filter="behind_the_scene">Behind The Scene</button>
                <button class="filter-btn" data-filter="event">Event</button>
            </div>

            <div class="gallery-grid">
                @foreach($galeris as $galeri)
                @if($loop->index !== 8)
                <div class="gallery-item" data-category="{{ $galeri->category ?? 'performance' }}">
                    <div class="gallery-image-container">
                        @if($galeri->image)
                        <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->title }}" class="gallery-image" />
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-pink-400 to-purple-500 flex items-center justify-center text-white font-bold text-lg">
                            <i class="fas fa-image text-4xl"></i>
                        </div>
                        @endif
                    </div>

                    <div class="gallery-content">
                        <h3 class="gallery-title-text">{{ $galeri->title }}</h3>
                        <p class="gallery-description">{{ Str::limit($galeri->description, 100) }}</p>

                        <div class="gallery-meta">
                            <span class="gallery-date">{{ date('d M Y', strtotime($galeri->created_at)) }}</span>
                            <button class="gallery-view-btn" data-index="{{ $loop->index }}">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

</main>

<footer class="glass-dark">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Komunitas Dance Cover Haruna. All rights reserved.</p>
        <p class="mt-2">Bergabunglah dan jadilah bagian dari komunitas dance cover terbesar!</p>
    </div>
</footer>

<!-- Lightbox untuk preview gambar -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-close">
        <i class="fas fa-times"></i>
    </div>
    <div class="lightbox-content">
        <button class="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
        <img id="lightbox-image" src="" alt="" class="lightbox-image">
        <div class="lightbox-info">
            <h3 id="lightbox-title" class="lightbox-title"></h3>
            <p id="lightbox-description" class="lightbox-description"></p>
        </div>
        <button class="lightbox-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gallery functionality
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        // Add animation
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDescription = document.getElementById('lightbox-description');
        const closeLightbox = document.querySelector('.lightbox-close');
        const viewButtons = document.querySelectorAll('.gallery-view-btn');
        const galleryImages = document.querySelectorAll('.gallery-image');
        const prevButton = document.querySelector('.lightbox-prev');
        const nextButton = document.querySelector('.lightbox-next');
        const galleryItemsArray = Array.from(document.querySelectorAll('.gallery-item'));
        let currentIndex = 0;

        // Fungsi untuk membuka lightbox dengan index tertentu
        function openLightbox(index) {
            const galleryItem = galleryItemsArray[index];
            const image = galleryItem.querySelector('img');
            const title = galleryItem.querySelector('.gallery-title-text').textContent;
            const description = galleryItem.querySelector('.gallery-description').textContent;

            if (image) {
                lightboxImage.src = image.src;
                lightboxImage.alt = image.alt;
            }
            lightboxTitle.textContent = title;
            lightboxDescription.textContent = description;

            currentIndex = index;

            // Tampilkan lightbox
            lightbox.style.display = 'flex';
            setTimeout(() => {
                lightbox.classList.add('show');
            }, 10);
        }

        // Event listener untuk tombol view
        viewButtons.forEach((button, index) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                openLightbox(index);
            });
        });

        // Event listener untuk gambar galeri
        galleryImages.forEach((image, index) => {
            image.addEventListener('click', () => {
                openLightbox(index);
            });
        });

        // Close lightbox
        function closeLightboxFunction() {
            lightbox.classList.remove('show');
            setTimeout(() => {
                lightbox.style.display = 'none';
            }, 300);
        }

        closeLightbox.addEventListener('click', closeLightboxFunction);

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightboxFunction();
            }
        });

        // Keyboard navigation for lightbox
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && lightbox.classList.contains('show')) {
                closeLightboxFunction();
            } else if (e.key === 'ArrowLeft' && lightbox.classList.contains('show')) {
                currentIndex = (currentIndex - 1 + galleryItemsArray.length) % galleryItemsArray.length;
                openLightbox(currentIndex);
            } else if (e.key === 'ArrowRight' && lightbox.classList.contains('show')) {
                currentIndex = (currentIndex + 1) % galleryItemsArray.length;
                openLightbox(currentIndex);
            }
        });

        // Navigation buttons for lightbox
        if (prevButton && nextButton) {
            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + galleryItemsArray.length) % galleryItemsArray.length;
                openLightbox(currentIndex);
            });

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % galleryItemsArray.length;
                openLightbox(currentIndex);
            });
        }

        // Animasi scroll untuk elemen
        const fadeElements = document.querySelectorAll('.fade-in');

        function checkFade() {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementBottom = element.getBoundingClientRect().bottom;

                if (elementTop < window.innerHeight && elementBottom > 0) {
                    element.classList.add('visible');
                }
            });
        }

        // Cek posisi elemen saat halaman dimuat
        checkFade();

        // Cek posisi elemen saat scroll
        window.addEventListener('scroll', checkFade);

        // Smooth scrolling untuk navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

</body>
</html>