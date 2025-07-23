<!DOCTYPE html>
<html lang="en">

<!-- #353543 {primary} -->
<!-- #272833 {secondary} -->
<!-- #F5F6Fb {accent} -->
<!-- #FFD43B {accent} -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Nicholas - Home</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #353543;
        }



        /* Navbar */
        .navbar {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 18px 40px;
            position: sticky;
            top: 20px;
            z-index: 100;
            background: rgba(53, 53, 67, 0.65);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(12px);
            transition: background 0.3s, box-shadow 0.3s;
        }

        .logo {
            margin-right: 60px;
            font-weight: bold;
            color: #FFD43B;
            font-size: 1.2rem;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 60px;
            margin: 0 60px;
        }

        .btn-nav {
            text-decoration: none;
            color: #F5F6Fb;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .btn-nav:hover {
            color: #FFD43B;
            transition: all 0.3s ease-in-out;
        }

        .btn-group {
            display: flex;
            gap: 25px;
            margin-left: 60px;
        }

        .btn-icon {
            text-decoration: none;
            background-color: #272833;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 10px;
            border-radius: 50%;
        }

        .btn-icon:hover {
            background-color: #353543;
            transition: all 0.3s ease-in-out;
        }

        /* Hero Section */
        .hero {
            background-color: #353543;
            color: #F5F6Fb;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Hero Content */
        .hero-content {
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;

            .left {
                width: 40%;
            }

            .left .title {
                font-size: 2.5rem;
                font-weight: bold;
            }

            .left .description {
                width: 50%;
                margin-top: 20px;
                font-size: 1.2rem;
                color: #F5F6Fb;
                font-weight: 550;
            }

            .right {
                width: 25%;
                ;
            }

            .right p {
                font-size: 1.2rem;
                color: #F5F6Fb;
                font-weight: 550;
            }

            .right h2 {
                font-size: 1.5rem;
                color: #F5F6Fb;
                font-weight: 100;
            }

            .right a {
                text-decoration: none;
                color: #FFD43B;
                font-weight: 100;
                transition: color 0.3s ease;
            }

            .right a:hover {
                color: #F5F6Fb;
                transition: all 0.3s ease-in-out;
            }

            .right .btn-group {
                display: flex;
                gap: 20px;
                margin-top: 20px;
            }
        }

        /* Hero Footer */
        .hero-footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #403f4f;
            margin-top: auto;
            margin-bottom: 30px;
            border-radius: 12px;
            padding: 30px;
            gap: 30px;
        }

        .hero-footer-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            background-color: #272833;
            padding: 15px;
            border-radius: 12px;
            transition: transform 0.3s cubic-bezier(.4, 2.3, .3, 1), box-shadow 0.3s;
        }

        .hero-footer-wrapper:hover {
            transform: scale(1.12);
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.18);
        }

        .hero-footer-img {
            width: 80px;
            object-fit: cover;
        }

        /* About Section */
        .about {
            height: 100vh;
            width: 100%;
            background-color: #272833;
        }

        .about-content {
            width: 90%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: auto;

            .left {
                width: 45%;
                display: flex;
                justify-content: left;
                flex-direction: column;

                h1 {
                    font-size: 2.5rem;
                    color: #F5F6Fb;
                    font-weight: bold;
                }

                p {
                    font-size: 1rem;
                    color: #F5F6Fb;
                    font-weight: 400;
                    margin-top: 20px;
                }

                .info {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 30px;

                    .info-wrapper {
                        display: flex;
                        flex-direction: column;
                        gap: 20px;

                        .info-item {
                            color: #FFD43B;

                            h2 {
                                font-size: 1.5rem;
                                font-weight: bold;
                            }

                            p {
                                font-size: 1rem;
                                font-weight: 400;
                            }
                        }
                    }
                }


            }

            .right {
                width: 45%;

                .list-job {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;

                    .job {
                        background-color: #353543;
                        padding: 20px;
                        border-radius: 12px;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;

                        h1 {
                            color: #F5F6Fb;
                            font-size: 1.5rem;
                            margin-bottom: 10px;
                            padding-left: 40px;
                        }

                        img {
                            width: 150px;
                            height: auto;
                            border-radius: 8px;
                        }
                    }
                }
            }
        }

        /* Skill Section */
        .skill {
            height: auto;
            width: 100%;
            background-color: #353543;
            padding: 50px 0;
        }

        .skill-content {
            width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #F5F6Fb;

            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 30px;
            }
        }

        .skills-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #272833;
            padding: 15px;
            border-radius: 8px;

            span {
                font-size: 1.2rem;
                font-weight: 500;
            }

            .progress-bar {
                width: 70%;
                height: 10px;
                background-color: #403f4f;
                border-radius: 5px;
                overflow: hidden;
                position: relative;

                .progress {
                    height: 100%;
                    background-color: #FFD43B;
                    border-radius: 5px;
                    transition: width 1.2s cubic-bezier(.4, 2.3, .3, 1);
                }
            }
        }

        /* Project Section */
        .project {
            min-height: 100vh;
            width: 100%;
            background-color: #272833;
            padding: 50px 0;
        }

        .project-content {
            width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #F5F6Fb;

            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 30px;
            }

            .project-list {
                width: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
            }

            .project-item {
                background-color: #353543;
                padding: 20px;
                border-radius: 12px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;

                h2 {
                    font-size: 1.5rem;
                    font-weight: bold;
                    margin-bottom: 10px;
                }

                p {
                    font-size: 1rem;
                    font-weight: 400;
                    margin-bottom: 15px;
                }

                a {
                    text-decoration: none;
                    color: #FFD43B;
                    font-weight: 500;
                    transition: color 0.3s ease;

                    &:hover {
                        color: #F5F6Fb;
                        transition: all 0.3s ease-in-out;
                    }
                }
            }
        }

        /* Footer */
        .footer {
            height: auto;
            width: 100%;
            background-color: #101010;
            padding: 50px 0;
            color: #F5F6Fb;
        }

        .footer-content {
            width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-nav {
            display: flex;
            gap: 30px;
            margin-bottom: 10px;
        }

        .footer-nav .btn-nav {
            color: #FFD43B;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .footer-nav .btn-nav:hover {
            color: #F5F6Fb;
        }

        /* Contact Section */
        .contact {
            min-height: 100vh;
            width: 100%;
            background-color: #353543;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-content {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            color: #F5F6Fb;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 60px 40px;
            background: rgba(39, 40, 51, 0.95);
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.25);
        }

        .contact-info {
            width: 100%;
            display: flex;
            gap: 60px;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .contact-info>div,
        .contact-info>form {
            flex: 1;
            min-width: 320px;
            max-width: 400px;
        }

        .contact-info>div>h1 {
            font-size: 2.5rem;
        }

        .contact-info p {
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: #272833;
            border-radius: 50%;
            margin-right: 12px;
            font-size: 1.2rem;
            color: #FFD43B;
            transition: background 0.3s, color 0.3s;
        }

        .contact-icon:hover {
            background-color: #353543;
            color: #F5F6Fb;
        }

        .contact-form {
            flex: 1;
            min-width: 250px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border-radius: 6px;
            border: none;
            background: #272833;
            color: #F5F6Fb;
            font-size: 1rem;
            resize: none;
        }

        .contact-form button {
            padding: 10px 0;
            border: none;
            border-radius: 6px;
            background: #FFD43B;
            color: #272833;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: #F5F6Fb;
            color: #353543;
        }

        .success-msg {
            color: #FFD43B;
            margin-top: 20px;
        }

        .error-msg {
            color: #ff4d4f;
            margin-top: 20px;
        }

        /* Set all border-radius to 8px except for .btn-group */
        .navbar,
        .hero-footer,
        .hero-footer-wrapper,
        .project-item,
        .contact-content,
        .contact-form input,
        .contact-form textarea,
        .contact-form button,
        .contact-icon,
        .skill-item,
        .progress-bar,
        .progress,
        .about-content .right .list-job .job,
        .footer,
        .footer-content {
            border-radius: 8px !important;
        }

        /* Keep .btn-icon (inside .btn-group) circular */
        .btn-icon {
            border-radius: 50% !important;
        }

        .job,
        .project-item {
            transition: transform 0.3s cubic-bezier(.4, 2.3, .3, 1), box-shadow 0.3s;
        }

        .job:hover,
        .project-item:hover {
            transform: scale(1.06);
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.18);
        }

        @media (max-width: 900px) {
            .navbar {
                flex-direction: column;
                padding: 12px 10px;
                gap: 16px;
            }

            .nav-links {
                gap: 24px;
                margin: 0;
            }

            .btn-group {
                margin-left: 0;
                gap: 16px;
            }

            .hero-content {
                flex-direction: column;
                align-items: flex-start;
                margin-top: 30px;
            }

            .hero-content .left,
            .hero-content .right {
                width: 100% !important;
            }

            .hero-content .left .description {
                width: 100% !important;
            }

            .hero-footer {
                flex-wrap: wrap;
                gap: 16px;
                padding: 16px;
            }

            .about-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 32px;
            }

            .about-content .left,
            .about-content .right {
                width: 100% !important;
            }

            .about-content .right .list-job {
                flex-direction: column;
                gap: 16px;
            }

            .project-content {
                width: 98%;
            }

            .project-list {
                grid-template-columns: 1fr !important;
                gap: 16px !important;
            }

            .contact-content {
                max-width: 100%;
                padding: 24px 8px;
            }

            .contact-info {
                flex-direction: column;
                gap: 24px;
                align-items: stretch;
            }

            .contact-info>div,
            .contact-info>form {
                min-width: 0;
                max-width: 100%;
            }

            .footer-content {
                width: 98%;
                padding: 0 4px;
            }

            .footer-nav {
                gap: 16px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-footer-wrapper {
                width: 60px;
                height: 60px;
                padding: 8px;
            }

            .hero-footer-img {
                width: 44px;
            }

            .job img {
                width: 90px !important;
            }

            .about-content .right .list-job .job h1 {
                font-size: 1.1rem !important;
                padding-left: 10px !important;
            }

            .skill-content h1,
            .about-content .left h1,
            .project-content h1,
            .contact-info>div>h1 {
                font-size: 1.5rem !important;
            }
        }

        @media (max-width: 600px) {
            .navbar {
                max-width: 100%;
                border-radius: 0 0 8px 8px !important;
            }

            .hero-content {
                margin-top: 16px;
            }

            .hero-footer {
                padding: 8px;
                gap: 8px;
            }

            .footer-content {
                padding: 0 2px;
            }

            .footer-nav {
                gap: 8px;
            }

            .project-item img {
                margin-bottom: 8px !important;
            }

            .contact-content {
                padding: 12px 2px;
                border-radius: 8px !important;
            }

            .contact-info p {
                font-size: 1rem;
            }

            .contact-icon {
                width: 28px;
                height: 28px;
                font-size: 1rem;
                margin-right: 6px;
            }

            .btn-icon {
                padding: 6px 7px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Nicholas</div>
        <ul class="nav-links">
            <li><a href="#about" class="btn-nav">About</a></li>
            <li><a href="#skill" class="btn-nav">Skills</a></li>
            <li><a href="#project" class="btn-nav">Projects</a></li>
            <li><a href="#contact" class="btn-nav">Contact</a></li>
        </ul>
        <div class="btn-group">
            <a href="https://maps.app.goo.gl/Kn42ivcTHirwBKY87" target="_blank" class="btn-icon"><i class="fa-solid fa-location-dot"
                    style="color: #f5f6fb;"></i></a>
            <a href="https://www.linkedin.com/in/nicholaz-alvianoz-34a042362/" target="_blank" class="btn-icon"><i
                    class="fa-brands fa-linkedin-in" style="color: #f5f6fb;"></i></a>
            <a href="" class="btn-icon"><i class="fa-solid fa-bars" style="color: #f5f6fb;"></i></a>
        </div>
    </nav>
    <section class="hero" id="hero">
        <div class="hero-content">
            <div class="left">
                <div class="title">
                    <h1>Hi I'm</h1>
                    <h1>Nicholas Farel Alfiano</h1>
                </div>
                <div class="description">
                    <p>I'm a web developer with a passion for creating beautiful and functional websites. I specialize in
                    front-end development and have experience with various technologies.</p>
                </div>
            </div>
            <div class="right">
                <h2>Services</h2>
                <p>Let's build quality products programming and design with my services</p>
                <a href="">show more ></a>
                <div class="btn-group">
                    <a href="https://github.com/Alvianoz" target="_blank" class="btn-icon"><i class="fa-brands fa-github"
                            style="color: #FFD43B;"></i></a>
                    <a href="https://www.instagram.com/alvianoz_/" target="_blank" class="btn-icon"><i
                            class="fa-brands fa-instagram" style="color: #FFD43B;"></i></a>
                    <a href="https://www.facebook.com/farel.alviano.752/" target="_blank" class="btn-icon"><i
                            class="fa-brands fa-facebook" style="color: #FFD43B;"></i></a>
                </div>
            </div>
        </div>
        <div class="hero-footer">
            <div class="hero-footer-wrapper">
                <img src="assets/Javascript.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/Typescript.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/PHP.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/React.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/Laravel.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/Bootstrap.png" class="hero-footer-img">
            </div>
            <div class="hero-footer-wrapper">
                <img src="assets/Tailwind.png" class="hero-footer-img">
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-content">
            <div class="left">
                <h1>What Can I Do For Your Needs</h1>
                <p>It is easier to entrust the work to the experts because they are able to provide the best results with
                    reliable quality</p>
                <div class="info">
                    <div class="info-wrapper">
                        <div class="info-item">
                            <h2>12+</h2>
                            <p>Education and experience</p>
                        </div>
                        <div class="info-item">
                            <h2>45+</h2>
                            <p>Project Completed</p>
                        </div>
                    </div>
                    <div class="info-wrapper">
                        <div class="info-item">
                            <h2>250+</h2>
                            <p>Community network</p>
                        </div>
                        <div class="info-item">
                            <h2>30+</h2>
                            <p>Client satisfied</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="list-job">
                    <div class="job">
                        <h1>UI & UX Designer</h1>
                        <img src="assets/uiux.jpeg">
                    </div>
                    <div class="job">
                        <h1>Frontend Developer</h1>
                        <img src="assets/Frontend.jpg">
                    </div>
                    <div class="job">
                        <h1>Backend Developer</h1>
                        <img src="assets/Backend.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skill" id="skill">
        <div class="skill-content">
            <h1>My Skills</h1>
            <div class="skills-list">
                <div class="skill-item">
                    <span>JavaScript</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="75" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>TypeScript</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="70" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>PHP</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="85" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>React</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="80" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>Laravel</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="70" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>Bootstrap</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="65" style="width: 0"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span>Tailwind CSS</span>
                    <div class="progress-bar">
                        <div class="progress" data-progress="75" style="width: 0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project" id="project">
        <div class="project-content">
            <h1>My Projects</h1>
            <div class="project-list">
                <div class="project-item">
                    <img src="assets/cafe.png" alt="Project 1"
                        style="width:100%; border-radius:8px; margin-bottom:15px;">
                    <h2>Cafe Website</h2>
                    <p>A modern responsive cafe website using HTML, CSS, and JavaScript.</p>
                    <a href="https://alvianoz.github.io/cafe-alvianozcoffee/" target="_blank">View Project</a>
                </div>
                <div class="project-item">
                    <img src="assets/iphone.png" alt="Project 2"
                        style="width:100%; border-radius:8px; margin-bottom:15px;">
                    <h2>IPhone Website</h2>
                    <p>Advertisement IPhone website using React js and Tailwind css.</p>
                    <a href="https://github.com/Alvianoz/iphone-website" target="_blank">View Project</a>
                </div>
                <div class="project-item">
                    <img src="assets/travel.png" alt="Project 3"
                        style="width:100%; border-radius:8px; margin-bottom:15px;">
                    <h2>Travel Agency Website</h2>
                    <p>Fullstack travel agency management website using Next js, Tailwind css, and Appwrite for database.
                    </p>
                    <a href="https://github.com/Alvianoz/travel-agency-dashboard" target="_blank">View Project</a>
                </div>
                <div class="project-item">
                    <img src="assets/banking.png" alt="Project 3"
                        style="width:100%; border-radius:8px; margin-bottom:15px;">
                    <h2>Banking Website</h2>
                    <p>Fullstack banking website using Next js, Tailwind css, Appwrite, and Plaid API for payment gateway.
                    </p>
                    <a href="https://github.com/Alvianoz/BankWaltz" target="_blank">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-content">
            <div class="contact-info">
                <div>
                    <h1>Contact Me</h1>

                    <p>
                        <span class="contact-icon"><i class="fa-solid fa-envelope"></i></span>
                        farelalviano2007@gmail.com
                    </p>
                    <p>
                        <span class="contact-icon"><i class="fa-solid fa-phone"></i></span>
                        +62 897-449-5522
                    </p>
                    <p>
                        <span class="contact-icon"><i class="fa-brands fa-linkedin"></i></span>
                        linkedin.com/in/nicholaz-alvianoz
                    </p>
                </div>
                <form class="contact-form" method="POST" action="#contact">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="chat" placeholder="Your Message" required></textarea>
                    <button type="submit" name="send">Send Message</button>
                </form>
            </div>
            <?php if (isset($success)) {
                echo "<p class='success-msg'>$success</p>";
                echo "<script>alert('Your message has been sent!');</script>";
            } ?>
            <?php if (isset($error)) echo "<p class='error-msg'>$error</p>"; ?>
        </div>
    </section>

    <footer class="footer" id="footer">
        <div class="footer-content">
            <div class="footer-nav">
                <a href="#about" class="btn-nav">About</a>
                <a href="#skill" class="btn-nav">Skills</a>
                <a href="#project" class="btn-nav">Projects</a>
                <a href="#contact" class="btn-nav">Contact</a>
            </div>
            <p style="margin-top:20px;">&copy; 2025 Nicholas Alfiano. All rights reserved.</p>
        </div>
    </footer>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const skillSection = document.querySelector('.skill');
    const progressBars = document.querySelectorAll('.progress-bar .progress');
    let animated = false;

    function animateProgressBars() {
        if (!animated && skillSection.getBoundingClientRect().top < window.innerHeight - 100) {
            progressBars.forEach(bar => {
                const value = bar.getAttribute('data-progress');
                bar.style.width = value + '%';
            });
            animated = true;
        }
    }

    window.addEventListener('scroll', animateProgressBars);
    animateProgressBars(); // in case already in view
});
</script>
</body>

</html>
<?php
include 'connection.php';

if (isset($_POST['send'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $chat = $conn->real_escape_string($_POST['chat']);
    $datetime = date('Y-m-d H:i:s');

    if ($name && $email && $chat) {
        $sql = "INSERT INTO message (name, email, chat, datetime) VALUES ('$name', '$email', '$chat', '$datetime')";
        if ($conn->query($sql) === TRUE) {
            $success = "Thank you! Your message has been sent.";
        } else {
            $error = "Failed to send message. Please try again.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>