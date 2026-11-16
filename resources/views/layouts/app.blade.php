<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Portfolio')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 10%;
            background: white;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #2563eb;
        }

        nav a {
            text-decoration: none;
            color: #475569;
            margin-left: 25px;
        }

        nav a:hover {
            color: #2563eb;
        }

        .hero {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 10%;
        }

        .hero h1 {
            font-size: 52px;
            margin: 15px 0;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero p {
            font-size: 18px;
            color: #64748b;
            line-height: 1.7;
            max-width: 600px;
        }

        .tag {
            color: #2563eb;
            font-weight: bold;
        }

        .button {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 25px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            width: fit-content;
        }

        .button:hover {
            background: #1d4ed8;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
            background: white;

            
        }

.page-section {
    max-width: 1100px;
    margin: auto;
    padding: 80px 30px;
    min-height: 75vh;
}

.page-title {
    font-size: 38px;
    margin-bottom: 15px;
}

.page-description {
    color: #64748b;
    line-height: 1.8;
    max-width: 750px;
    margin-bottom: 35px;
}

.info-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.04);
}

.info-card h3 {
    margin-bottom: 15px;
    color: #2563eb;
}

.skill-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.skill-item {
    background: #eff6ff;
    color: #2563eb;
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 14px;
}

.contact-link {
    color: #2563eb;
    text-decoration: none;
}

@media (max-width: 600px) {
    .page-section {
        padding: 50px 7%;
    }

    .page-title {
        font-size: 30px;
    }
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 35px;
}

.portfolio-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    transition: transform 0.2s;
}

.portfolio-card:hover {
    transform: translateY(-5px);
}

.portfolio-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.portfolio-content {
    padding: 22px;
}

.portfolio-content h3 {
    font-size: 21px;
    margin: 12px 0;
}

.portfolio-content p {
    color: #64748b;
    line-height: 1.7;
    font-size: 14px;
    margin-bottom: 18px;
}

.portfolio-category {
    color: #2563eb;
    font-size: 12px;
    font-weight: bold;
}

.portfolio-technologies {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.technology {
    background: #eff6ff;
    color: #2563eb;
    padding: 7px 10px;
    border-radius: 6px;
    font-size: 12px;
}

@media (max-width: 850px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 35px;
}

.blog-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    transition: transform 0.2s;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.blog-content {
    padding: 22px;
}

.blog-category {
    color: #2563eb;
    font-size: 12px;
    font-weight: bold;
}

.blog-content h3 {
    font-size: 19px;
    margin: 12px 0;
}

.blog-date {
    color: #94a3b8;
    font-size: 12px;
}

.blog-content p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.7;
    margin: 15px 0;
}

.read-more {
    color: #2563eb;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
}

.read-more:hover {
    text-decoration: underline;
}

.blog-detail-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 12px;
    margin: 25px 0;
}

.blog-detail-content {
    background: white;
    padding: 30px;
    border-radius: 12px;
    line-height: 1.9;
    color: #475569;
}

.blog-detail-content p {
    margin-top: 15px;
}

@media (max-width: 850px) {
    .blog-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .blog-grid {
        grid-template-columns: 1fr;
    }
}

.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
    width: 100%;
}

.hero-text {
    flex: 1;
}

.profile-avatar {
    width: 230px;
    height: 230px;
    min-width: 230px;
    border-radius: 50%;
    overflow: hidden;
    background: #ffffff;
    border: 6px solid white;
    box-shadow: 0 5px 20px rgba(37, 99, 235, 0.12);
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

@media (max-width: 600px) {
    .hero-container {
        flex-direction: column-reverse;
        align-items: center;
        gap: 30px;
    }

    .hero-text {
        width: 100%;
    }

    .profile-avatar {
        width: 160px;
        height: 160px;
        min-width: 160px;
    }
}

        @media (max-width: 600px) {
            nav {
                padding: 20px 5%;
                flex-wrap: wrap;
                gap: 15px;
            }

            nav a {
                margin-left: 10px;
                font-size: 13px;
            }

            .hero {
                padding: 50px 7%;
            }

            .hero h1 {
                font-size: 38px;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
