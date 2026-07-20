# Sports Tournament Management System

A comprehensive web-based tournament management system built with PHP and MySQL. This system allows administrators to manage sports tournaments, teams, and players while providing users with an intuitive interface to view tournament information and register for events.

## Features

- **User Management**
  - User registration and authentication
  - Different access levels (Admin/User)

- **Tournament Management**
  - Create and manage tournaments
  - Team registration
  - Fixture management
  - Results tracking

- **News & Updates**
  - Latest tournament news
  - Event announcements

- **Admin Dashboard**
  - Comprehensive admin controls
  - User management
  - Tournament oversight
  - Content management

## Prerequisites

- XAMPP (Apache and MySQL)
- PHP 7.4 or higher
- Web browser

## Installation & Setup

1. Install XAMPP on your system
2. Clone this repository to your XAMPP's htdocs folder:
   ```bash
   cd c:\xampp\htdocs
   git clone [repository-url] Esports-Tournament-Website
   ```
3. Start Apache and MySQL services from XAMPP Control Panel
4. Import the database schema (if provided)
5. Configure database connection in `db.php`

## How to Access the Website

1. Start XAMPP Control Panel
2. Start Apache and MySQL services
3. Open your web browser and visit:
   - Main Website: `http://localhost/Esports-Tournament-Website`
   - Admin Panel: `http://localhost/Esports-Tournament-Website/admin`

## Deployment Notes (Important)

- This project uses **PHP + MySQL**, so it will **not run on GitHub Pages** (GitHub Pages supports only static files).
- Keep the source code in GitHub, but deploy the app to a PHP host (for example: cPanel hosting, Render, Railway, or any VPS with Apache/Nginx + PHP + MySQL).
- Before deploying, set these environment variables in your hosting platform:
  - `DB_HOST`
  - `DB_USER`
  - `DB_PASS`
  - `DB_NAME`
- Import `assets/database.sql` into your MySQL database before first run.

## Project Structure

```
Esports-Tournament-Website/
├── admin/           # Admin panel files
├── assets/          # CSS, JS, and media files
├── auth/           # Authentication related files
├── tournament/     # Tournament management files
├── uploads/        # Uploaded files
├── user/           # User related files
├── db.php          # Database configuration
└── index.php       # Main entry point
```

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the terms of the license included with this repository.
