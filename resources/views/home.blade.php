<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git Learning Hub | Daily Practice Guide</title>
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
                <a href="#roadmap">Roadmap</a>
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

                    <div class="hero-metrics" aria-label="Learning highlights">
                        <div>
                            <strong>12+</strong>
                            <span>Core commands</span>
                        </div>
                        <div>
                            <strong>3</strong>
                            <span>Workflow stages</span>
                        </div>
                        <div>
                            <strong>30 min</strong>
                            <span>Daily routine</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Learning pace overview">
                    <h2>Your Learning Pace</h2>
                    <ul class="hero-list">
                        <li><span>Week 1</span><strong>Git basics and commits</strong></li>
                        <li><span>Week 2</span><strong>Branching and merges</strong></li>
                        <li><span>Week 3</span><strong>Pull requests and reviews</strong></li>
                    </ul>
                    <a class="inline-link" href="https://git-scm.com/book/en/v2" target="_blank"
                        rel="noopener noreferrer">
                        Open free Git book
                    </a>
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

        <section id="roadmap" class="section roadmap">
            <h2>30-Minute Daily Roadmap</h2>
            <div class="roadmap-grid">
                <article class="roadmap-step">
                    <span>05 min</span>
                    <h3>Inspect repository</h3>
                    <p>Start with <code>git status</code> and <code>git log --oneline</code> to get context.</p>
                </article>
                <article class="roadmap-step">
                    <span>15 min</span>
                    <h3>Make one focused change</h3>
                    <p>Edit a small piece, stage only relevant files, and commit clearly.</p>
                </article>
                <article class="roadmap-step">
                    <span>10 min</span>
                    <h3>Push and review</h3>
                    <p>Push branch, open PR, and self-review before requesting feedback.</p>
                </article>
            </div>
        </section>

        <section class="section arena" id="arena">
            <h2>Practice Arena</h2>
            <div class="arena-grid">
                <article class="arena-panel">
                    <h3>Example Session</h3>
                    <pre><code>git checkout -b fix/navbar-spacing
git add resources/views/home.blade.php
git commit -m "fix: improve home page spacing"
git push origin fix/navbar-spacing</code></pre>
                </article>
                <article class="arena-panel">
                    <h3>Before You Push</h3>
                    <ul class="list compact-list">
                        <li>Run a quick <code>git status</code> check.</li>
                        <li>Confirm commit message describes the change.</li>
                        <li>Push only the branch you are working on.</li>
                        <li>Open PR with short and clear summary.</li>
                    </ul>
                </article>
            </div>
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
            <p class="footer-note">Updated {{ date('Y') }} • Version-ready workflow habits for beginner teams.</p>
        </footer>
    </main>
</body>

</html>