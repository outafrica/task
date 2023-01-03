#Installation Instructions 8-)

*cd to the parent project folder*
*Run the following command to start the project :-*

`composer install`
`cp .env.example .env` - copy env file
`php artisan key:gen`

*Configure the env db credentials then run:-*
`php artisan migrate`

`php artisan serve` - open the localhost link to the project and test 

##NB
_If you are running a unix system, allow read permission for the projects storage folder_ 

**Happy Testing**
:-)