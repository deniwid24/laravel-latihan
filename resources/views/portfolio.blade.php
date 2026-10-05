<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Portofolio Pribadi</title>

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    /* ==============================
       GLOBAL
    ============================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: "Poppins", sans-serif;
        background: #080b14;
        color: #ffffff;
        line-height: 1.7;
        overflow-x: hidden;
    }

    body::before {
        content: "";
        position: fixed;
        inset: 0;
        background:
            radial-gradient(
                circle at 10% 20%,
                rgba(99, 102, 241, 0.15),
                transparent 30%
            ),
            radial-gradient(
                circle at 90% 80%,
                rgba(236, 72, 153, 0.12),
                transparent 30%
            );
        pointer-events: none;
        z-index: -2;
    }

    /* Background Decoration */

    .background-circle {
        position: fixed;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        filter: blur(100px);
        opacity: 0.25;
        z-index: -1;
    }

    .circle-1 {
        background: #6366f1;
        top: -100px;
        left: -100px;
    }

    .circle-2 {
        background: #ec4899;
        right: -100px;
        bottom: -100px;
    }

    /* ==============================
       CONTAINER
    ============================== */

    .container {
        width: min(1100px, 92%);
        margin: auto;
    }

    /* ==============================
       HERO
    ============================== */

    .hero {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 80px 20px;
    }

    .profile-wrapper {
        position: relative;
        margin-bottom: 30px;
    }

    .profile-wrapper::before {
        content: "";
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        background: linear-gradient(
            135deg,
            #6366f1,
            #ec4899
        );
        animation: rotate 6s linear infinite;
    }

    .profile-image {
        position: relative;
        width: 170px;
        height: 170px;
        object-fit: cover;
        border-radius: 50%;
        border: 6px solid #080b14;
        display: block;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .subtitle {
        color: #a5b4fc;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 4px;
        margin-bottom: 12px;
    }

    .hero h1 {
        font-size: clamp(45px, 8vw, 85px);
        line-height: 1.1;
        font-weight: 800;
    }

    .hero h1 span {
        background: linear-gradient(
            90deg,
            #818cf8,
            #ec4899
        );

        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .hero-description {
        max-width: 650px;
        color: #a1a1aa;
        margin-top: 25px;
        font-size: 17px;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        margin-top: 35px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn {
        text-decoration: none;
        padding: 13px 27px;
        border-radius: 50px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-primary {
        color: white;
        background: linear-gradient(
            135deg,
            #6366f1,
            #ec4899
        );
        box-shadow: 0 10px 30px rgba(99, 102, 241, 0.25);
    }

    .btn-primary:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(236, 72, 153, 0.3);
    }

    .btn-outline {
        color: white;
        border: 1px solid #3f3f46;
    }

    .btn-outline:hover {
        background: #18181b;
        border-color: #6366f1;
        transform: translateY(-4px);
    }

    /* ==============================
       SECTION
    ============================== */

    .section {
        padding: 100px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-title span {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 4px;
        color: #818cf8;
    }

    .section-title h2 {
        font-size: 38px;
        margin-top: 5px;
    }

    /* ==============================
       ABOUT
    ============================== */

    .about-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .about-text,
    .quote {
        padding: 35px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.04);
        backdrop-filter: blur(15px);
        border-radius: 20px;
    }

    .about-text h3 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .about-text p {
        color: #a1a1aa;
        margin-bottom: 15px;
    }

    .quote {
        display: flex;
        flex-direction: column;
        justify-content: center;

        background:
            linear-gradient(
                135deg,
                rgba(99, 102, 241, 0.15),
                rgba(236, 72, 153, 0.08)
            );
    }

    .quote-icon {
        font-size: 70px;
        color: #818cf8;
        line-height: 0.7;
    }

    .quote p {
        font-size: 21px;
        font-style: italic;
        margin: 20px 0;
    }

    .quote small {
        color: #a1a1aa;
    }

    /* ==============================
       TABLE
    ============================== */

    .table-card {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        overflow: hidden;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        text-align: left;
        background: rgba(99, 102, 241, 0.15);
        padding: 20px;
        color: #a5b4fc;
    }

    td {
        padding: 22px 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        color: #d4d4d8;
    }

    td strong {
        display: block;
        color: white;
    }

    td small {
        color: #71717a;
    }

    .year {
        color: #a5b4fc;
        font-weight: 600;
    }

    /* ==============================
       HOBBY
    ============================== */

    .hobby-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .hobby-card {
        padding: 30px 20px;
        text-align: center;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.04);
        transition: 0.3s;
    }

    .hobby-card:hover {
        transform: translateY(-8px);
        border-color: rgba(129, 140, 248, 0.5);
        background: rgba(99, 102, 241, 0.08);
    }

    .hobby-icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .hobby-card h3 {
        margin-bottom: 8px;
    }

    .hobby-card p {
        color: #a1a1aa;
        font-size: 14px;
    }

    /* ==============================
       ACTIVITY
    ============================== */

    .activity-list {
        display: grid;
        gap: 15px;
    }

    .activity-item {
        display: flex;
        align-items: center;
        gap: 25px;
        padding: 22px 25px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.07);
        transition: 0.3s;
    }

    .activity-item:hover {
        transform: translateX(8px);
        border-color: #6366f1;
    }

    .activity-item span {
        color: #818cf8;
        font-weight: 700;
    }

    .activity-item p {
        font-weight: 500;
    }

    /* ==============================
       AUDIO
    ============================== */

    .media-card {
        display: flex;
        align-items: center;
        gap: 25px;
        padding: 30px;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                rgba(99, 102, 241, 0.12),
                rgba(236, 72, 153, 0.08)
            );

        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .media-icon {
        font-size: 45px;
    }

    .media-content {
        flex: 1;
    }

    .media-content p {
        color: #a1a1aa;
        margin-bottom: 15px;
    }

    audio {
        width: 100%;
    }

    /* ==============================
       VIDEO
    ============================== */

    .video-card {
        padding: 10px;
        background: rgba(255, 255, 255, 0.04);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .video-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        border-radius: 14px;
    }

    .video-wrapper iframe {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* ==============================
       SOCIAL MEDIA
    ============================== */

    .contact-section {
        text-align: center;
    }

    .contact-description {
        color: #a1a1aa;
        margin-bottom: 30px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social {
        display: flex;
        align-items: center;
        gap: 10px;

        padding: 13px 25px;

        color: white;

        text-decoration: none;

        border-radius: 50px;

        font-weight: 600;

        transition: 0.3s;
    }

    .social span {
        font-size: 20px;
    }

    .instagram {
        background: linear-gradient(
            135deg,
            #833ab4,
            #fd1d1d,
            #fcb045
        );
    }

    .linkedin {
        background: #0a66c2;
    }

    .social:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    /* ==============================
       FOOTER
    ============================== */

    footer {
        text-align: center;
        padding: 50px 0 40px;
        color: #71717a;
    }

    .footer-line {
        width: 100%;
        height: 1px;
        background: rgba(255, 255, 255, 0.08);
        margin-bottom: 25px;
    }

    footer p {
        color: #a1a1aa;
    }

    footer small {
        color: #52525b;
    }

    /* ==============================
       RESPONSIVE
    ============================== */

    @media (max-width: 900px) {

        .hobby-grid {
            grid-template-columns: repeat(2, 1fr);
        }

    }

    @media (max-width: 700px) {

        .hero {
            min-height: 90vh;
        }

        .about-card {
            grid-template-columns: 1fr;
        }

        .section {
            padding: 70px 0;
        }

        .section-title h2 {
            font-size: 30px;
        }

        .media-card {
            flex-direction: column;
            text-align: center;
        }

    }

    @media (max-width: 500px) {

        .container {
            width: 90%;
        }

        .profile-image {
            width: 135px;
            height: 135px;
        }

        .hero h1 {
            font-size: 43px;
        }

        .hero-description {
            font-size: 14px;
        }

        .hobby-grid {
            grid-template-columns: 1fr;
        }

        .about-text,
        .quote {
            padding: 25px;
        }

        th,
        td {
            padding: 15px;
            font-size: 13px;
        }

        .btn {
            width: 100%;
        }

        .hero-buttons {
            width: 100%;
        }

    }
</style>
```

</head>

<body>

```
<!-- Background Decoration -->
<div class="background-circle circle-1"></div>
<div class="background-circle circle-2"></div>

<div class="container">

    <!-- ==============================
         HERO
    ============================== -->

    <header class="hero">

        <div class="profile-wrapper">
            <img
                src="profil.jpg"
                alt="Foto Profil"
                class="profile-image">
        </div>

        <p class="subtitle">
            WELCOME TO MY PORTFOLIO
        </p>

        <h1>
            Portofolio <span>Pribadi</span>
        </h1>

        <p class="hero-description">
            Halo! Saya adalah seorang yang memiliki semangat
            untuk belajar, berkembang, dan menciptakan
            karya-karya kreatif.
        </p>

        <div class="hero-buttons">

            <a href="#tentang" class="btn btn-primary">
                Tentang Saya
            </a>

            <a href="#kontak" class="btn btn-outline">
                Hubungi Saya
            </a>

        </div>

    </header>


    <!-- ==============================
         TENTANG SAYA
    ============================== -->

    <section id="tentang" class="section">

        <div class="section-title">

            <span>TENTANG</span>

            <h2>Tentang Saya</h2>

        </div>

        <div class="about-card">

            <div class="about-text">

                <h3>
                    Halo, saya seorang kreator 👋
                </h3>

                <p>
                    Selamat datang di portofolio saya.
                    Saya memiliki ketertarikan pada teknologi,
                    kreativitas, desain, dan pengembangan diri.
                </p>

                <p>
                    Saya selalu berusaha mempelajari hal-hal
                    baru dan mengembangkan kemampuan untuk
                    menghasilkan karya yang bermanfaat dan menarik.
                </p>

            </div>

            <div class="quote">

                <span class="quote-icon">
                    "
                </span>

                <p>
                    Kreativitas adalah intelijensi
                    yang bersenang-senang.
                </p>

                <small>
                    — Albert Einstein
                </small>

            </div>

        </div>

    </section>


    <!-- ==============================
         PENGALAMAN
    ============================== -->

    <section class="section">

        <div class="section-title">

            <span>PENGALAMAN</span>

            <h2>Pengalaman Kerja</h2>

        </div>

        <div class="table-card">

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>
                            <th>Posisi</th>
                            <th>Perusahaan</th>
                            <th>Tahun</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <strong>
                                    Web Developer
                                </strong>

                                <small>
                                    Development
                                </small>
                            </td>

                            <td>
                                PT. Teknologi
                            </td>

                            <td>
                                <span class="year">
                                    2020 - 2023
                                </span>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <strong>
                                    Junior Developer
                                </strong>

                                <small>
                                    Development
                                </small>
                            </td>

                            <td>
                                PT. Inovasi
                            </td>

                            <td>
                                <span class="year">
                                    2018 - 2020
                                </span>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- ==============================
         HOBI
    ============================== -->

    <section class="section">

        <div class="section-title">

            <span>INTEREST</span>

            <h2>Hobi & Kegiatan</h2>

        </div>

        <div class="hobby-grid">

            <div class="hobby-card">

                <div class="hobby-icon">
                    📚
                </div>

                <h3>
                    Membaca
                </h3>

                <p>
                    Membaca buku untuk menambah
                    wawasan dan pengetahuan.
                </p>

            </div>


            <div class="hobby-card">

                <div class="hobby-icon">
                    ⚽
                </div>

                <h3>
                    Olahraga
                </h3>

                <p>
                    Menjaga kesehatan dan kebugaran
                    melalui olahraga.
                </p>

            </div>


            <div class="hobby-card">

                <div class="hobby-icon">
                    📷
                </div>

                <h3>
                    Fotografi
                </h3>

                <p>
                    Mengabadikan momen melalui
                    fotografi kreatif.
                </p>

            </div>


            <div class="hobby-card">

                <div class="hobby-icon">
                    🎨
                </div>

                <h3>
                    Melukis
                </h3>

                <p>
                    Mengekspresikan kreativitas
                    melalui karya seni.
                </p>

            </div>

        </div>

    </section>


    <!-- ==============================
         KEGIATAN FAVORIT
    ============================== -->

    <section class="section">

        <div class="section-title">

            <span>AKTIVITAS</span>

            <h2>Kegiatan Favorit</h2>

        </div>

        <div class="activity-list">

            <div class="activity-item">

                <span>01</span>

                <p>
                    Belajar Bahasa Asing
                </p>

            </div>

            <div class="activity-item">

                <span>02</span>

                <p>
                    Menulis Blog
                </p>

            </div>

            <div class="activity-item">

                <span>03</span>

                <p>
                    Melukis
                </p>

            </div>

        </div>

    </section>


    <!-- ==============================
         AUDIO
    ============================== -->

    <section class="section">

        <div class="section-title">

            <span>MUSIC</span>

            <h2>Lagu Favorit</h2>

        </div>

        <div class="media-card">

            <div class="media-icon">
                🎵
            </div>

            <div class="media-content">

                <h3>
                    Favorite Song
                </h3>

                <p>
                    Dengarkan lagu favorit saya.
                </p>

                <audio controls>

                    <source
                        src="lagu.mp3"
                        type="audio/mpeg">

                    Browser Anda tidak mendukung
                    pemutar audio.

                </audio>

            </div>

        </div>

    </section>


    <!-- ==============================
         VIDEO
    ============================== -->

    <section class="section">

        <div class="section-title">

            <span>PROJECT</span>

            <h2>Video Karya</h2>

        </div>

        <div class="video-card">

            <div class="video-wrapper">

                <iframe
                    src="https://www.youtube.com/embed/VIDEO_ID"
                    title="Video Karya"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

            </div>

        </div>

    </section>


    <!-- ==============================
         SOCIAL MEDIA
    ============================== -->

    <section id="kontak" class="section contact-section">

        <div class="section-title">

            <span>SOCIAL MEDIA</span>

            <h2>Ikuti Saya</h2>

        </div>

        <p class="contact-description">

            Jangan ragu untuk terhubung dengan saya
            melalui media sosial berikut.

        </p>

        <div class="social-links">

            <a
                href="https://www.instagram.com/username"
                target="_blank"
                rel="noopener noreferrer"
                class="social instagram">

                <span>◎</span>

                Instagram

            </a>


            <a
                href="https://www.linkedin.com/in/username"
                target="_blank"
                rel="noopener noreferrer"
                class="social linkedin">

                <span>in</span>

                LinkedIn

            </a>

        </div>

    </section>


    <!-- ==============================
         FOOTER
    ============================== -->

    <footer>

        <div class="footer-line"></div>

        <p>
            &copy; 2024 Portofolio Pribadi
        </p>

        <small>
            Dibuat dengan ❤️ dan kreativitas
        </small>

    </footer>

</div>
```

</body>
</html>
