<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <img src="assets/carepy_logo-1.svg" alt="">
            <ul>
                <li><a href="#" class="active">About</a></li>
                <li><a href="#portfolio-loc">Portfolio</a></li>
                <li><a href="#experience-loc">Experience</a></li>
                <li><a href="#contact-loc">Contact</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="search">
                <i class="ri-search-line"></i>
            </div>
        </nav>
        <div class="landing">
            <!-- <div class="profile-image">
                <img src="assets/images/me.png" alt="Ahmad Yazid Isnandar"
                    style="max-height: 400px; height: auto; object-fit: cover;">
            </div> -->
            <div class="intro">
                <h3>I'M <Span>Ahmad Yazid Isnandar, S.Kom.</Span><br>System Administrator <br> & Full Stack Developer
                </h3>
                <button id="contactButton">Contact Me</button>
            </div>
            <div class="socials">
                <div class="line"></div>
                <a href="https://github.com/shuyshuys">
                    <i class="ri-github-line"></i>
                </a>
                <a href="https://linkedin.com/in/ahmyaz-id/">
                    <i class="ri-linkedin-fill"></i>
                </a>
                <a href="https://instagram.com/shuyshuys">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=6289510171698">
                    <i class="ri-whatsapp-line"></i>
                </a>
            </div>
        </div>
    </header>
    <section class="about">
        <h1>About</h1>
        <div class="description">
            <div class="line"></div>
            <p>As an <span>Information Systems</span> major, I possess a keen interest in staying abreast of the latest
                technological
                advancements by actively exploring the internet for up-to-date information. I get an overwhelming
                satisfaction from <span>hands-on
                    experimentation</span> with servers and networks using tools like Proxmox and Cloudflared. To
                further enhance my
                skills, I undertake mini projects and host them on various free platforms. Continuously developing
                myself in the
                ever-evolving world of technology is my driving passion, and I enthusiastically embrace new challenges
                as
                opportunities for growth
            </p>
        </div>
    </section>
    <section class="skills">
        <h1>My Skills</h1>
        <div class="cards">
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/linux-96.png" alt="">
                <h2>Linux</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/images/proxmox.png" alt="">
                <h2>Proxmox<h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/docker.svg" alt="">
                <h2>Docker</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/git.svg" alt="">
                <h2>GIT</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/images/php.png" alt="">
                <h2>PHP</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/mysql.svg" alt="">
                <h2>MySQL</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/html.svg" alt="">
                <h2>HTML</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/css.svg" alt="">
                <h2>CSS</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/js.svg" alt="">
                <h2>JavaScript</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/nodejs.svg" alt="">
                <h2>NodeJS</h2>
            </div>
            <div class="skill-card">
                <img src="https://yazid.consulting/assets/python.svg" alt="">
                <h2>Python</h2>
            </div>
        </div>
    </section>
    <section class="portfolio" id="portfolio-loc">
        <h1>Portfolio</h1>
        <div class="portfolio-cards">
            <div class="portfolio-card">
                <img src="assets/images/app-zaki-blue.png" alt="">
                <div class="overlay">
                    <h3>Dashboard</h3>
                    <p>Application deployed on VPS</p>
                    <button onclick="window.location.href='https://app.zaki.blue'">See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/rb-gudang.png" alt="">
                <div class="overlay">
                    <h3>Simple Inventory Management</h3>
                    <p>A simple application for managing inventory efficiently, build with filament v3</p>
                    <button onclick="window.location.href='https://rb-gudang.yazid.consulting'">See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/monitoring.png" alt="">
                <div class="overlay">
                    <h3>Dashboard Monitoring</h3>
                    <p>Application for monitoring system performance and metrics from ZABBIX 7.0 API, build with
                        filament v3</p>
                    <button onclick="window.location.href='https://monitor.yazid.consulting'">See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/verseifylance.png" alt="">
                <div class="overlay">
                    <h3>Verseifylance</h3>
                    <p>My end of semester exam Web Programming in 4th semester to create website for freelancer in my
                        campus to expanding their service</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/sneat-aw.png" alt="">
                <div class="overlay">
                    <h3>Data Warehouse and OLAP</h3>
                    <p>Used for showcase my assignment of Data Warehouse and OLAP class using database Adventure Works
                    </p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/pw-smt4.png" alt="">
                <div class="overlay">
                    <h3>Pemrograman Web</h3>
                    <p>All of my projects from the web programming class in semester 4</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="assets/images/inball.png" alt="">
                <div class="overlay">
                    <h3>InBall</h3>
                    <p>Used for UTS lesson Web Programming on 4th semester</p>
                    <button>See More -></button>
                </div>
            </div>
        </div>
        <Button>View More</Button>
    </section>
    <section class="experience" id="experience-loc">
        <div class="darker-div"></div>
        <h1>Experience</h1>
        <div class="lighter-div">
            <div class="line"></div>
            <div class="exp">
                <h2>Bangkit, Cloud Computing (2023)</h2>
                <div class="exp-desc">
                    <h3>MBKM Studi Independent</h3>
                    <p>

                    </p>
                </div>
            </div>
            <div class="exp">
                <h2>Network and Repair Laptop (2023)</h2>
                <div class="exp-desc">
                    <h3>YesTech, Surabaya</h3>
                    <p>100 of day hybrid training learning IT by YesTech. Dedicated and highly motivated individual with
                        comprehensive training in Network Administration and
                        Laptop Repair. Seeking opportunities to apply and expand my knowledge in a dynamic technical
                        environment. <br>
                        <strong>Key Courses:</strong> Network Configuration, Hardware Troubleshooting, Data Recovery, OS
                        Installation. <br>
                        <strong>Practical Experience:</strong> Successfully repaired and upgraded laptops, recovering
                        lost data from storage devices, diagnosed network issues, and configured network settings.<br>
                </div>
            </div>
            <div class="exp">
                <h2>IT Support (2022)</h2>
                <div class="exp-desc">
                    <h3>Aguna Course, Online</h3>
                    <p>Completed IT Support Google Certification program on <a
                            href="https://coursera.org/verify/professional-cert/JDCAL9BGJJMY">Coursera</a>,
                        equipping me with essential skills and effective problem-solving. With a strong foundation in IT
                        support,
                        i am well-prepared in roles requiring technical proficiency and customer-focused service.</a>
                        <br>
                        <strong>Modules Completed:</strong> Dasar-Dasar Dukungan Teknis, Seluk Beluk Jaringan Komputer,
                        Sistem Operasi, Administrasi Sistem dan Layanan Infrastruktur, Keamanan IT.<br>
                        <strong>Key Topics Covered:</strong> Hardware, Software, Networking, OS, IT Security,
                        Troubleshooting. <br>
                        <strong>Practical Experience:</strong> Hands-on labs and real-world case studies completed. <br>

                    </p>
                </div>
            </div>
            <div class="exp">
                <h2>IT Support (2018)</h2>
                <div class="exp-desc">
                    <h3>University of Surabaya, Surabaya</h3>
                    <p>Have hands-on experience installing and configuring Windows and Linux OS, improving
                        functionality.
                        Additionally, I implemented efficient printer sharing, reducing costs by 30-40%.
                        I optimized Wi-Fi settings with proxy for 200+ users and achieved a 90% resolution rate for OS
                        troubleshooting, minimizing downtime</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-me" id="contact-loc">
        <h1>Contact Me</h1>
        <div class="contact">
            <div class="contact-card">
                <i class="ri-message-3-line"></i>
                <p>admin@yazid.consulting</p>
            </div>
            <div class="contact-card">
                <i class="ri-map-pin-3-line"></i>
                <p>Surabaya, Indonesia</p>
            </div>
        </div>
    </section>
    <script src="assets/styles/script.js"></script>
    <script>
        document.getElementById('contactButton').addEventListener('click', function() {
            window.location.href = 'https://api.whatsapp.com/send?phone=6289510171698';
        });
    </script>
</body>

</html>