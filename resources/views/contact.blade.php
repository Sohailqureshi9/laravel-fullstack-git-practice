<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Git Commands Learning Hub</title>
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
            <p class="hero-tag">Contact</p>
            <h1>Let's connect</h1>
            <p class="hero-copy">
                Questions, suggestions, or collaboration ideas? Reach out using the details below.
            </p>

            <div class="cards-grid single-column">
                <article class="card">
                    <h3>Email</h3>
                    <p><a class="inline-link" href="mailto:hello@example.com">hello@example.com</a></p>
                </article>

                <article class="card">
                    <h3>GitHub</h3>
                    <p><a class="inline-link" href="https://github.com" target="_blank"
                            rel="noopener noreferrer">github.com</a></p>
                </article>

                <article class="card">
                    <h3>Availability</h3>
                    <p>Typically available Monday to Friday for project discussions and feedback.</p>
                </article>
            </div>

            <div class="buttons section-actions">
                <a class="btn btn-primary" href="{{ route('home') }}">Back to Home</a>
                <a class="btn btn-secondary" href="{{ route('about') }}">Read About</a>
            </div>
        </section>

        <footer class="footer">
            <p>Thanks for visiting • Keep learning and keep building.</p>
        </footer>
    </main>
</body>

</html>