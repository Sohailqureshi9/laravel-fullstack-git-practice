<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Git Commands Learning Hub</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="page-bg"></div>

    <main class="container">
        <header class="topbar">
            <a class="brand" href="{{ route('home') }}">Git Learning Hub</a>
            <nav class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="section page-section">
            <p class="hero-tag">About This Project</p>
            <h1>Laravel + Git Practice Playground</h1>
            <p class="hero-copy">
                This project is a beginner-friendly learning space to understand practical Git workflows
                with a clean Laravel structure. The goal is to make common commands easy to read,
                practice, and remember.
            </p>

            <div class="cards-grid single-column">
                <article class="card">
                    <h3>What you can learn here</h3>
                    <ul class="list">
                        <li>How to initialize and manage repositories</li>
                        <li>How to stage, commit, and push changes</li>
                        <li>How to use branches in daily development</li>
                        <li>How to build confidence with repeatable workflow steps</li>
                    </ul>
                </article>

                <article class="card">
                    <h3>Tech Stack</h3>
                    <ul class="list">
                        <li>Laravel 13 for routing and Blade templating</li>
                        <li>Plain CSS for custom styling and responsive layout</li>
                        <li>Git-focused educational content</li>
                    </ul>
                </article>
            </div>

            <div class="buttons section-actions">
                <a class="btn btn-primary" href="{{ route('home') }}#commands">View Commands</a>
                <a class="btn btn-secondary" href="{{ route('contact') }}">Contact</a>
            </div>
        </section>

        <footer class="footer">
            <p>Built with Laravel • Designed for practical learning.</p>
        </footer>
    </main>
</body>

</html>