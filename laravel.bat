@echo off
echo masukan nama project
set /p var=
composer create-project laravel/laravel "%var%"
echo poject "%var%" siap di jalankan
pause
code %var%
cd %var%
rename artisan x
php x serve | chrome http://127.0.0.1:8000/
rename 
