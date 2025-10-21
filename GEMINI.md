# Gemini Workspace: Project Analysis

This document provides an analysis of the Laravel project in this workspace.

## Project Overview

This is a **Laravel 12** application that appears to be a **School Management System**. It includes features for managing students, guardians, classes, and announcements. The application uses role-based access control to differentiate between user types like `Owner` and `Headmaster`.

## Key Technologies

### Backend
- **PHP Version:** ^8.2
- **Framework:** Laravel 12
- **Key Libraries:**
  - `spatie/laravel-permission`: For handling user roles and permissions.
  - `laravel/breeze`: For authentication scaffolding.
  - `phpunit/phpunit`: For unit and feature testing.

### Frontend
- **Asset Bundling:** Vite
- **CSS Framework:** Tailwind CSS
- **JavaScript:** Alpine.js
- **Libraries:**
    - `@hotwired/turbo`: For speeding up navigation and form submissions.

## Core Features

Based on the routes and models, the application includes the following features:

- **Authentication:** Standard user authentication including login, registration, and profile management.
- **Dashboard:** A central dashboard displaying:
  - Key statistics (student, guardian, and class counts).
  - The 5 latest announcements.
  - The 5 latest students and guardians.
- **Student Management:** Functionality to manage student records (details inferred from `StudentController`).
- **Announcement System:** A resource route for creating, reading, updating, and deleting announcements.
- **Role-Based Access Control (RBAC):** Routes like `/students` and `/announcements` are protected and accessible only by users with the `Owner` or `Headmaster` role.

## Getting Started

To set up and run this project, a developer would typically follow these steps:

1.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```
2.  **Install NPM Dependencies:**
    ```bash
    npm install
    ```
3.  **Configure Environment:**
    - Copy `.env.example` to `.env`.
    - Configure database and other environment variables.
4.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```
5.  **Run Database Migrations and Seeders:**
    ```bash
    php artisan migrate --seed
    ```
6.  **Build Frontend Assets:**
    ```bash
    npm run build
    ```
7.  **Run the Development Server:**
    The `composer.json` includes a convenient `dev` script to run all necessary services concurrently:
    ```bash
    composer run dev
    ```
    Alternatively, run the server manually:
    ```bash
    php artisan serve
    ```
    And in a separate terminal, run the Vite development server:
    ```bash
    npm run dev
    ```
