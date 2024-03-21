# chatify. Online chat using Laravel, MySQL, Jetstream and Pusher

This project demonstrates the creation of an online chat room using the Laravel framework, Jetstream authentication system, MySQL database for storing messages and Pusher for real-time chat updates.

## Установка

1. Clone the repository to your local computer: https://github.com/rud3nk0/chatify.git
2. Go to the project directory, my path on my computer is C:\OSPanel\domains\chatify: cd chatify
3. Install dependencies via Composer: composer install 
4. Copy the `.env.example` file and rename it to `.env`. Configure the connection to your MySQL database and Pusher settings:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_app_cluster
PUSHER_APP_ENCRYPTED=false

5. Generate an application key: php artisan key:generate
6. Run the migrations to create the tables in the database: php artisan migrate
7. Install NPM dependencies and compile the resources: npm install && npm run dev
8. Start the local server: php artisan serve
9. Replace your_username, your_chat_app, your_database_name, your_database_username,
your_database_password, your_pusher_app_id, your_pusher_app_key, your_pusher_app_secret,
your_pusher_app_cluster, your name or nickname with the corresponding values of
your project and personal information.

10. After starting the local server, you can open your application in a browser at `http://localhost:8000`.

## Usage.

1. Register or log in.
2. Navigate to the chat page.
3. You can send messages and they will be displayed in real time to all chat users.

## Technologies

- Laravel is a PHP framework for web development.
- MySQL - relational database management system.
- Jetstream - authentication and user management system for Laravel.
- Pusher - service for real-time data update.

## Author

[rud3nk0] - [https://www.instagram.com/rud3nk0?igsh=Ymo5ODJkdTh6em15&utm_source=qr].






