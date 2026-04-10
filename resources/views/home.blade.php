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
                <a href="#path">Path</a>
                <a href="#commands">Commands</a>
                <a href="#workflow">Workflow</a>
                <a href="#projects">Projects</a>
                <a href="#troubleshooting">Troubleshooting</a>
                <a href="https://git-scm.com/doc" target="_blank" rel="noopener noreferrer">Docs</a>
            </nav>
        </header>

        <section id="home" class="hero">
            <div class="hero-layout">
                <div>
                    <p class="hero-tag">Hands-on Git practice for beginners and junior developers</p>
                    <h1>Your Complete Git Guide: Beginner to Pro</h1>
                    <p class="hero-copy">
                        Follow a clear roadmap from first commit to advanced team workflows.
                        Each section gives you what to learn, what to practice, and how to level up faster.
                    </p>

                    <div class="buttons">
                        <a class="btn btn-primary" href="#path">Start Guide</a>
                        <a class="btn btn-secondary" href="{{ route('about') }}">About Project</a>
                        <a class="btn btn-secondary" href="{{ route('contact') }}">Contact</a>
                    </div>

                    <div class="hero-metrics" aria-label="Learning highlights">
                        <div>
                            <strong>20+</strong>
                            <span>Commands covered</span>
                        </div>
                        <div>
                            <strong>3 Levels</strong>
                            <span>Beginner to pro</span>
                        </div>
                        <div>
                            <strong>4 Projects</strong>
                            <span>Hands-on practice</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Learning pace overview">
                    <h2>Suggested Pace</h2>
                    <ul class="hero-list">
                        <li><span>Weeks 1-2</span><strong>Foundation and confidence</strong></li>
                        <li><span>Weeks 3-4</span><strong>Branching and collaboration</strong></li>
                        <li><span>Weeks 5-6</span><strong>Advanced recovery and optimization</strong></li>
                    </ul>
                    <a class="inline-link" href="https://git-scm.com/book/en/v2" target="_blank"
                        rel="noopener noreferrer">
                        Open free Git book
                    </a>
                </aside>
            </div>
        </section>

        <section id="path" class="section">
            <h2>Learning Path: Beginner to Pro</h2>
            <div class="level-grid">
                <article class="level-card">
                    <p class="level-badge">Level 1</p>
                    <h3>Beginner Foundations</h3>
                    <p>Understand repositories, commits, and safe day-to-day workflow.</p>
                    <ul class="list compact-list">
                        <li>Create and clone repositories.</li>
                        <li>Track changes with add and commit.</li>
                        <li>Read history using status and log.</li>
                    </ul>
                </article>
                <article class="level-card">
                    <p class="level-badge">Level 2</p>
                    <h3>Intermediate Collaboration</h3>
                    <p>Work in branches, handle merges, and ship through pull requests.</p>
                    <ul class="list compact-list">
                        <li>Create feature branches per task.</li>
                        <li>Merge and resolve simple conflicts.</li>
                        <li>Follow review-ready PR habits.</li>
                    </ul>
                </article>
                <article class="level-card">
                    <p class="level-badge">Level 3</p>
                    <h3>Pro Workflow Mastery</h3>
                    <p>Handle mistakes, optimize history, and maintain stable team flow.</p>
                    <ul class="list compact-list">
                        <li>Recover with restore, reset, and reflog.</li>
                        <li>Use rebase responsibly for clean history.</li>
                        <li>Automate quality checks before pushing.</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="commands" class="section">
            <h2>Command Map by Skill Level</h2>
            <div class="command-map-grid">
                <article class="map-col">
                    <h3>Beginner</h3>
                    <ul class="list compact-list">
                        <li><code>git init</code></li>
                        <li><code>git clone &lt;url&gt;</code></li>
                        <li><code>git status</code></li>
                        <li><code>git add .</code></li>
                        <li><code>git commit -m "message"</code></li>
                    </ul>
                </article>
                <article class="map-col">
                    <h3>Intermediate</h3>
                    <ul class="list compact-list">
                        <li><code>git checkout -b feature/x</code></li>
                        <li><code>git pull origin main</code></li>
                        <li><code>git merge feature/x</code></li>
                        <li><code>git push origin feature/x</code></li>
                        <li><code>git branch -d feature/x</code></li>
                    </ul>
                </article>
                <article class="map-col">
                    <h3>Pro</h3>
                    <ul class="list compact-list">
                        <li><code>git rebase -i HEAD~5</code></li>
                        <li><code>git reflog</code></li>
                        <li><code>git restore --staged &lt;file&gt;</code></li>
                        <li><code>git cherry-pick &lt;hash&gt;</code></li>
                        <li><code>git bisect start</code></li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="workflow" class="section workflow">
            <h2>Daily Workflow You Can Repeat</h2>
            <ol>
                <li>Pull latest updates: <code>git pull origin main</code></li>
                <li>Create branch: <code>git checkout -b feature/my-change</code></li>
                <li>Make changes and commit: <code>git add . && git commit -m "feat: update"</code></li>
                <li>Push branch: <code>git push origin feature/my-change</code></li>
                <li>Create pull request and request review.</li>
            </ol>
        </section>

        <section id="projects" class="section roadmap">
            <h2>Project-Based Upgrade Plan</h2>
            <div class="roadmap-grid">
                <article class="roadmap-step">
                    <span>Project 1</span>
                    <h3>Personal Notes Repo</h3>
                    <p>Create commits daily and practice clean commit messages for one week.</p>
                </article>
                <article class="roadmap-step">
                    <span>Project 2</span>
                    <h3>Feature Branch Challenge</h3>
                    <p>Build 3 small features in separate branches and merge with conflict handling.</p>
                </article>
                <article class="roadmap-step">
                    <span>Project 3</span>
                    <h3>Team Pull Request Simulation</h3>
                    <p>Open PR, review feedback, push follow-up commits, and merge safely.</p>
                </article>
                <article class="roadmap-step">
                    <span>Project 4</span>
                    <h3>Recovery Drill</h3>
                    <p>Intentionally break history and recover using reflog, reset, and cherry-pick.</p>
                </article>
            </div>
        </section>

        <section id="troubleshooting" class="section troubleshooting">
            <h2>Common Git Problems and How to Resolve Them</h2>
            <p class="section-intro">
                Use this section when push, pull, merge, or commit does not work as expected.
                Follow the exact commands in order and verify with <code>git status</code> after each fix.
            </p>

            <div class="issue-grid">
                <article class="issue-card">
                    <h3>Push Rejected (non-fast-forward)</h3>
                    <p><strong>Issue:</strong> Remote branch has new commits and your push is blocked.</p>
                    <p><strong>Fix:</strong> Pull latest changes, resolve conflicts if any, then push again.</p>
                    <pre><code>git pull origin main
git push origin your-branch</code></pre>
                </article>

                <article class="issue-card">
                    <h3>Merge Conflict During Pull or Merge</h3>
                    <p><strong>Issue:</strong> Same lines were edited in two branches.</p>
                    <p><strong>Fix:</strong> Open conflicted files, choose final code, then add and commit.</p>
                    <pre><code>git status
git add .
git commit -m "resolve: merge conflict"</code></pre>
                </article>

                <article class="issue-card">
                    <h3>Committed to Wrong Branch</h3>
                    <p><strong>Issue:</strong> You committed on main by mistake.</p>
                    <p><strong>Fix:</strong> Create a new branch from current state and move forward safely.</p>
                    <pre><code>git checkout -b feature/fix-commit-location
git push origin feature/fix-commit-location</code></pre>
                </article>

                <article class="issue-card">
                    <h3>Wrong File Added to Commit</h3>
                    <p><strong>Issue:</strong> Sensitive or unwanted file is staged.</p>
                    <p><strong>Fix:</strong> Unstage file, update .gitignore if needed, then recommit.</p>
                    <pre><code>git restore --staged path/to/file
git add .
git commit -m "fix: clean staged files"</code></pre>
                </article>

                <article class="issue-card">
                    <h3>Need to Undo Last Commit (Not Pushed)</h3>
                    <p><strong>Issue:</strong> Last commit message or content is wrong.</p>
                    <p><strong>Fix:</strong> Keep file changes but remove commit, then commit again correctly.</p>
                    <pre><code>git reset --soft HEAD~1
git commit -m "feat: corrected commit"</code></pre>
                </article>

                <article class="issue-card">
                    <h3>Recover Lost Work</h3>
                    <p><strong>Issue:</strong> Commit or branch looks missing after reset/rebase.</p>
                    <p><strong>Fix:</strong> Use reflog to find old HEAD and restore from hash.</p>
                    <pre><code>git reflog
git checkout &lt;commit-hash&gt;</code></pre>
                </article>
            </div>

            <div class="safe-flow">
                <h3>Safe Recovery Checklist</h3>
                <ul class="list compact-list">
                    <li>Never panic and never force push on shared branches without team approval.</li>
                    <li>Run <code>git status</code> first to understand current state.</li>
                    <li>Use <code>git log --oneline --graph</code> to verify history before big actions.</li>
                    <li>When unsure, create a backup branch: <code>git checkout -b backup/my-current-state</code>.</li>
                </ul>
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
                <li>Delete merged branches to keep repository history clean.</li>
            </ul>
        </section>

        <footer class="footer">
            <p>Built with Laravel • Keep practicing, keep shipping.</p>
            <p class="footer-note">Updated {{ date('Y') }} • Version-ready workflow habits for beginner teams.</p>
        </footer>
    </main>
</body>

</html>