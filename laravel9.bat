@echo off
echo masukan nama project
set /p var=
composer create-project laravel/laravel "%var%"
echo poject "%var%" siap dijalankan
pause
code %var%
cd %var%
ren artisan x
php x artisan | chrome http://127.0.0.1:8000/