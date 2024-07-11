@echo off
setlocal

REM Obtiene la ruta absoluta de la carpeta donde se encuentra este archivo .bat
set "BASEDIR=%~dp0"

echo Iniciando servidor PHP en la carpeta: %BASEDIR%
cd /d "%BASEDIR%"
start /B php artisan serve > nul

echo Abriendo navegador predeterminado...
start http://localhost:8000
