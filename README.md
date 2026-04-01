# Laravel Full Stack and Git Practice Repository

This repository is built for developers who want to practice real Git and GitHub workflows while contributing to hands-on development tasks.

The project starts as a Laravel application and is designed to grow with collaborative practice across backend, frontend, and scripting tasks.

## Purpose

This repository helps contributors practice:

- Git and GitHub commands
- Team collaboration using branches and pull requests
- Laravel development tasks
- Frontend development tasks
- Python scripting tasks
- Conflict resolution and safe merge workflows

## Tech Stack

- Laravel (PHP)
- Blade, HTML, CSS, JavaScript
- Python
- Git and GitHub

## Repository Layout

Current root structure (simplified):

```text
laravel-fullstack-git-practice/
|- app/
|- bootstrap/
|- config/
|- database/
|- public/
|- resources/
|- routes/
|- storage/
|- tests/
|- artisan
|- composer.json
|- package.json
`- README.md
```

As the project grows, contributors can add dedicated practice folders such as:

- team-contributions/
- frontend-practice/
- python-scripts/
- practice-tasks/
- conflict-practice/

## Quick Start

### 1. Clone the repository

```bash
git clone https://github.com/Sohailqureshi9/laravel-fullstack-git-practice.git
cd laravel-fullstack-git-practice
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Set up environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run locally

```bash
php artisan serve
npm run dev
```

## Contribution Workflow

### 1. Create a feature branch

```bash
git checkout -b your-name-feature
```

Example:

```bash
git checkout -b sohail-feature
```

### 2. Make your changes

You can contribute by:

- adding your intro file in team-contributions/
- improving UI or frontend behavior
- adding Laravel features or fixes
- writing Python utility scripts
- creating or solving practice tasks

### 3. Stage and commit

```bash
git add .
git commit -m "Add contribution by Your Name"
```

### 4. Push your branch

```bash
git push origin your-name-feature
```

### 5. Open a pull request

1. Go to your repository on GitHub.
2. Open Pull requests.
3. Click New pull request.
4. Select your branch and submit.

## Git Commands You Will Practice

Core commands:

- git clone
- git status
- git add
- git commit
- git push
- git pull
- git checkout
- git branch
- git merge
- git log
- git reset

Collaboration skills:

- pull requests
- branch strategy
- merge conflicts
- peer reviews

## Beginner Practice Task Checklist

Use this checklist to practice in small steps. Create a branch, complete one or more tasks, then open a pull request.

### Git Basics

- [ ] Clone the repository to your local machine.
- [ ] Run git status and understand the output.
- [ ] Create a new branch (example: your-name-practice-1).
- [ ] Create one new file in team-contributions/ with your intro.
- [ ] Stage changes with git add.
- [ ] Commit with a clear message.
- [ ] Push your branch to GitHub.
- [ ] Open your first pull request.

### Collaboration Practice

- [ ] Pull latest changes from main before starting work.
- [ ] Review at least one open pull request (if available).
- [ ] Respond to review feedback by making a follow-up commit.
- [ ] Keep commit messages short and meaningful.

### Laravel Practice

- [ ] Add one new route in routes/web.php.
- [ ] Create a simple controller method and return a view or text response.
- [ ] Add one Blade view update in resources/views/.
- [ ] Run the app locally and verify your change.

### Frontend Practice

- [ ] Make one small UI improvement (spacing, color, button, or typography).
- [ ] Add one JavaScript interaction (toggle, alert, or DOM update).
- [ ] Ensure your change works on both desktop and mobile width.

### Python Practice

- [ ] Add one basic script in python-scripts/ (if folder exists, otherwise create it).
- [ ] Script idea: calculator, text formatter, or file reader.
- [ ] Add short usage instructions as comments at the top of the script.

### Advanced Git Practice (Optional)

- [ ] Rebase your branch on latest main.
- [ ] Resolve one merge conflict in a safe test branch.
- [ ] Squash related commits into one clean commit.
- [ ] Compare git merge vs git rebase using git log.

## Contribution Rules

- Always create a new branch.
- Do not commit directly to main.
- Use clear and meaningful commit messages.
- Test your changes before pushing.
- Respect other contributors and existing code.

## Example Contribution

Create file:

```text
team-contributions/sohail.txt
```

Example content:

```text
Name: Sohail Qureshi
Role: Laravel Developer
Country: Pakistan

Learning Git and contributing to this practice repository.
```

Then commit and push your branch through the standard workflow.

## Maintainer

Muhammad Sohail

- Email: sohailqureshii369@gmail.com
- LinkedIn: https://linkedin.com/in/sohailqureshi9
- GitHub: https://github.com/Sohailqureshi9

## Support

If this repository helps you practice Git and development workflows, consider starring it and sharing it with other learners.
