<h1>Larafaiz</h1>

Larafaiz is a lightweight PHP MVC (Model-View-Controller) framework inspired by Laravel. It provides a simple and efficient way to build web applications using the MVC architectural pattern.

<h2>Features</h2>
<ul>
<li>Routing: Larafaiz includes a powerful routing system that allows you to define routes for your application and map them to controller actions.</li>
<li>Controllers: Controllers handle the application logic and serve as the intermediary between models and views.</li>
<li>Models: Models represent the data and business logic of your application. They interact with the database using the built-in database abstraction layer.</li>
<li>Views: Views are responsible for rendering the user interface of your application. Faizavel supports PHP templates and layouts.</li>
<li>Database Integration: Larafaiz comes with a database abstraction layer that supports multiple database systems (MySQL, PostgreSQL, SQLite, etc.) using PDO.</li>
<li>Form Handling: The framework provides a simple and intuitive way to handle form submissions and validation.</li>
<li>Authentication: Larafaiz includes basic authentication functionality out of the box, allowing you to handle user registration, login, and logout.</li>
<li>Middleware: You can define middleware to perform actions before or after specific routes or groups of routes.</li>
<li>Migrations: Larafaiz supports database migrations, making it easy to manage and version your database schema.</li>
</ul>

<h2>Installation</h2>
<ul>
<li>Clone the repository: git clone https://github.com/faiz-oussama/Larafaiz.git</li>
<li>Navigate to the project directory: cd Larafaiz</li>
<li>Install dependencies: composer install</li>
<li>Create a new .env file based on the .env.example file and configure your database credentials.</li>
<li>Run database migrations: php migrations.php</li>
<li>Start the development server: php -S localhost:8000 -t public</li>
<li>Larafaiz uses environment variables for configuration. You can set up your environment variables in the .env file located in the project root directory. Here's an example of the .env file:

DB_DSN=mysql:host=localhost;port=3306;dbname=faizavel
DB_USER=root
DB_PASSWORD=
</li>

</ul>



<h2>Directory Structure</h2>
<li>app/: Contains the application code, including controllers, models, and views.</li>
<li>config/: Stores configuration files.</li>
<li>migrations/: Contains database migration files.</li>
<li>public/: The entry point for the application and serves static assets.</li>
<li>vendor/: Includes third-party libraries and dependencies managed by Composer.</li>
<li>Contributing :Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.</li>

<h2>License</h2>
<h3>Larafaiz is open-source software licensed under the MIT License.</h3>
