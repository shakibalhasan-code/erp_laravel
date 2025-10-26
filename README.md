# Laravel ERP System

A comprehensive Enterprise Resource Planning (ERP) system built with Laravel, featuring inventory management, sales, purchases, and comprehensive business operations management.

## Features

### 1. User Management and Security

- Role-based access control (RBAC)
- Permission management
- User authentication and authorization
- Multi-language support

### 2. Inventory Management

- Product management
- Warehouse management
- Stock tracking
- Product categorization (Sections, Categories, Subcategories)
- Brand management
- Measurement units

### 3. Sales Management

- Client management
- Sales invoices
- Payment tracking
- Sales reports
- Invoice attachments
- Payment receipts
- Client contacts

### 4. Purchase Management

- Supplier management
- Purchase invoices
- Supplier payments
- Invoice attachments
- Payment tracking
- Supplier contacts

### 5. Financial Management

- Tax management
- Sequential code generation
- Opening balance management
- Payment tracking
- Multiple payment methods

### 6. Settings & Configuration

- General settings
- Branch management
- Sequential numbering
- Measurement units templates
- Tax configuration
- System localization

## Technology Stack

- **Framework:** Laravel 9.x
- **PHP Version:** ^8.0.2
- **Database:** MySQL
- **Frontend:**
  - Livewire
  - Bootstrap
  - JavaScript
- **Additional Packages:**
  - Laravel MPDF
  - Laravel Excel
  - Laravel Permission (Spatie)
  - Laravel Localization
  - Intervention Image
  - DataTables

## Installation

1. Clone the repository:

```bash
git clone [repository-url]
cd Laravel-ERP-System
```

1. Install PHP dependencies:

```bash
composer install
```

1. Install JavaScript dependencies:

```bash
npm install
```

1. Create and configure environment file:

```bash
cp .env.example .env
php artisan key:generate
```

1. Configure your database in the .env file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=erp_system
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

1. Run database migrations and seeders:

```bash
php artisan migrate
php artisan db:seed
```

1. Build assets:

```bash
npm run dev
```

1. Start the development server:

```bash
php artisan serve
```

## Key Directories

- `/app` - Contains the core code of the application
- `/config` - All configuration files
- `/database` - Database migrations and seeders
- `/public` - Publicly accessible files
- `/resources` - Views, raw assets (SASS, JS, etc)
- `/routes` - All route definitions
- `/storage` - Application files, logs, cache
- `/tests` - Application tests

## Main Features Breakdown

### Inventory Management

- Complete product lifecycle management
- Multiple warehouse support
- Stock tracking and management
- Product categorization
- Brand management
- Unit measurement system

### Sales System

- Client management
- Invoice generation
- Payment tracking
- Multiple payment methods
- Sales returns
- Sales reports

### Purchase System

- Supplier management
- Purchase orders
- Invoice management
- Payment tracking
- Purchase returns
- Purchase reports

### Financial Features

- Tax management
- Payment tracking
- Multiple payment methods
- Opening balance management
- Financial reports

## Screenshots

Check the [screenshots](screenshots/SCREENSHOTS.md) folder for visual references of the system's interface and features.

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support, please create an issue in the repository or contact the development team.
