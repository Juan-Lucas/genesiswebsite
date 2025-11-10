@echo off
REM Genesis Queue Worker - Production
REM Ce script lance le worker de queue en continu

cd /d "C:\Users\DDOS\Herd\GENESIS\genesiswebsite"

:loop
echo [%date% %time%] Starting Genesis Queue Worker...
php artisan queue:work database --tries=3 --backoff=60 --timeout=90 --max-time=3600

echo [%date% %time%] Worker stopped. Restarting in 5 seconds...
timeout /t 5 /nobreak > nul
goto loop
