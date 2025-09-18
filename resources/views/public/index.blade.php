<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Komunitas Dance Cover Haruna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Smooth scrolling untuk seluruh halaman */
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
        
        /* Animated background */
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
        
        /* Efek glassmorphism futuristik */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
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
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
        }
        
        .glass-button {
            background: rgba(255, 107, 129, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(255, 107, 129, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .glass-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .glass-button:hover::before {
            transform: translateX(100%);
        }
        
        .glass-button:hover {
            background: rgba(255, 71, 87, 0.8);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px 0 rgba(255, 107, 129, 0.3);
        }
        
        .hero-bg {
            background: url('https://ik.imagekit.io/hdxn6kcob/ChatGPT%20Image%20Jul%2018,%202025,%2011_20_31%20PM.png?updatedAt=1752855683255') no-repeat center center;
            background-size: cover;
            position: relative;
            height: 400px;
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
            z-index: 0;
        }
        
        
        @keyframes particleFloat {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(-50px, -50px) rotate(360deg); }
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
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-title {
            font-weight: 900;
            font-size: 3.5rem;
            margin-bottom: 0.5rem;
            color: white;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        
        .hero-subtitle {
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            animation: fadeIn 1.5s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .btn-primary {
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            font-weight: 700;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(255, 107, 129, 0.2);
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: pulse 2s infinite;
        }
        
        
        .btn-primary:hover {
            background: rgba(255, 71, 87, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px 0 rgba(255, 107, 129, 0.3);
        }
        
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
            color: #333;
        }
        
        nav ul li a {
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
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
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            transition: width 0.3s ease;
        }
        
        nav ul li a:hover {
            color: #ff6b81;
            background: rgba(255, 107, 129, 0.1);
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }

        /* Deskripsi Komunitas Section */
        .deskripsi-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 50px 0;
            margin-bottom: 30px;
            position: relative;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            overflow: hidden;
        }
        
        .deskripsi-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .deskripsi-title::after {
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
        
        .deskripsi-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            align-items: left;
            position: relative;
            z-index: 1;
        }
        
        .deskripsi-text {
            flex: 1;
            min-width: 200px;
            max-width: 640px;
        }
        
        .deskripsi-text p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }
        
        .deskripsi-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            position: relative;
        }
        
        .deskripsi-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.3), rgba(199, 216, 249, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
        .deskripsi-image:hover::before {
            opacity: 1;
        }
        
        .deskripsi-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .deskripsi-image:hover img {
            transform: scale(1.05);
        }
        
        .deskripsi-features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
            justify-content: center;
        }
        
        section {
            padding: 4rem 0;
            position: relative;
        }
        
        h2 {
            font-weight: 900;
            font-size: 2.5rem;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .card:hover::before {
            opacity: 1;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px 0 rgba(31, 38, 135, 0.2);
        }
        
        .card img {
            width: 100%;
            height: 12rem;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover img {
            transform: scale(1.05);
        }
        
        .card-content {
            padding: 1rem 1.5rem;
        }
        
        .card-content h3 {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .card-content p {
            color: #555;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .social-icons a {
            margin-right: 0.5rem;
            font-size: 1.25rem;
            color: #ff6b81;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: #ff4757;
            transform: translateY(-3px);
        }
        
        footer {
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: white;
            padding: 2rem 0;
            text-align: center;
            font-weight: 600;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* Member Section Styles */
        .member-section {
            background: linear-gradient(135deg, rgba(245, 247, 250, 0.5) 0%, rgba(195, 207, 226, 0.5) 100%);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            padding: 60px 0;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .member-section::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(199, 216, 249, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: rotate 40s linear infinite reverse;
        }
        
        .member-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .member-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .member-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .member-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            max-width: 1200px;
            margin: 0 auto 30px;
            gap: 30px;
        }
        
        @media (min-width: 768px) {
            .member-grid {
                grid-template-columns: repeat(5, 1fr);
                max-width: 1200px;
            }
        }
        
        .member-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            text-align: center;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        
        .member-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }
        
        .member-card:hover::before {
            opacity: 1;
        }
        
        .member-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 20px 40px 0 rgba(31, 38, 135, 0.25);
        }
        
        .member-image-container {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 5;
            overflow: hidden;
            background-color: rgba(243, 244, 246, 0.5);
            flex-shrink: 0;
            padding: 10px;
            box-sizing: border-box;
            z-index: 1;
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
            transform: scale(1.1) rotate(2deg);
        }
        
        .member-name {
            padding: 18px 12px;
            font-weight: 600;
            color: #333;
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }
        
        .download-btn-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }
        
        .download-btn {
            background: rgba(16, 185, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 14px 24px;
            border-radius: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            box-shadow: 0 8px 32px 0 rgba(16, 185, 129, 0.2);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .download-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .download-btn:hover::before {
            transform: translateX(100%);
        }
        
        .download-btn:hover {
            background: rgba(5, 150, 105, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px 0 rgba(16, 185, 129, 0.3);
        }
        
        .member-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(243, 244, 246, 0.5);
            color: #9ca3af;
            border-radius: 8px;
        }
        
        /* Berita Section Styles */
        .berita-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 60px 0;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .berita-section::before {
            content: "";
            position: absolute;
            bottom: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 107, 129, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: rotate 35s linear infinite;
        }
        
        .berita-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .berita-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .berita-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .berita-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .berita-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        
        .berita-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }
        
        .berita-card:hover::before {
            opacity: 1;
        }
        
        .berita-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px 0 rgba(31, 38, 135, 0.25);
        }
        
        .berita-image-container {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }
        
        .berita-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .berita-card:hover .berita-image {
            transform: scale(1.05);
        }
        
        .berita-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .berita-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }
        
        .berita-content h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }
        
        .berita-content p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        
        .berita-link {
            color: #ff6b81;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }
        
        .berita-link:hover {
            color: #ff4757;
            transform: translateX(5px);
        }
        
        .berita-placeholder {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, rgba(251, 199, 199, 0.5) 0%, rgba(199, 216, 249, 0.5) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }
        
        /* Kontak Section Styles */
        .kontak-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 60px 0;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .kontak-section::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: rotate 45s linear infinite reverse;
        }
        
        .kontak-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .kontak-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .kontak-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .kontak-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }
        
        @media (max-width: 768px) {
            .kontak-wrapper {
                grid-template-columns: 1fr;
            }
        }
        
        .kontak-info {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .kontak-info::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }
        
        .kontak-info:hover::before {
            opacity: 1;
        }
        
        .kontak-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .kontak-info h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .kontak-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .kontak-item:hover {
            background: rgba(255, 107, 129, 0.1);
            transform: translateX(5px);
        }
        
        .kontak-item i {
            font-size: 1.2rem;
            color: #ff6b81;
            margin-right: 15px;
            width: 24px;
            text-align: center;
        }
        
        .kontak-item p {
            font-size: 1rem;
            color: #555;
            margin: 0;
        }
        
        .kontak-form {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .kontak-form::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.1), rgba(199, 216, 249, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
        }
        
        .kontak-form:hover::before {
            opacity: 1;
        }
        
        .kontak-form h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .kontak-form h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .form-group {
            margin-bottom: 20px;

        }
        
        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        .form-control {
            width: 93%;
            padding: 12px 15px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            font-size: 1rem;
            color: #555;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #ff6b81;
            box-shadow: 0 0 0 3px rgba(255, 107, 129, 0.2);
            background: rgba(255, 255, 255, 0.7);
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        
        .btn-submit {
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 32px 0 rgba(255, 107, 129, 0.2);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-submit::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .btn-submit:hover::before {
            transform: translateX(100%);
        }
        
        .btn-submit:hover {
            background: rgba(255, 71, 87, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px 0 rgba(255, 107, 129, 0.3);
        }
        
        .social-media {
            margin-top: 30px;
        }
        
        .social-media h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 107, 129, 0.8);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: white;
            border-radius: 50%;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .social-links a:hover {
            background: rgba(255, 71, 87, 0.9);
            transform: translateY(-5px) rotate(15deg);
            box-shadow: 0 8px 32px 0 rgba(255, 107, 129, 0.4);
        }
        
        /* Medsos Section Styles */
        .medsos-section {
            background: linear-gradient(135deg, rgba(249, 249, 249, 0.7) 0%, rgba(240, 240, 240, 0.7) 100%);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        
        .medsos-section::before {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 107, 129, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }
        
        .medsos-section::after {
            content: "";
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(199, 216, 249, 0.1) 0%, transparent 70%);
            z-index: 0;
            animation: float 10s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .medsos-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .medsos-title {
            font-size: 3rem;
            font-weight: 800;
            color: #ff6b81;
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .medsos-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
        .medsos-subtitle {
            font-size: 1.2rem;
            color: #666;
            text-align: center;
            margin-bottom: 60px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .medsos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            grid-auto-rows: 1fr;
        }
        
        .medsos-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            box-shadow: 0 15px 35px 0 rgba(31, 38, 135, 0.15);
            transition: all 0.5s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .medsos-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ff6b81 0%, #c7d8f9 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        
        .medsos-card:hover::before {
            transform: scaleX(1);
        }
        
        .medsos-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 25px 50px 0 rgba(31, 38, 135, 0.25);
        }
        
        .medsos-icon-wrapper {
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        .medsos-icon-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 107, 129, 0.05) 0%, rgba(199, 216, 249, 0.05) 100%);
            z-index: 0;
        }
        
        .medsos-icon {
            font-size: 4rem;
            position: relative;
            z-index: 1;
            transition: transform 0.5s ease;
        }
        
        .medsos-card:hover .medsos-icon {
            transform: scale(1.2) rotate(10deg);
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
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        
        .medsos-platform {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
            text-align: center;
        }
        
        .medsos-username {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
        .medsos-stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            padding-top: 15px;
            border-top: 1px solid rgba(240, 240, 240, 0.5);
        }
        
        .medsos-stat {
            text-align: center;
        }
        
        .medsos-stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ff6b81;
            display: block;
        }
        
        .medsos-stat-label {
            font-size: 0.9rem;
            color: #888;
        }
        
        .medsos-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            background: linear-gradient(90deg, rgba(255, 107, 129, 0.8), rgba(199, 216, 249, 0.8));
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 0px;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 107, 129, 0.3);
            width: 100%;
            flex-shrink: 0;
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .medsos-link::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .medsos-link:hover::before {
            transform: translateX(100%);
        }
        
        .medsos-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 129, 0.4);
        }
        
        .medsos-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .medsos-link:hover i {
            transform: translateX(5px);
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 107, 129, 0.3);
            border-radius: 50%;
            border-top-color: #ff6b81;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Styling khusus untuk Galeri */
        .gallery-section {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 60px 0;
            border-radius: 20px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
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
            color: #ff6b81;
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
            background: linear-gradient(90deg, #ff6b81, #c7d8f9);
            border-radius: 2px;
        }
        
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
            color: #555;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
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
            color: #ff6b81;
            transform: translateY(-2px);
        }
        
        .filter-btn.active {
            background: rgba(255, 107, 129, 0.7);
            color: white;
            border-color: rgba(255, 255, 255, 0.5);
        }
        
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
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
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
            transition: opacity 0.3s ease;
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
            color: white;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .gallery-content {
            padding: 20px;
        }
        
        .gallery-title-text {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }
        
        .gallery-description {
            color: #555;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .gallery-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .gallery-date {
            color: #666;
            font-size: 0.8rem;
        }
        
        .gallery-view-btn {
            background: rgba(255, 107, 129, 0.2);
            color: #ff6b81;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .gallery-view-btn:hover {
            background: rgba(255, 107, 129, 0.4);
            transform: scale(1.1);
        }
        
        .platform-section {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 30px;
            margin-top: 40px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        
        .platform-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }
        
        .platform-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .platform-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .platform-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .platform-icon::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .platform-icon:hover::before {
            transform: translateX(100%);
        }
        
        
        
        .download-all-btn {
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.8), rgba(5, 150, 105, 0.8));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px 0 rgba(16, 185, 129, 0.2);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .download-all-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
            z-index: -1;
        }
        
        .download-all-btn:hover::before {
            transform: translateX(100%);
        }
        
        .download-all-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px 0 rgba(16, 185, 129, 0.3);
        }
        
        /* Lightbox styling */
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
            transition: opacity 0.3s ease;
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
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
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
            color: white;
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
        
        /* Tombol navigasi lightbox */
        .lightbox-prev, .lightbox-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1002;
            transition: all 0.3s ease;
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
        
        /* Animasi untuk elemen saat scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .medsos-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            .platform-grid {
                gap: 20px;
            }
            
            .platform-icon {
                width: 60px;
                height: 60px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;900&display=swap" rel="stylesheet">
</head>
<body>

<!-- Hero Section -->
<section class="hero-bg" id="beranda">
    <div class="hero-content">
        <h1 class="hero-title">Haruna Dance Cover <span style="color:#fff9c4;">✨</span></h1>
        <p class="hero-subtitle">Hari Demi Hari Bersama Haruna!!</p>
        <a href="#members" class="btn-primary">Lihat Member</a>
    </div>
</section>

<header>
    <nav>
        <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#members">Member</a></li>
            <li><a href="#medsos">Medsos</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#berita">Berita</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>
</header>

<!-- Deskripsi Komunitas Section -->
<section class="deskripsi-section fade-in">
    <div class="deskripsi-container">
        <div class="deskripsi-content">
            <div class="deskripsi-text">
                <p>Haruna adalah komunitas dance cover yang berbasis di Samarinda, Kalimantan Timur, dengan fokus utama pada penampilan dan budaya idol Jepang (J-Pop Idol). Didirikan oleh sekelompok remaja kreatif dan energik, Haruna hadir sebagai wadah untuk mengekspresikan kecintaan terhadap dunia peridolan, menari, dan berkarya di atas panggung. Dengan semangat "Hari demi hari bersama Haruna", komunitas ini aktif mengadakan latihan rutin, mengikuti festival cosplay dan event budaya Jepang, serta memproduksi berbagai konten seperti dance cover, video kreatif, hingga original project. Haruna dance cover Samarinda resmi debut pada bulan Agustus 2023 melalui penampilan perdana mereka di sebuah event komunitas budaya Jepang. Mengusung konsep idol ala Jepang</p>
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
            <h2 class="member-title">Active Member</h2>
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
            <p class="medsos-subtitle">Ikuti kami di berbagai platform media sosial untuk mendapatkan update terbaru tentang komunitas dance cover Haruna!</p>
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
        </div>
    </section>

    <!-- Galeri Section -->
        <section id="galeri" class="gallery-section fade-in">
        <div class="gallery-container">
            <h2 class="gallery-title">Galeri Foto</h2>
            
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="performance">Performance</button>
                <button class="filter-btn" data-filter="behind_the_scene">Behind The Scene</button>
                <button class="filter-btn" data-filter="event">Event</button>
            </div>
            
            <div class="gallery-grid">
                @foreach($galeris as $galeri)
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
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
                    
                    <div class="social-media" style="display:none;">
                        <h4>Ikuti Kami</h4>
                        <div class="social-links">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="kontak-form">
                    <h3>Pesan Untuk Haruna!!</h3>
                    @if(session('success'))
                        <div class="alert alert-success" style="background: rgba(16, 185, 129, 0.8); color: white; padding: 10px; border-radius: 8px; margin-bottom: 20px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('comment.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
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
        // Fungsi untuk mengambil data Instagram
        async function getInstagramData(username) {
            try {
                // Menggunakan API alternatif untuk Instagram
                const response = await fetch(`https://www.instagram.com/${username}/?__a=1&__d=dis`);
                
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                
                const data = await response.json();
                
                // Ekstrak data dari respons Instagram
                const userData = data.graphql.user;
                
                return {
                    followers: formatNumber(userData.edge_followed_by.count),
                    posts: formatNumber(userData.edge_owner_to_timeline_media.count)
                };
            } catch (error) {
                console.error('Error fetching Instagram data:', error);
                return {
                    followers: '614', // Nilai default jika gagal
                    posts: '53'      // Nilai default jika gagal
                };
            }
        }
        
        // Fungsi untuk mengambil data YouTube
        async function getYoutubeData(channelId) {
            try {
                // Menggunakan YouTube Data API v3
                // Ganti API_KEY dengan API key Anda sendiri
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