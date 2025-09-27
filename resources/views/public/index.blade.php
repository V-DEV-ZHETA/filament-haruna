<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Komunitas Dance Cover Haruna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.15.3/dist/echo.iife.js"></script>
    <style>
        /* Smooth scrolling untuk seluruh halaman */
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f7; /* Background pink yang sangat lembut */
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Warna utama yang lebih lembut */
        :root {
            --pink-primary: #ff9eb5; /* Pink lembut */
            --pink-light: #ffeef2; /* Pink sangat muda */
            --pink-medium: #ffb6c1; /* Pink sedang */
            --pink-dark: #ff6b81; /* Pink untuk aksen */
            --text-dark: #333; /* Teks gelap untuk kontras */
            --text-light: #666; /* Teks secondary */
        }
        
        /* Efek sederhana untuk background */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
            z-index: -1;
            opacity: 0.2; /* Dikurangi opacitynya */
            animation: backgroundMove 20s linear infinite;
        }

        /* Floating elements yang lebih sederhana */
        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            font-size: 1.5rem; /* Ukuran lebih kecil */
            animation: float 15s linear infinite;
            opacity: 0.2; /* Lebih transparan */
        }

        .floating-element:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .floating-element:nth-child(2) { top: 20%; right: 15%; animation-delay: 2s; }
        .floating-element:nth-child(3) { top: 40%; left: 20%; animation-delay: 4s; }
        .floating-element:nth-child(4) { top: 60%; right: 10%; animation-delay: 6s; }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); } /* Gerakan lebih halus */
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        /* Efek glassmorphism yang lebih sederhana */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 15px 0 rgba(255, 158, 181, 0.1); /* Bayangan pink lembut */
        }
        
        .glass-dark {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 15px 0 rgba(255, 158, 181, 0.15);
        }
        
        .glass-button {
            background: var(--pink-primary);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 15px 0 rgba(255, 158, 181, 0.2);
            transition: all 0.3s ease;
            color: white;
            font-weight: 600;
        }
        
        .glass-button:hover {
            background: var(--pink-medium);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(255, 158, 181, 0.3);
        }
        
        .hero-bg {
            position: relative;
            height: 400px; /* Dikurangi tingginya */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            overflow: hidden;
        }
        
        .hero-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url('https://ik.imagekit.io/hdxn6kcob/ChatGPT%20Image%20Jul%2018,%202025,%2011_20_31%20PM.png?updatedAt=1752855683255') no-repeat center center;
            background-size: cover;
            z-index: 0;
        }
        
        /* Elemen imut untuk Hero Section */
        .hero-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .hero-element {
            position: absolute;
            opacity: 0.5;
            animation: float 6s ease-in-out infinite;
        }
        
        .hero-element:nth-child(1) {
            top: 10%;
            left: 10%;
            font-size: 1.5rem;
            animation-delay: 0s;
        }
        
        .hero-element:nth-child(2) {
            top: 20%;
            right: 15%;
            font-size: 1.2rem;
            animation-delay: 1s;
        }
        
        .hero-element:nth-child(3) {
            bottom: 20%;
            left: 15%;
            font-size: 1.3rem;
            animation-delay: 2s;
        }
        
        .hero-element:nth-child(4) {
            bottom: 15%;
            right: 10%;
            font-size: 1.2rem;
            animation-delay: 3s;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-title {
            font-weight: 800;
            font-size: 2.8rem; /* Dikurangi ukurannya */
            margin-bottom: 0.5rem;
            color: white;
            text-shadow: none; /* Dihapus text shadow */
        }
        
        .hero-subtitle {
            font-weight: 600;
            font-size: 1.3rem; /* Dikurangi ukurannya */
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            animation: fadeIn 1.5s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .btn-primary {
            background: white;
            color: var(--pink-primary);
            padding: 0.6rem 1.8rem;
            border-radius: 30px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            box-shadow: 0 4px 15px 0 rgba(255, 255, 255, 0.3);
        }
        
        .btn-primary:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(255, 255, 255, 0.4);
        }
        
        nav {
            background: white;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 50;
        }
        
        .nav-cards {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem 0;
            margin: 0;
            list-style: none;
            flex-wrap: wrap;
        }
        
        .nav-card {
            color: var(--text-dark);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .nav-card:hover {
            transform: translateY(-2px);
        }

        /* Deskripsi Komunitas Section */
        .deskripsi-section {
            background: white;
            padding: 40px 0;
            margin: 20px;
            border-radius: 16px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .deskripsi-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .deskripsi-title::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        .deskripsi-content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            align-items: center;
        }
        
        .deskripsi-text {
            flex: 1;
            min-width: 200px;
            max-width: 600px;
        }
        
        .deskripsi-text p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-light);
            margin-bottom: 20px;
            text-align: justify;
        }
        
        .deskripsi-image {
            flex: 1;
            min-width: 300px;
            max-width: 450px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.1);
        }
        
        .deskripsi-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .deskripsi-image:hover img {
            transform: scale(1.03);
        }
        
        section {
            padding: 3rem 0;
            position: relative;
        }
        
        h2 {
            font-weight: 700;
            font-size: 2rem;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .card img {
            width: 100%;
            height: 10rem;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover img {
            transform: scale(1.05);
        }
        
        .card-content {
            padding: 1rem;
        }
        
        .card-content h3 {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }
        
        .card-content p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .social-icons a {
            margin-right: 0.5rem;
            font-size: 1.1rem;
            color: var(--pink-primary);
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--pink-dark);
            transform: translateY(-2px);
        }
        
        footer {
            background: var(--pink-primary);
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            font-weight: 600;
        }
        
        /* Member Section Styles */
        .member-section {
            background: white
            padding: 40px 0;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .member-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .member-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .member-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(100px, 3fr));
            max-width: 1200px;
            margin: 0 auto 30px;
            gap: 20px;
        }
        
        @media (min-width: 900px) {
            .member-grid {
                grid-template-columns: repeat(5, 3fr);
                max-width: 1200px;
            }
        }
        
        .member-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .member-image-container {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 5;
            overflow: hidden;
            background-color: var(--pink-light);
            flex-shrink: 0;
        }
        
        .member-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 85%;
            height: 90%;
            margin-left: 7.5%;
            margin-top: 7.5%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
            border-radius: 8px;
        }
        
        .member-card:hover .member-image {
            transform: scale(1.05);
        }
        
        .member-name {
            padding: 15px 10px;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1rem;
            background: white;
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Berita Section Styles */
        .berita-section {
            background: white;
            padding: 40px 0;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .berita-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .berita-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .berita-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .berita-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .berita-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .berita-image-container {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }
        
        .berita-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .berita-card:hover .berita-image {
            transform: scale(1.03);
        }
        
        .berita-date {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--pink-primary);
            color: white;
            padding: 3px 8px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .berita-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .berita-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }
        
        .berita-content p {
            color: var(--text-light);
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 12px;
            flex-grow: 1;
        }
        
        .berita-link {
            color: var(--pink-primary);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }
        
        .berita-link:hover {
            color: var(--pink-dark);
        }
        
        /* Kontak Section Styles */
        .kontak-section {
            background: white;
            padding: 40px 0;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .kontak-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .kontak-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .kontak-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: start;
        }
        
        @media (max-width: 768px) {
            .kontak-wrapper {
                grid-template-columns: 1fr;
            }
        }
        
        .kontak-info {
            background: var(--pink-light);
            border-radius: 12px;
            padding: 25px;
        }
        
        .kontak-info h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
        }
        
        .kontak-info h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        .kontak-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .kontak-item:hover {
            background: rgba(255, 255, 255, 0.5);
        }
        
        .kontak-item i {
            font-size: 1.1rem;
            color: var(--pink-primary);
            margin-right: 12px;
            width: 24px;
            text-align: center;
        }
        
        .kontak-item p {
            font-size: 0.95rem;
            color: var(--text-dark);
            margin: 0;
        }
        
        .kontak-form {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
        }
        
        .kontak-form h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
        }
        
        .kontak-form h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        .form-group {
            margin-bottom: 15px;
            margin-right: 20px;
        }
        
        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 6px;
            margin-right: 10px;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--text-dark);
            background: white;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--pink-primary);
            box-shadow: 0 0 0 3px rgba(255, 158, 181, 0.2);
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }
        
        .btn-submit {
            background: var(--pink-primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-submit:hover {
            background: var(--pink-medium);
            transform: translateY(-2px);
        }
        
        .social-media {
            margin-top: 25px;
        }
        
        .social-media h4 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 12px;
        }
        
        .social-links {
            display: flex;
            gap: 12px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: var(--pink-primary);
            color: white;
            border-radius: 50%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--pink-medium);
            transform: translateY(-3px);
        }
        
        /* Medsos Section Styles */
        .medsos-section {
            background: white;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
        }
        
        .medsos-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .medsos-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 15px;
            position: relative;
        }
        
        .medsos-title::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        .medsos-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            text-align: center;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .medsos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .medsos-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .medsos-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .medsos-icon-wrapper {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            background: var(--pink-light);
        }
        
        .medsos-icon {
            font-size: 3.5rem;
            position: relative;
            z-index: 1;
            transition: transform 0.5s ease;
        }
        
        .medsos-card:hover .medsos-icon {
            transform: scale(1.1);
        }
        
        .instagram-icon {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .youtube-icon {
            color: #FF0000;
        }
        
        .tiktok-icon {
            color: #000000;
        }

        .discord-icon {
            color: #5865F2;
        }

        .whatsapp-icon {
            color: #25D366;
        }
        
        .medsos-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .medsos-platform {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            text-align: center;
            margin-bottom: 8px;
        }
        
        .medsos-username {
            font-size: 1rem;
            color: var(--text-light);
            margin-bottom: 15px;
            text-align: center;
        }
        
        .medsos-stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
            padding-top: 12px;
            border-top: 1px solid #f1f5f9;
        }
        
        .medsos-stat {
            text-align: center;
        }
        
        .medsos-stat-number {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--pink-primary);
            display: block;
        }
        
        .medsos-stat-label {
            font-size: 0.85rem;
            color: var(--text-light);
        }
        
        .medsos-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            background: var(--pink-primary);
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 0;
            border-radius: 30px;
            transition: all 0.3s ease;
            width: 100%;
            flex-shrink: 0;
        }
        
        .medsos-link:hover {
            background: var(--pink-medium);
            transform: translateY(-2px);
        }
        
        .medsos-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .medsos-link:hover i {
            transform: translateX(3px);
        }
        
        /* Styling khusus untuk Galeri */
        .gallery-section {
            background: white;
            padding: 40px 0;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .gallery-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 30px;
        }
        
        .filter-btn {
            background: white;
            border: 1px solid #e2e8f0;
            color: var(--text-dark);
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .filter-btn:hover {
            background: var(--pink-light);
            color: var(--pink-primary);
        }
        
        .filter-btn.active {
            background: var(--pink-primary);
            color: white;
            border-color: var(--pink-primary);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            background: white;
            border-radius: 12px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .gallery-image-container {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }
        
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            cursor: pointer;
        }
        
        .gallery-item:hover .gallery-image {
            transform: scale(1.03);
        }
        
        .gallery-content {
            padding: 15px;
        }
        
        .gallery-title-text {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }
        
        .gallery-description {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 12px;
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
        
        /* Pesan Section Styles */
        .pesan-section {
            background: white;
            padding: 40px 0;
            border-radius: 16px;
            margin: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .pesan-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .pesan-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--pink-primary);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .pesan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .pesan-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .pesan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px 0 rgba(255, 158, 181, 0.15);
        }
        
        .pesan-header {
            padding: 15px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .pesan-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--pink-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        
        .pesan-info {
            flex: 1;
        }
        
        .pesan-name {
            font-weight: 600;
            font-size: 1rem;
            color: var(--text-dark);
            margin-bottom: 4px;
        }
        
        .pesan-date {
            font-size: 0.8rem;
            color: var(--text-light);
        }
        
        .pesan-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .pesan-message {
            color: var(--text-dark);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 12px;
            flex-grow: 1;
        }
        
        .pesan-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 8px;
            margin-top: 8px;
        }
        
        .pesan-like-btn {
            background: none;
            border: none;
            color: var(--pink-primary);
            font-size: 0.9rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            transition: all 0.3s ease;
        }
        
        .pesan-like-btn:hover {
            color: var(--pink-dark);
            transform: scale(1.05);
        }
        
        .pesan-like-btn.liked {
            color: var(--pink-dark);
        }
        
        .no-pesan {
            text-align: center;
            padding: 30px 20px;
            color: var(--text-light);
            font-size: 1rem;
        }
        
        .pesan-form-container {
            margin-top: 30px;
            background: var(--pink-light);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .pesan-form-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        
        .pesan-form-title::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background-color: var(--pink-primary);
            border-radius: 2px;
        }
        
        /* Animasi untuk elemen saat scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .medsos-grid {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            }
            
            .pesan-grid {
                grid-template-columns: 2fr;
            }

            .berita-grid {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            }
        }

        /* Kutipan imut */
        .cute-quote {
            background: var(--pink-light);
            border-radius: 12px;
            padding: 15px;
            margin: 20px 0;
            position: relative;
            font-style: italic;
            color: var(--text-dark);
            text-align: center;
            font-size: 0.95rem;
        }

        .cute-quote::before {
            content: """;
            position: absolute;
            top: -10px;
            left: 10px;
            font-size: 2rem;
            color: var(--pink-primary);
            opacity: 0.3;
        }

        .cute-quote::after {
            content: """;
            position: absolute;
            bottom: -20px;
            right: 10px;
            font-size: 2rem;
            color: var(--pink-primary);
            opacity: 0.3;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!-- Hero Section -->
<section class="hero-bg" id="beranda">
    <!-- Elemen imut untuk Hero Section -->
    <div class="hero-elements">
        <div class="hero-element">✨</div>
        <div class="hero-element">💖</div>
        <div class="hero-element">🌟</div>
        <div class="hero-element">💃</div>
    </div>
    
    <div class="hero-content">
        <h1 class="hero-title">Haruna Dance Cover <span style="color:#fff9c4;">✨</span></h1>
        <p class="hero-subtitle">Hari Demi Hari Bersama Haruna!!</p>
    </div>
</section>

<header>
    <nav>
        <div class="nav-cards flex flex-wrap justify-center items-center gap-3 md:gap-6 p-2 md:p-4">
            <a href="#beranda" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-home text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Beranda</span>
            </a>
            <a href="#members" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-users text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Member</span>
            </a>
            <a href="#medsos" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-share-alt text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Medsos</span>
            </a>
            <a href="#galeri" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-images text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Galeri</span>
            </a>
            <a href="#berita" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-newspaper text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Berita</span>
            </a>
            <a href="#pesan" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-comment text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Pesan</span>
            </a>
            <a href="#kontak" class="nav-card flex flex-col items-center p-3 md:p-4 bg-white rounded-lg shadow-md hover:shadow-lg hover:bg-pink-50 transition-all duration-300 text-center min-w-[60px] md:min-w-[80px] text-gray-800 hover:text-pink-600">
                <i class="fas fa-envelope text-xl md:text-2xl mb-1"></i>
                <span class="text-xs md:text-sm font-semibold">Kontak</span>
            </a>
        </div>
    </nav>
</header>

<!-- Deskripsi Komunitas Section -->
<section class="deskripsi-section fade-in">
    <div class="deskripsi-container">
        <div class="deskripsi-content">
            <div class="deskripsi-text">
                <p>Haruna adalah komunitas dance cover yang berbasis di Samarinda, Kalimantan Timur, dengan fokus utama pada penampilan dan budaya idol Jepang (J-Pop Idol). Didirikan oleh sekelompok remaja kreatif dan energik, Haruna hadir sebagai wadah untuk mengekspresikan kecintaan terhadap dunia peridolan, menari, dan berkarya di atas panggung. Dengan semangat "Hari demi hari bersama Haruna", komunitas ini aktif mengadakan latihan rutin, mengikuti festival cosplay dan event budaya Jepang, serta memproduksi berbagai konten seperti dance cover, video kreatif, hingga original project. Haruna dance cover Samarinda resmi debut pada bulan Agustus 2023 melalui penampilan perdana mereka di sebuah event komunitas budaya Jepang. Mengusung konsep idol ala Jepang</p>
                
                <!-- Kutipan imut -->
                <div class="cute-quote">
                    "Dance is the hidden language of the soul. Setiap gerakan adalah cerita, dan setiap penampilan adalah perjalanan."
                </div>
            </div>
            <div class="deskripsi-image">
                <img src="https://ik.imagekit.io/hdxn6kcob/IMG_2452.gif?updatedAt=1758117079357" alt="Haruna Dance Cover Performance">
            </div>
        </div>
    </div>
</section>

<main class="container mx-auto px-4 py-8 space-y-16">

    <!-- Members Section -->
    <section id="members" class="member-section fade-in">
        <div class="member-container">
            <h2 class="member-title">Struktur Member</h2>
            <div class="member-grid">
                @foreach($members as $member)
                <a href="{{ route('member.show', $member->id) }}" class="member-card">
                    <div class="member-image-container">
                        @if($member->foto)
                        <img src="{{ asset('storage/' . $member->foto) }}" alt="{{ $member->nama }}" class="member-image" />
                        @else
                        <div class="member-placeholder">
                            <i class="fas fa-user fa-4x"></i>
                        </div>
                        @endif
                    </div>
                    <div class="member-name">{{ $member->nama }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Medsos Section -->
    <section id="medsos" class="medsos-section fade-in">
        <div class="medsos-container">
            <h2 class="medsos-title">Media Sosial</h2>
            <p class="medsos-subtitle">Ikuti kami di berbagai platform media sosial untuk mendapatkan update terbaru tentang haruna dance cover!</p>
            <div class="medsos-grid">
                @foreach($medsos as $medsos_item)
                <div class="medsos-card" data-platform="{{ $medsos_item->platform }}" data-username="{{ $medsos_item->username }}">
                    <div class="medsos-icon-wrapper">
                        @if($medsos_item->platform == 'Instagram')
                        <i class="fab fa-instagram medsos-icon instagram-icon"></i>
                        @elseif($medsos_item->platform == 'YouTube')
                        <i class="fab fa-youtube medsos-icon youtube-icon"></i>
                        @elseif($medsos_item->platform == 'TikTok')
                        <i class="fab fa-tiktok medsos-icon tiktok-icon"></i>
                        @elseif($medsos_item->platform == 'Whatsapp')
                        <i class="fab fa-whatsapp medsos-icon whatsapp-icon"></i>
                        @elseif($medsos_item->platform == 'Discord')
                        <i class="fab fa-discord medsos-icon discord-icon"></i>
                        @elseif($medsos_item->platform == 'NGL')
                        <i class="fab fa-question medsos-icon question-icon"></i>
                        @else
                        <i class="fas fa-globe medsos-icon"></i>
                        @endif
                    </div>
                    <div class="medsos-content">
                        <h3 class="medsos-platform">{{ $medsos_item->platform }}</h3>
                        <p class="medsos-username">{{ $medsos_item->username }}</p>
                        
                        <!-- Hanya tampilkan statistik untuk platform tertentu -->
                        @if(in_array($medsos_item->platform, ['Instagram', 'YouTube', 'TikTok']))
                        <div class="medsos-stats">
                            <div class="medsos-stat">
                                <span class="medsos-stat-number followers-count"><div class="loading"></div></span>
                                <span class="medsos-stat-label">
                                    @if($medsos_item->platform == 'YouTube')
                                        Subscriber
                                    @else
                                        Pengikut
                                    @endif
                                </span>
                            </div>
                            <div class="medsos-stat">
                                <span class="medsos-stat-number posts-count"><div class="loading"></div></span>
                                <span class="medsos-stat-label">
                                    @if($medsos_item->platform == 'YouTube')
                                        Video
                                    @elseif($medsos_item->platform == 'TikTok')
                                        Suka
                                    @else
                                        Posting
                                    @endif
                                </span>
                            </div>
                        </div>
                        @endif
                        
                        <a href="{{ $medsos_item->url }}" target="_blank" class="medsos-link">
                            Kunjungi Link <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Kutipan imut untuk Medsos Section -->
            <div class="cute-quote">
                "Follow us, like us, love us! Setiap dukunganmu adalah semangat bagi kami untuk terus berkarya! 💕"
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="gallery-section fade-in">
        <div class="gallery-container">
            
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="performance">Performance</button>
                <button class="filter-btn" data-filter="behind_the_scene">Behind The Scene</button>
                <button class="filter-btn" data-filter="event">Event</button>
            </div>
            
            <div class="gallery-grid">
                @foreach($galeris->take(8) as $galeri)
                <div class="gallery-item" data-category="{{ $galeri->category ?? 'performance' }}">
                    <div class="gallery-image-container">
                        @if($galeri->image)
                        <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->title }}" class="gallery-image" />
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-pink-300 to-pink-100 flex items-center justify-center text-pink-500 font-bold text-lg">
                            <i class="fas fa-image text-4x"></i>
                        </div>
                        @endif
                    </div>

                    <div class="gallery-content">
                        <h3 class="gallery-title-text">{{ $galeri->title }}</h3>
                        <p class="gallery-description">{{ Str::limit($galeri->description, 100) }}</p>

                        <div class="gallery-meta">
                            <span class="gallery-date">{{ date('d M Y', strtotime($galeri->created_at)) }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if(count($galeris) > 8)
            <div class="text-center mt-8">
                <a href="{{ route('galeri.index') }}" class="btn-primary">Lihat Semua Galeri</a>
            </div>
            @endif
    </section>

    <!-- Berita Section -->
    <section id="berita" class="berita-section fade-in">
        <div class="berita-container">
            <h2 class="berita-title">Berita Terkini</h2>
            <div class="berita-grid">
                @foreach($beritas as $berita)
                <div class="berita-card">
                    <div class="berita-image-container">
                        @if($berita->image)
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="berita-image" />
                        @else
                        <div class="berita-placeholder">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        @endif
                        <div class="berita-date">{{ date('d M Y', strtotime($berita->published_at)) }}</div>
                    </div>
                    <div class="berita-content">
                        <h3>{{ $berita->title }}</h3>
                        <p>{{ Str::limit($berita->content, 150) }}</p>
                        <a href="{{ $berita->video_url }}" target="_blank" class="berita-link">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Kutipan imut untuk Berita Section -->
            <div class="cute-quote">
                "Setiap berita adalah cerita, setiap cerita adalah inspirasi. Tetap update dengan kami! 📰✨"
            </div>
        </div>
    </section>

    <!-- Pesan Section -->
    <section id="pesan" class="pesan-section fade-in">
        <div class="pesan-container">

            <div class="pesan-form-container">
                <h3 class="pesan-form-title">Kirim Pesan Untuk Haruna</h3>
                @if(session('success'))
                    <div class="alert alert-success" style="background: var(--pink-primary); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('comment.store') }}" method="post" id="comment-form">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" class="form-control" required></textarea>
                    </div>
                    <div class="form-submit-container" style="text-align: left;">
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>

            @if(count($comments) > 0)
            <div class="pesan-grid">
                @foreach($comments->take(4) as $comment)
                <div class="pesan-card">
                    <div class="pesan-header">
                        <div class="pesan-avatar">{{ strtoupper(substr($comment->name, 0, 1)) }}</div>
                        <div class="pesan-info">
                            <div class="pesan-name">{{ $comment->name }}</div>
                            <div class="pesan-date">{{ date('d M Y, H:i', strtotime($comment->created_at)) }}</div>
                        </div>
                    </div>
                    <div class="pesan-content">
                        <div class="pesan-message">{{ $comment->message }}</div>
                        <div class="pesan-footer">
                            <button class="pesan-like-btn" data-id="{{ $comment->id }}">
                                <i class="far fa-heart"></i> <span class="like-count">{{ $comment->likes ?? 0 }}</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if(isset($commentsCount) && $commentsCount > 6)
            <div class="text-center mt-8" style="display: flex; justify-content: center; margin-top: 2rem;">
                <a href="{{ route('comments.index') }}" class="btn-primary" style="padding: 0.6rem 1.8rem; border-radius: 30px; font-weight: 700;">
                    Kolom Komentar
                </a>
            </div>
            @endif
            @else
            <div class="no-pesan">
                <i class="fas fa-comment-slash fa-3x mb-4" style="color: var(--pink-primary); opacity: 0.5;"></i>
                <p>Belum ada pesan dari fans. Jadilah yang pertama mengirim pesan untuk Haruna!</p>
            </div>
            @endif
            
            <!-- Kutipan imut untuk Pesan Section -->
            <div class="cute-quote">
                "Setiap pesan dari kalian adalah energi positif bagi kami. Terima kasih atas dukungannya! 💕"
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="kontak-section fade-in">
        <div class="kontak-container">
            <div class="kontak-wrapper">
                <div class="kontak-info">
                    <h3>Informasi Kontak</h3>
                    @foreach($kontaks as $kontak)
                        @php
                            $iconClass = '';
                            switch($kontak->type) {
                                case 'address':
                                    $iconClass = 'fas fa-map-marker-alt';
                                    break;
                                case 'phone':
                                    $iconClass = 'fas fa-phone-alt';
                                    break;
                                case 'email':
                                    $iconClass = 'fas fa-envelope';
                                    break;
                                case 'hours':
                                    $iconClass = 'fas fa-clock';
                                    break;
                                case 'facebook':
                                    $iconClass = 'fab fa-facebook-f';
                                    break;
                                case 'instagram':
                                    $iconClass = 'fab fa-instagram';
                                    break;
                                case 'twitter':
                                    $iconClass = 'fab fa-twitter';
                                    break;
                                case 'youtube':
                                    $iconClass = 'fab fa-youtube';
                                    break;
                                case 'tiktok':
                                    $iconClass = 'fab fa-tiktok';
                                    break;
                                default:
                                    $iconClass = 'fas fa-info-circle';
                            }
                        @endphp
                        @if(in_array($kontak->type, ['facebook', 'instagram', 'twitter', 'youtube', 'tiktok']))
                            <a href="{{ $kontak->value }}" target="_blank" class="kontak-item" style="text-decoration:none; color:inherit;">
                                <i class="{{ $iconClass }}"></i>
                                <p>{{ $kontak->type }}</p>
                            </a>
                        @else
                            <div class="kontak-item">
                                <i class="{{ $iconClass }}"></i>
                                <p>{{ $kontak->value }}</p>
                            </div>
                        @endif
                    @endforeach
                    
                    <div class="social-media">
                        <h4>Ikuti Kami</h4>
                        <div class="social-links">
                            @foreach($medsos as $medsos_item)
                                @php
                                    $iconClass = '';
                                    switch($medsos_item->platform) {
                                        case 'Instagram':
                                            $iconClass = 'fab fa-instagram';
                                            break;
                                        case 'YouTube':
                                            $iconClass = 'fab fa-youtube';
                                            break;
                                        case 'TikTok':
                                            $iconClass = 'fab fa-tiktok';
                                            break;
                                        case 'Whatsapp':
                                            $iconClass = 'fab fa-whatsapp';
                                            break;
                                        case 'Discord':
                                            $iconClass = 'fab fa-discord';
                                            break;
                                        case 'NGL':
                                            $iconClass = 'fas fa-question';
                                            break;
                                        default:
                                            $iconClass = 'fas fa-globe';
                                    }
                                @endphp
                                <a href="{{ $medsos_item->value }}" target="_blank"><i class="{{ $iconClass }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="kontak-form">
                    <h3>Hubungi Kami</h3>
                    @if(session('success'))
                        <div class="alert alert-success" style="background: var(--pink-primary); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('comment.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" name="pesan" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Kutipan imut untuk Kontak Section -->
            <div class="cute-quote">
                "Jangan ragu untuk menghubungi kami. Setiap saran dan masukan Anda sangat berarti bagi kami! 💌"
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

<script>
    // Initialize Laravel Echo with Pusher
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env("PUSHER_APP_KEY") }}',
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        forceTLS: true
    });

    document.addEventListener('DOMContentLoaded', function() {
        async function getInstagramData(username) {
            try {
                const response = await fetch(`https://www.instagram.com/${username}/?__a=1&__d=dis`);
                
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                
                const data = await response.json();
                
                const userData = data.graphql.user;
                
                return {
                    followers: formatNumber(userData.edge_followed_by.count),
                    posts: formatNumber(userData.edge_owner_to_timeline_media.count)
                };
            } catch (error) {
                console.error('Error fetching Instagram data:', error);
                return {
                    followers: '614', 
                    posts: '53'      
                };
            }
        }
        
        async function getYoutubeData(channelId) {
            try {
                const API_KEY = 'AIzaSyDYVj5s7m0gX5Rr7p8W9x7Q6W5eR4tY3vU';
                const response = await fetch(`https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${channelId}&key=${API_KEY}`);
                
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                
                const data = await response.json();
                
                if (data.items && data.items.length > 0) {
                    const statistics = data.items[0].statistics;
                    
                    return {
                        followers: formatNumber(statistics.subscriberCount),
                        posts: formatNumber(statistics.videoCount)
                    };
                } else {
                    throw new Error('Channel not found');
                }
            } catch (error) {
                console.error('Error fetching YouTube data:', error);
                return {
                    followers: '101', // Nilai default jika gagal
                    posts: '7'      // Nilai default jika gagal
                };
            }
        }
        
        // Fungsi untuk mengambil data TikTok
        async function getTikTokData(username) {
            try {
                // Menggunakan API alternatif untuk TikTok
                const response = await fetch(`https://www.tiktok.com/@${username}`);
                
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                
                const html = await response.text();
                
                // Ekstrak data dari HTML menggunakan regex
                const followersMatch = html.match(/"followerCount":(\d+)/);
                const postsMatch = html.match(/"videoCount":(\d+)/);
                
                const followers = followersMatch ? formatNumber(parseInt(followersMatch[1])) : '12.5K';
                const posts = postsMatch ? formatNumber(parseInt(postsMatch[1])) : '842';
                
                return {
                    followers,
                    posts
                };
            } catch (error) {
                console.error('Error fetching TikTok data:', error);
                return {
                    followers: '68', // Nilai default jika gagal
                    posts: '1,1K'      // Nilai default jika gagal
                };
            }
        }
        
        // Fungsi untuk memformat angka menjadi format yang lebih mudah dibaca
        function formatNumber(num) {
            if (num >= 1000000) {
                return (num / 1000000).toFixed(1) + 'M';
            } else if (num >= 1000) {
                return (num / 1000).toFixed(1) + 'K';
            } else {
                return num.toString();
            }
        }
        
        // Fungsi untuk memperbarui statistik media sosial
        async function updateSocialStats() {
            const cards = document.querySelectorAll('.medsos-card');
            
            for (const card of cards) {
                const platform = card.getAttribute('data-platform');
                const username = card.getAttribute('data-username');
                const followersElement = card.querySelector('.followers-count');
                const postsElement = card.querySelector('.posts-count');
                
                let stats = {
                    followers: '12.5K',
                    posts: '842'
                };
                
                try {
                    switch (platform) {
                        case 'Instagram':
                            stats = await getInstagramData(username);
                            break;
                        case 'YouTube':
                            // Untuk YouTube, kita memerlukan channel ID, bukan username
                            // Di sini kita menggunakan username sebagai placeholder
                            stats = await getYoutubeData(username);
                            break;
                        case 'TikTok':
                            stats = await getTikTokData(username);
                            break;
                    }
                } catch (error) {
                    console.error(`Error updating stats for ${platform}:`, error);
                }
                
                // Memperbarui elemen DOM dengan data yang diperoleh
                followersElement.textContent = stats.followers;
                postsElement.textContent = stats.posts;
            }
        }
        
        // Memanggil fungsi untuk memperbarui statistik media sosial
        updateSocialStats();
        
        // Memperbarui statistik setiap 30 menit (1800000 ms)
        setInterval(updateSocialStats, 1800000);
        
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
        
        // Like button functionality
        const likeButtons = document.querySelectorAll('.pesan-like-btn');

        likeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-id');
                const likeCountElement = this.querySelector('.like-count');
                const heartIcon = this.querySelector('i');

                // Toggle liked state
                if (this.classList.contains('liked')) {
                    this.classList.remove('liked');
                    heartIcon.classList.remove('fas');
                    heartIcon.classList.add('far');

                    // Update like count
                    const currentCount = parseInt(likeCountElement.textContent);
                    likeCountElement.textContent = currentCount - 1;
                } else {
                    this.classList.add('liked');
                    heartIcon.classList.remove('far');
                    heartIcon.classList.add('fas');

                    // Update like count
                    const currentCount = parseInt(likeCountElement.textContent);
                    likeCountElement.textContent = currentCount + 1;
                }

                // Send AJAX request to update like count in database
                fetch(`/comments/${commentId}/like`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Like updated:', data);
                })
                .catch(error => {
                    console.error('Error updating like:', error);
                });
            });
        });

        // Real-time like updates using Laravel Echo
        window.Echo.channel('comments')
            .listen('.comment.liked', (e) => {
                console.log('Real-time like update received:', e);

                // Find the comment element with the matching ID
                const commentElement = document.querySelector(`[data-id="${e.comment_id}"]`);
                if (commentElement) {
                    const likeCountElement = commentElement.querySelector('.like-count');
                    if (likeCountElement) {
                        // Update the like count with the new value from the server
                        likeCountElement.textContent = e.likes;

                        // Add a subtle animation to indicate the update
                        likeCountElement.style.transform = 'scale(1.2)';
                        setTimeout(() => {
                            likeCountElement.style.transform = 'scale(1)';
                        }, 200);
                    }
                }
            });
        
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

        // Comment form AJAX functionality
        const commentForm = document.getElementById('comment-form');
        if (commentForm) {
            commentForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        const successDiv = document.createElement('div');
                        successDiv.style.cssText = 'background: var(--pink-primary); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;';
                        successDiv.textContent = data.message;
                        commentForm.parentNode.insertBefore(successDiv, commentForm);

                        // Clear form
                        commentForm.reset();

                        // Refresh the page after successful submission
                        setTimeout(() => {
                            location.reload();
                        }, 1000); // Refresh after 1 second to show success message briefly
                    } else {
                        // Show error message
                        const errorDiv = document.createElement('div');
                        errorDiv.style.cssText = 'background: var(--pink-primary); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;';
                        errorDiv.textContent = data.message || 'Terjadi kesalahan saat mengirim pesan.';
                        commentForm.parentNode.insertBefore(errorDiv, commentForm);

                        // Remove error message after 5 seconds
                        setTimeout(() => {
                            errorDiv.remove();
                        }, 5000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    const errorDiv = document.createElement('div');
                    errorDiv.style.cssText = 'background: var(--pink-primary); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center;';
                    errorDiv.textContent = 'Terjadi kesalahan saat mengirim pesan.';
                    commentForm.parentNode.insertBefore(errorDiv, commentForm);

                    // Remove error message after 5 seconds
                    setTimeout(() => {
                        errorDiv.remove();
                    }, 5000);
                });
            });
        }
    });
</script>

</body>
</html>