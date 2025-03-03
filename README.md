# Project Management System

A modern Laravel application for managing projects with authentication, CRUD operations, and multilingual support.

## Features

- User authentication with Laravel Breeze
- Complete CRUD operations for projects
- Project attributes: title, estimated hours, and start date
- Multilingual support (English, Spanish, and Catalan)
- Dynamic layouts with Blade components
- Modern and responsive UI with Tailwind CSS
- Dashboard with project statistics
- Authorization policies for project management

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or compatible database

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd TareaCrudLaravel-Alexis-Mansilla
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install and compile frontend dependencies:
```bash
npm install
npm run dev
```

4. Configure environment variables:
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure your database in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Run database migrations:
```bash
php artisan migrate
```

## Usage

1. Start the development server:
```bash
php artisan serve
```

2. Access the application at `http://localhost:8000`

3. Register a new account or login with existing credentials

4. Use the dashboard to manage your projects:
   - View all projects
   - Create new projects
   - Edit existing projects
   - Delete projects

## Project Structure

- `app/Http/Controllers/ProjectController.php`: Contains the logic for project CRUD operations
- `app/Models/Project.php`: Project model with relationships and attributes
- `app/Policies/ProjectPolicy.php`: Authorization policies for project management
- `resources/views/projects/`: Contains all project-related views
- `lang/`: Contains translation files for multiple languages
- `routes/web.php`: Contains all web routes for the application

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.
