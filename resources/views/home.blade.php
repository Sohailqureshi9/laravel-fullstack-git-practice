<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git Commands Learning Hub</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="page-bg"></div>

    <main class="container">
        <header class="topbar">
            <a class="brand" href="{{ route('home') }}">Git Learning Hub</a>
            <nav class="nav-links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#commands">Commands</a>
                <a href="#workflow">Workflow</a>
                <a href="https://git-scm.com/doc" target="_blank" rel="noopener noreferrer">Docs</a>
            </nav>
        </header>

        <section id="home" class="hero">
            <div class="hero-layout">
                <div>
                    <p class="hero-tag">Hands-on Git practice for beginners</p>
                    <h1>Build confidence with Git, one command at a time</h1>
                    <p class="hero-copy">
                        Learn practical Git workflows through clear examples and copy-ready commands.
                        Start with the fundamentals, then level up with branching, pull requests, and team habits.
                    </p>

                    <div class="buttons">
                        <a class="btn btn-primary" href="#commands">Start Learning</a>
                        <a class="btn btn-secondary" href="{{ route('about') }}">About Project</a>
                        <a class="btn btn-secondary" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Learning pace overview">
                    <h2>Your Learning Pace</h2>
                    <ul class="hero-list">
                        <li><span>Week 1</span><strong>Git basics and commits</strong></li>
                        <li><span>Week 2</span><strong>Branching and merges</strong></li>
                        <li><span>Week 3</span><strong>Pull requests and reviews</strong></li>
                    </ul>
                </aside>
            </div>
        </section>

        <section id="commands" class="section">
            <h2>Essential Commands</h2>
            <div class="cards-grid">
                <article class="card">
                    <h3>Initialize Repo</h3>
                    <code>git init</code>
                    <p>Creates a new local repository in your project folder.</p>
                </article>
                <article class="card">
                    <h3>Track Changes</h3>
                    <code>git add .</code>
                    <p>Adds all modified files to the staging area.</p>
                </article>
                <article class="card">
                    <h3>Save Snapshot</h3>
                    <code>git commit -m "message"</code>
                    <p>Records staged changes with a meaningful commit message.</p>
                </article>
                <article class="card">
                    <h3>Sync Remote</h3>
                    <code>git push origin main</code>
                    <p>Uploads local commits to your remote branch.</p>
                </article>
                <article class="card">
                    <h3>Check State</h3>
                    <code>git status</code>
                    <p>Shows changed, staged, and untracked files before you commit.</p>
                </article>
                <article class="card">
                    <h3>Review History</h3>
                    <code>git log --oneline --graph --decorate</code>
                    <p>Visualizes commit history to help you understand branch progress.</p>
                </article>
            </div>
        </section>

        <section id="workflow" class="section workflow">
            <h2>Simple Daily Workflow</h2>
            <ol>
                <li>Pull latest updates: <code>git pull origin main</code></li>
                <li>Create branch: <code>git checkout -b feature/my-change</code></li>
                <li>Make changes and commit: <code>git add . && git commit -m "feat: update"</code></li>
                <li>Push branch: <code>git push origin feature/my-change</code></li>
            </ol>
        </section>

        <section class="section team-practice">
            <h2>Team Practice Checklist</h2>
            <p>
                Build healthy collaboration habits with small, frequent commits and thoughtful pull requests.
                This creates cleaner history and smoother reviews.
            </p>
            <ul class="list">
                <li>Write concise commit messages with purpose and scope.</li>
                <li>Open pull requests early to gather feedback sooner.</li>
                <li>Review code with context, tests, and clear suggestions.</li>
                <li>Merge only after approvals and successful checks.</li>
            </ul>
        </section>

        <footer class="footer">
            <p>Built with Laravel • Keep practicing, keep shipping.</p>
        </footer>
    </main>
</body>

</html>