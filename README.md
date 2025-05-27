Repository
GitHub: https://github.com/your-username/pc-parts-catalog

Installation
Follow these steps to set up and run the project locally:
1. Clone the Repository
Clone the project from GitHub to your local machine:
git clone https://github.com/Lionnes21/pc-parts-catalog.git
cd pc-parts-catalog

Replace your-username with your actual GitHub username.
2. Install PHP Dependencies
Install the required PHP dependencies using Composer:
composer install

This installs Laravel and other backend dependencies specified in composer.json.
3. Install Front-End Dependencies
Install Node.js dependencies for TailwindCSS and Vite:
npm install

4. Configure Environment
Copy the .env.example file to create a .env file:
cp .env.example .env

Open the .env file in a text editor and configure your MySQL database settings:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pc_parts_catalog
DB_USERNAME=root
DB_PASSWORD=

Replace your_mysql_password with your actual MySQL password. If you don’t have a password, leave it empty (DB_PASSWORD=).
5. Create the Database (SQL QUERY OR DIRECTLY CREATE DB IN LOCALHOST)
CREATE DATABASE pc_parts_catalog;

6. Generate Application Key
Generate a unique application key for Laravel:
php artisan key:generate

This updates the APP_KEY in your .env file, which is used for encryption and security.
7. Run Database Migrations
Run the migrations to create the necessary database tables (e.g., users, products):
php artisan migrate

This sets up the database schema for products and authentication.
8. Build Front-End Assets
Compile the TailwindCSS styles and JavaScript assets using Vite:
npm run dev

9. Start the Development Server
Start the Laravel development server:
php artisan serve

The application will be available at http://localhost:8000.
10. Access the Application
Open your browser and navigate to:
http://localhost:8000

Register/Login: Use the "Register" or "Login" links in the navigation bar to create an account or sign in.
Manage Products:
View: The product catalog is displayed at /products.
Create: Click "Add New Product" to create a new PC part.
Edit: Click "Edit" next to a product to update its details.
Delete: Click "Delete" to remove a product (with confirmation).


Logout: Click "Logout" in the navigation bar to sign out.





