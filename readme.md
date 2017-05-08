This is a simple Readme to get start:

Make sure you have [Larvel](https://laravel.com/) installed

Run laravel -V to see if you have it installed.

Once completed clone this repo [here](https://github.com/kgrant8/contacts.git)

Navagate to your project top folder i.e php/contacts

cp .env.example to .env in the same dir.

update MySql paramters to point to where your db is stored.

now run php artisan migrate - this will give you the sql db scheme and set up the table for you. 

if you need help run php artisan --help migrate

now spin up a local server to do this run php artisan serve

That should spit out a url to nav. to like: <http://127.0.0.1:8000> 