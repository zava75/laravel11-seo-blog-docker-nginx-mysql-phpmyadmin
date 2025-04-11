1) Mailtrap Setup for Email Testing
    Sign up at Mailtrap.io
    Create a free account for testing emails.
    Create an Inbox
    After signing up, create a new inbox.
    Configure Laravel
    In your .env file, add the Mailtrap SMTP settings:
    
    # Looking to send emails in production? Check out our Email API/SMTP product!
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_username
    MAIL_PASSWORD=your_password
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=example@yourapp.com
    MAIL_FROM_NAME="${APP_NAME}"
    
    Replace MAIL_USERNAME and MAIL_PASSWORD with your Mailtrap credentials.
    All emails sent from Laravel will appear in your Mailtrap inbox.

2) MySQL Container Setup for Laravel Blog
    a) Access MySQL Container. First, ensure your Docker containers are running. Then, access the MySQL container:
    #bash
    docker exec -it mysql bash
    
    b) Log in to MySQL. Once inside the container, log in to MySQL as the root user using the following command:
    #bash
    mysql -u root -p
    Enter the root password (default: root).
    
    c)Create Database and User. Run the following SQL commands inside MySQL to create the laravel_blog database and user:
    #sql
    CREATE DATABASE laravel_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    CREATE USER 'laravel_blog'@'%' IDENTIFIED WITH caching_sha2_password BY 'laravel_blog';
    GRANT ALL PRIVILEGES ON laravel_blog.* TO 'laravel_blog'@'%';
    FLUSH PRIVILEGES;
    
    d)Exit MySQL
    #bash
    exit
    Make sure you're not inside a container. If you're inside one, run exit to leave the container first.
    This setup will ensure that your MySQL container is configured with the necessary database and user for your Laravel application. Let me know if you need any further assistance!

3) Running Laravel Application with Docker (PHP-FPM)
   To run Laravel commands (like php artisan) inside a Dockerized environment, follow the steps below:

    a) Access the php-fpm container from the host
    Since your Nginx container doesn't have PHP installed, you'll need to run Laravel commands inside the php-fpm container. To access the php-fpm container, run: 
    #bash
    docker exec -it php-fpm bash
    Make sure to replace php-fpm with the correct name of your container if it's different.
    
    b) Generate the Laravel application key and run migrations
    Once you're inside the php-fpm container, perform the following steps:
    Navigate to the Laravel project directory (e.g., /var/www/html):
    #bash
    cd /var/www/html
    Generate the Laravel application key:
    #bash
    php artisan key:generate

    Run the migrations:
    #bash
    php artisan migrate

   Running Laravel Application with Docker http://localhost/

4) Install debug bar --dev
   #bash
   composer require barryvdh/laravel-debugbar --dev

5) php artisan storage:link
6) composer require fakerphp/faker --dev
7) php artisan db:seed




