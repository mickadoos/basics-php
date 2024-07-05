# BASICS FOR PHP

A simple PHP project to learn the basics of PHP for web development.

## Features

- Display and sort tasks, meals and other items.

## Setup

1. Clone the repository
2. Navigate to the project directory
3. Start PHP's built-in server:
`php -S localhost:8000 -t public`

Visit `http://localhost:8000` in your browser

## Project Structure

- `public/`: Web root with front controller (index.php)
- `src/`: PHP logic and data
- `views/`: HTML templates
- `public/assets/`: CSS and images

## Adding New Pages

1. Create a new partial view in `views/partials/`
2. Add a case to the switch statement in `public/index.php`
3. Add a link in `views/partials/nav.php`
