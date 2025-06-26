<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Desain Grafis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f8fa;
            color: #222;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 32px 16px;
        }
        /* Hero Section */
        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            padding: 48px 32px;
            margin-bottom: 48px;
        }
        .hero-img {
            flex: 1 1 220px;
            max-width: 260px;
            text-align: center;
        }
        .hero-img img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #e0e0e0;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        .hero-desc {
            flex: 2 1 320px;
        }
        .hero-desc h1 {
            font-size: 2.2rem;
            margin: 0 0 12px 0;
            font-weight: 700;
        }
        .hero-desc p {
            font-size: 1.1rem;
            margin-bottom: 18px;
        }
        .social-icons {
            display: flex;
            gap: 18px;
        }
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f0f0f0;
            transition: background 0.2s, transform 0.2s;
            font-size: 1.3rem;
        }
        .social-icons a:hover {
            background: #222;
            color: #fff;
            transform: translateY(-4px) scale(1.08);
        }
        /* Skills Section */
        .skills-section {
            margin-bottom: 48px;
        }
        .skills-section h2 {
            font-size: 1.7rem;
            margin-bottom: 24px;
            font-weight: 700;
            text-align: center;
        }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
        }
        .skill-box {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 28px 22px;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .skill-box:hover {
            box-shadow: 0 6px 24px rgba(0,0,0,0.13);
            transform: translateY(-6px) scale(1.03);
        }
        .skill-box h3 {
            margin-top: 0;
            font-size: 1.2rem;
            margin-bottom: 14px;
            font-weight: 600;
        }
        .skill-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .skill-list li {
            margin-bottom: 8px;
            font-size: 1rem;
        }
        /* Tools Section */
        .tools-section h2 {
            font-size: 1.7rem;
            margin-bottom: 24px;
            font-weight: 700;
            text-align: center;
        }
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 28px;
            justify-items: center;
        }
        .tool-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 24px 10px 14px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.2s, transform 0.2s;
            width: 150px;
            min-height: 170px;
        }
        .tool-card:hover {
            box-shadow: 0 6px 24px rgba(0,0,0,0.13);
            transform: translateY(-6px) scale(1.05);
        }
        .tool-card img {
            width: 48px;
            height: 48px;
            object-fit: contain;
            margin-bottom: 10px;
        }
        .tool-card span {
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
        }
        @media (max-width: 700px) {
            .hero {
                flex-direction: column;
                padding: 32px 12px;
            }
            .skills-section, .tools-section {
                padding: 0 2px;
            }
        }
        .navbar {
            width: 100%;
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
        }
        .navbar-logo {
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: 1px;
            color: #222;
        }
        .navbar-menu {
            list-style: none;
            display: flex;
            gap: 28px;
            margin: 0;
            padding: 0;
        }
        .navbar-menu li {
            display: inline;
        }
        .navbar-menu a {
            text-decoration: none;
            color: #222;
            font-weight: 500;
            font-size: 1rem;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        .navbar-menu a:hover, .navbar-menu a:focus {
            background: #222;
            color: #fff;
        }
        @media (max-width: 700px) {
            .navbar-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            .navbar-menu {
                gap: 14px;
            }
        }
        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e0e0e0;
            border-radius: 6px;
            margin: 8px 0 2px 0;
            overflow: hidden;
        }
        .progress {
            height: 100%;
            background: linear-gradient(90deg, #4f8cff, #1ec8e7);
            border-radius: 6px 0 0 6px;
            transition: width 0.7s cubic-bezier(.4,2,.3,1);
        }
        .progress-label {
            font-size: 0.95rem;
            color: #222;
            font-weight: 500;
            text-align: center;
            margin-bottom: 2px;
        }
    </style>
    <!-- Ikon FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">Firmansyah</div>
            <ul class="navbar-menu">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-img">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto Profil">
            </div>
            <div class="hero-desc">
                <h1>Halo! Saya Firmansyah Pratama Fauzi</h1>
                <p>Seorang mahasiswa aktif dan kreatif dengan pengalaman solid di bidang desain grafis sejak masa SMA. Memiliki ketertarikan mendalam pada dunia visual, yang juga disalurkan melalui pengembangan User Interface (UI) website dan penggunaan OBS (Open Broadcaster Software) untuk kebutuhan streaming. Mengikuti berbagai proyek, baik secara individu maupun tim. Pengalaman dalam organisasi telah melatih kemampuan kolaborasi dan kebiasaan mengambil peran aktif dalam perencanaan serta pelaksanaan kegiatan, yang semuanya berkontribusi pada kemampuan bekerja dalam lingkungan yang menuntut kreativitas, komunikasi efektif, dan manajemen waktu yang baik. Berkomitmen penuh untuk terus belajar dan mengembangkan potensi di bidang desain, teknologi, dan kepemimpinan.</p>
                <div class="social-icons">
                    <a href="https://instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="mailto:emailanda@email.com" target="_blank" title="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills-section">
            <h2>My Skills</h2>
            <div class="skills-grid">
                <div class="skill-box">
                    <h3>Soft Skills</h3>
                    <ul class="skill-list">
                        <li>Leadership skills</li>
                        <li>Communication skills</li>
                        <li>Creative</li>
                        <li>Ability to work in a team</li>
                    </ul>
                </div>
                <div class="skill-box">
                    <h3>Hard Skills</h3>
                    <ul class="skill-list">
                        <li>Videography</li>
                        <li>Graphic Design</li>
                        <li>Video Editing</li>
                        <li>Social Media Specialist</li>
                        <li>UI Website Development</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Tools Section -->
        <section class="tools-section">
            <h2>Tools I Use</h2>
            <div class="tools-grid">
                <div class="tool-card">
                    <img src="images/photoshp.png" alt="Adobe Photoshop">
                    <span>Adobe Photoshop</span>
                    <div class="progress-bar"><div class="progress" style="width:40%"></div></div>
                    <div class="progress-label">40%</div>
                </div>
                <div class="tool-card">
                    <img src="images/canva.png" alt="Canva">
                    <span>Canva</span>
                    <div class="progress-bar"><div class="progress" style="width:80%"></div></div>
                    <div class="progress-label">80%</div>
                </div>
                <div class="tool-card">
                    <img src="images/capcut.png" alt="CapCut">
                    <span>CapCut</span>
                    <div class="progress-bar"><div class="progress" style="width:70%"></div></div>
                    <div class="progress-label">70%</div>
                </div>
                <div class="tool-card">
                    <img src="images/wordpres.png" alt="WordPress">
                    <span>WordPress</span>
                    <div class="progress-bar"><div class="progress" style="width:50%"></div></div>
                    <div class="progress-label">50%</div>
                </div>
                <div class="tool-card">
                    <img src="images/obs.png" alt="OBS Studio">
                    <span>OBS Studio</span>
                    <div class="progress-bar"><div class="progress" style="width:70%"></div></div>
                    <div class="progress-label">70%</div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
