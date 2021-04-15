Macansantos, Francis James P.
Zamora, Andrea Nicole A.
BSCS - III


Download and install Composer

[In CMD]
> composer -V                                   (Check if composer is installed)
> composer global require laravel/installer     (Install laravel)

[Files]
Get source code somewhere (e.g. zip file, github)

[Database]
Create database named "hfdatabase" in mysql (phpmyadmin)
Remove '.example. from files\.env.example = ( creating a file called .env )

[Terminal Commands]
Open files folder in editor
run in vscode terminal (or other editors): (with 'files' folder as root)
> composer install           (Install dependencies)
> php artisan key:generate   (Generate App key)
> php artisan migrate        (or 'php artisan migrate:fresh' if tables exist to drop them) (for database tables and rows)
> php artisan serve          (Serve the project in local server)

[Deployment Server]
http://127.0.0.1:8000/

[User Credentials]
email = admin@admin.com
pass  = admin

registration is enabled
(can be disabled in \routes\web.php)

Controllers = \App\Http\Controllers
Models = \App\Models
Factories = \database\factories
Migrations = \database\migrations
Seeders = \database\seeders
Public Files = \public
Views = \resources\views
Routes = \routes\web