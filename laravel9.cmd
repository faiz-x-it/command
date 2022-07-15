@echo off
echo "masukkan nama project anda:"
set /p var=
composer create-project laravel/laravel %var%
code %var%
chrome 127.0.0.1