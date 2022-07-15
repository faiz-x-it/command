@echo off
netsh wlan show profiles
echo "masukan User Profile yang  dipilih
set /p wifi=
netsh wlan show profiles %wifi% key=clear