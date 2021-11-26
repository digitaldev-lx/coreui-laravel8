- In windows open wsl2 terminal
- Clone the repository with __git clone__
- Run __php artisan key:generate__
- Create __.env__ file and set database configurations like this:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=example
DB_USERNAME=sail
DB_PASSWORD=password

- Run __composer update__ and  __npm run dev__
- configure Bash Alias for Laravel Sail with the command __alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'__
- run __sail up -d__
- finally you can go to your browser and enter in __127.0.0.1__ or you can set a VHOST like __example.test__ for example
