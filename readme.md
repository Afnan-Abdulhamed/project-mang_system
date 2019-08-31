
## Installation Steps

- While in the project root directory, copy the .env.local from the repository and make the file name .env, and change the database & mail informations
```
cp .env.example .env
```

- run composer install to bring all the project libraries and dependencies
```
composer install
```

- run the follwiong   
```
php artisan migrate
php artisan db:seed
chmod 777 -R storage
chmod 777 -R bootstrap/cache
php artisan optimize:clear
```

- install all JS work using node
```
npm install
npm run production
```
Run Application
```
php artisan:serve
```

you can login to tha system by one these users  
1- admin user :   
    email : admin@gmail.com   
    password : 123456789   

2- client user:   
    email : client@gmail.com   
    password : 123456789   

