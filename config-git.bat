@echo off
setlocal

REM Configurar Git si no está en el PATH
if "%PATH:Git\bin=%"=="%PATH%" (
    echo Git no está en el PATH. Asegúrate de que Git esté instalado y en el PATH.
    pause
    exit /b 1
)

REM Configurar nombre de usuario y correo electrónico de Git
set "GIT_USERNAME=Trabajo-Alvaro"
set "GIT_EMAIL=trabajo.nestor.098@gmail.com"

echo Configurando Git con el nombre de usuario y correo electrónico...
git config --global user.name "%GIT_USERNAME%"
git config --global user.email "%GIT_EMAIL%"

REM Mostrar la configuración actual de Git
echo Configuración actual de Git:
git config --global --list

echo Configuración de Git completada.