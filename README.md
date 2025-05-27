## Repository
GitHub: https://github.com/your-username/pc-parts-catalog
## Installation Guide

1. Clone the Repository
    Download the project to your local machine: <br>
       'git clone https://github.com/Lionnes21/pc-parts-catalog.git' <br>
       'cd pc-parts-catalog'
   
2. Install PHP Dependencies (If not already installed) <br>
    Install backend dependencies using Composer: <br>
        'composer install'
   
3. Install Front-End Dependencies <br>
    Install Node.js packages for TailwindCSS and Vite: <br>
        'npm install'
   
4. Configure Environment <br>
    Create a new .env file: <br>
       'cp .env.example .env'
   
    Edit .env and set your database credentials: <br>
       DB_CONNECTION=mysql  
       DB_HOST=127.0.0.1  
       DB_PORT=3306  
       DB_DATABASE=pc_parts_catalog  
       DB_USERNAME=root  
       DB_PASSWORD=

5. Create the Database <br>
    Use your SQL client or run this query: <br>
        'CREATE DATABASE pc_parts_catalog;'

6. Generate App Key <br>
    Create a unique Laravel app key: <br>
    'php artisan key:generate'

7. Run Migrations <br>
    Create the required tables: <br>
        'php artisan migrate'

8. Build Front-End Assets <br>
    Compile styles and JS using Vite: <br>
       'npm run dev'
   
10. Start Development Server <br>
     Start Laravel’s built-in server:<br>
        'php artisan serve'

   
