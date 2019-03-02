# music_application
Music application developed using PHP Laravel Framework

Considering that system has composer installed we perform the following steps:

After cloning the repository follow the following steps to get the project working:
1. Navigate to the cloned directory and type the following command:
   composer install

2. Once thats done, rename the ".env.example" or ".env.example_1" files to ".env"
3. In MySQL create a new database that will be used to store the user information as of now.
4. In the .env files change the following variables to connect to the database:
   DB_DATABASE=<database name>
   DB_USERNAME=<username>
   DB_PASSWORD=<password>
   
5. After changing and saving the .env file, navigate to the working directory and type the followinf command:
   php artisan migrate
   This will migrate the tables to database
   
6. Once the migration is successful type the following command:
   php artisan serve
   
7. In the browser go to the following URL:
   http://localhost:8000/
   and the app should be working
