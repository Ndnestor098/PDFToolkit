@echo off
setlocal

REM Obtiene la ruta absoluta de la carpeta donde se encuentra este archivo .bat
set "BASEDIR=%~dp0"

REM Cambiar al directorio del repositorio
cd /d "%BASEDIR%"

REM Asegurarse de estar en la rama principal
echo Comprobando si hay actualizaciones pendientes...
git checkout main

REM Obtener cambios del remoto sin fusionar
git fetch origin

REM Verificar si hay diferencias entre la rama local y la remota
REM Esto compara la referencia de la rama local con la remota
git diff --quiet main origin/main

IF %ERRORLEVEL% EQU 0 (
    echo No hay actualizaciones pendientes.
) ELSE (
    echo Actualizacion encontrada, actualizando...
    git pull origin main
)

REM Pausa para ver el resultado
echo Buen dia...