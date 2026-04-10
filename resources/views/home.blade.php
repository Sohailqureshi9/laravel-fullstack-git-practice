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
            <div class="topbar-head">
                <a class="brand" href="{{ route('home') }}">Git Learning Hub</a>
                <p class="brand-subtitle">Practical Git roadmap from beginner to pro</p>
            </div>
            <nav class="nav-links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#path">Path</a>
                <a href="#month-roadmap">1-Month Plan</a>
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
                            <strong>30 Days</strong>
                            <span>Complete roadmap</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-panel" aria-label="Learning pace overview">
                    <h2>Suggested Pace</h2>
                    <ul class="hero-list">
                        <li><span>Weeks 1-2</span><strong>Foundation and confidence</strong></li>
                        <li><span>Week 3</span><strong>Branching and collaboration</strong></li>
                        <li><span>Week 4</span><strong>Advanced recovery and optimization</strong></li>
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

        <section id="month-roadmap" class="section month-roadmap">
            <h2>Complete 1-Month Git Roadmap</h2>
            <p class="section-intro">
                Study 45 to 60 minutes daily. Each week has a focus, clear output, and recommended source.
                Follow this order exactly to move from beginner to confident team contributor in 30 days.
            </p>

            <div class="month-grid">
                <article class="month-card">
                    <p class="month-badge">Week 1 • Days 1-7</p>
                    <h3>Git Basics and Local Workflow</h3>
                    <p><strong>Daily Time:</strong> 45 min</p>
                    <ul class="list compact-list">
                        <li>Learn: <code>git init</code>, <code>git clone</code>, <code>git status</code>,
                            <code>git add</code>, <code>git commit</code>.
                        </li>
                        <li>Practice: Make 2 small commits daily in a practice repo.</li>
                        <li>Goal: Understand staging area and commit history.</li>
                        <li>Learn from: <a class="inline-link" href="https://git-scm.com/docs/gittutorial"
                                target="_blank" rel="noopener noreferrer">Git Tutorial</a>.</li>
                    </ul>
                </article>

                <article class="month-card">
                    <p class="month-badge">Week 2 • Days 8-14</p>
                    <h3>Branches, Merge, and Pull Workflow</h3>
                    <p><strong>Daily Time:</strong> 60 min</p>
                    <ul class="list compact-list">
                        <li>Learn: <code>git checkout -b</code>, <code>git pull</code>, <code>git merge</code>,
                            <code>git branch -d</code>.
                        </li>
                        <li>Practice: Build 3 mini features in separate branches.</li>
                        <li>Goal: Merge without fear and resolve simple conflicts.</li>
                        <li>Learn from: <a class="inline-link"
                                href="https://www.atlassian.com/git/tutorials/using-branches" target="_blank"
                                rel="noopener noreferrer">Atlassian Branch Guide</a>.</li>
                    </ul>
                </article>

                <article class="month-card">
                    <p class="month-badge">Week 3 • Days 15-21</p>
                    <h3>Remote Collaboration and Pull Requests</h3>
                    <p><strong>Daily Time:</strong> 60 min</p>
                    <ul class="list compact-list">
                        <li>Learn: <code>git push</code>, PR flow, review updates, branch cleanup.</li>
                        <li>Practice: Open 3 pull requests with meaningful descriptions.</li>
                        <li>Goal: Collaborate like a real team member.</li>
                        <li>Learn from: <a class="inline-link" href="https://docs.github.com/en/pull-requests"
                                target="_blank" rel="noopener noreferrer">GitHub PR Docs</a>.</li>
                    </ul>
                </article>

                <article class="month-card">
                    <p class="month-badge">Week 4 • Days 22-30</p>
                    <h3>Advanced Recovery and Pro Habits</h3>
                    <p><strong>Daily Time:</strong> 60 min</p>
                    <ul class="list compact-list">
                        <li>Learn: <code>git reflog</code>, <code>git restore</code>, <code>git reset --soft</code>,
                            <code>git cherry-pick</code>.
                        </li>
                        <li>Practice: Solve 5 intentional mistakes from troubleshooting scenarios.</li>
                        <li>Goal: Recover safely from common Git problems.</li>
                        <li>Learn from: <a class="inline-link"
                                href="https://git-scm.com/book/en/v2/Git-Tools-Revision-Selection" target="_blank"
                                rel="noopener noreferrer">Git Revision Tools</a>.</li>
                    </ul>
                </article>
            </div>

            <div class="month-outcome">
                <h3>Expected Result After 30 Days</h3>
                <ul class="list compact-list">
                    <li>You can work confidently with branches and pull requests.</li>
                    <li>You can resolve push, merge, and commit mistakes on your own.</li>
                    <li>You can explain a clean Git workflow for team projects.</li>
                    <li>You will have a mini portfolio of Git practice repositories.</li>
                </ul>
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

            <div class="scenario-playbook">
                <h3>Scenario Playbook: Problem to Solution</h3>
                <div class="scenario-grid">
                    <article class="scenario-card">
                        <p class="scenario-label">Scenario 1</p>
                        <h4>Push Rejected While Pushing Feature Branch</h4>
                        <p><strong>Problem:</strong> You see non-fast-forward error on <code>git push</code>.</p>
                        <p><strong>Why:</strong> Remote branch has new commits you do not have locally.</p>
                        <ol class="scenario-steps">
                            <li>Check current branch: <code>git branch</code>.</li>
                            <li>Pull latest changes: <code>git pull origin your-branch</code>.</li>
                            <li>If conflicts appear, resolve files and run <code>git add .</code>.</li>
                            <li>Commit conflict resolution: <code>git commit -m "resolve: sync branch"</code>.</li>
                            <li>Push again: <code>git push origin your-branch</code>.</li>
                        </ol>
                    </article>

                    <article class="scenario-card">
                        <p class="scenario-label">Scenario 2</p>
                        <h4>Merge Conflict After Pulling Main</h4>
                        <p><strong>Problem:</strong> Pull/merge stopped with conflict markers.</p>
                        <p><strong>Why:</strong> Same lines edited in both branches.</p>
                        <ol class="scenario-steps">
                            <li>List conflicted files: <code>git status</code>.</li>
                            <li>Open files and remove <code>&lt;&lt;&lt;&lt;&lt;&lt;&lt;</code> markers by selecting
                                final code.</li>
                            <li>Stage resolved files: <code>git add .</code>.</li>
                            <li>Complete merge: <code>git commit -m "resolve: merge conflict in home page"</code>.</li>
                            <li>Verify history: <code>git log --oneline --graph -5</code>.</li>
                        </ol>
                    </article>

                    <article class="scenario-card">
                        <p class="scenario-label">Scenario 3</p>
                        <h4>Accidentally Committed on Main Branch</h4>
                        <p><strong>Problem:</strong> Work was committed directly to <code>main</code>.</p>
                        <p><strong>Why:</strong> Feature branch was not created before commit.</p>
                        <ol class="scenario-steps">
                            <li>Create new branch from current commit:
                                <code>git checkout -b feature/move-main-commit</code>.
                            </li>
                            <li>Push branch: <code>git push origin feature/move-main-commit</code>.</li>
                            <li>Go back to main and undo wrong commit safely: <code>git checkout main</code> then
                                <code>git revert HEAD</code>.
                            </li>
                            <li>Open PR from your new feature branch.</li>
                        </ol>
                    </article>

                    <article class="scenario-card">
                        <p class="scenario-label">Scenario 4</p>
                        <h4>Lost Commit After Reset or Rebase</h4>
                        <p><strong>Problem:</strong> A previous commit is no longer visible in branch log.</p>
                        <p><strong>Why:</strong> History was rewritten or branch pointer moved.</p>
                        <ol class="scenario-steps">
                            <li>Find old commit from reference log: <code>git reflog</code>.</li>
                            <li>Create rescue branch from lost commit hash:
                                <code>git checkout -b rescue/lost-work &lt;hash&gt;</code>.
                            </li>
                            <li>Cherry-pick required commit into active branch: <code>git checkout your-branch</code>
                                then <code>git cherry-pick &lt;hash&gt;</code>.</li>
                            <li>Push recovered work: <code>git push origin your-branch</code>.</li>
                        </ol>
                    </article>
                </div>
            </div>

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
            <div class="footer-grid">
                <section>
                    <h3>Git Learning Hub</h3>
                    <p>Structured and practical guide to build real Git confidence for individual and team projects.</p>
                </section>
                <section>
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#path">Learning Path</a></li>
                        <li><a href="#month-roadmap">1-Month Plan</a></li>
                        <li><a href="#troubleshooting">Troubleshooting</a></li>
                    </ul>
                </section>
                <section>
                    <h3>Created By</h3>
                    <p class="creator-name">Sohail Qureshi</p>
                    <p>Keep practicing daily and ship better code with confidence.</p>
                </section>
            </div>
            <p class="footer-note">Updated {{ date('Y') }} • Version-ready workflow habits for beginner teams.</p>
        </footer>
    </main>

    <div id="copy-toast" class="copy-toast" role="status" aria-live="polite"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = Array.from(document.querySelectorAll('.nav-links a[href^="#"]'));
            const sectionEntries = navLinks
                .map((link) => {
                    const target = document.querySelector(link.getAttribute('href'));
                    return target ? {
                        link,
                        target
                    } : null;
                })
                .filter(Boolean);

            const setActiveLink = (id) => {
                navLinks.forEach((link) => {
                    const isActive = link.getAttribute('href') === `#${id}`;
                    link.classList.toggle('active-link', isActive);
                });
            };

            if (sectionEntries.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    const visible = entries
                        .filter((entry) => entry.isIntersecting)
                        .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

                    if (visible) {
                        setActiveLink(visible.target.id);
                    }
                }, {
                    rootMargin: '-32% 0px -55% 0px',
                    threshold: [0.2, 0.45, 0.7]
                });

                sectionEntries.forEach((entry) => observer.observe(entry.target));

                const initialHash = window.location.hash.replace('#', '');
                if (initialHash) {
                    setActiveLink(initialHash);
                } else {
                    setActiveLink(sectionEntries[0].target.id);
                }

                window.addEventListener('hashchange', () => {
                    const hashId = window.location.hash.replace('#', '');
                    if (hashId) {
                        setActiveLink(hashId);
                    } else if (sectionEntries.length > 0) {
                        setActiveLink(sectionEntries[0].target.id);
                    }
                });
            }

            const toast = document.getElementById('copy-toast');
            let toastTimer;

            const showToast = (message) => {
                if (!toast) {
                    return;
                }

                toast.textContent = message;
                toast.classList.add('show');

                clearTimeout(toastTimer);
                toastTimer = setTimeout(() => {
                    toast.classList.remove('show');
                }, 1400);
            };

            const copyTextWithFallback = async (text) => {
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(text);
                    return;
                }

                const textArea = document.createElement('textarea');
                textArea.value = text;
                textArea.setAttribute('readonly', '');
                textArea.style.position = 'fixed';
                textArea.style.left = '-9999px';
                textArea.style.top = '0';
                document.body.appendChild(textArea);
                textArea.select();

                try {
                    const copied = document.execCommand('copy');
                    if (!copied) {
                        throw new Error('Copy command failed');
                    }
                } finally {
                    document.body.removeChild(textArea);
                }
            };

            document.querySelectorAll('pre').forEach((pre) => {
                const codeEl = pre.querySelector('code');
                if (!codeEl) {
                    return;
                }

                pre.classList.add('copy-ready');

                const copyButton = document.createElement('button');
                copyButton.type = 'button';
                copyButton.className = 'copy-btn';
                copyButton.textContent = 'Copy';
                copyButton.setAttribute('aria-label', 'Copy command block');
                pre.appendChild(copyButton);

                copyButton.addEventListener('click', async () => {
                    try {
                        await copyTextWithFallback(codeEl.innerText.trim());
                        copyButton.textContent = 'Copied';
                        showToast('Command copied');

                        setTimeout(() => {
                            copyButton.textContent = 'Copy';
                        }, 1100);
                    } catch (error) {
                        copyButton.textContent = 'Failed';
                        showToast('Copy failed');

                        setTimeout(() => {
                            copyButton.textContent = 'Copy';
                        }, 1100);
                    }
                });
            });
        });
    </script>
</body>

</html>