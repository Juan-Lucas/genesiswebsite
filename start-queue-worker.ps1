# Genesis Queue Worker - Production
# Ce script lance le worker de queue en continu avec auto-restart

$ProjectPath = "C:\Users\DDOS\Herd\GENESIS\genesiswebsite"
Set-Location $ProjectPath

Write-Host "=== Genesis Queue Worker ===" -ForegroundColor Green
Write-Host "Demarrage du worker..." -ForegroundColor Cyan

while ($true) {
    try {
        Write-Host "[$(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')] Starting worker..." -ForegroundColor Yellow

        # Lance le worker (s'arrête après 1h max pour éviter les memory leaks)
        php artisan queue:work database --tries=3 --backoff=60 --timeout=90 --max-time=3600

        Write-Host "[$(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')] Worker stopped. Restarting in 5 seconds..." -ForegroundColor Red
        Start-Sleep -Seconds 5
    }
    catch {
        Write-Host "[$(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')] ERROR: $($_.Exception.Message)" -ForegroundColor Red
        Write-Host "Restarting in 10 seconds..." -ForegroundColor Yellow
        Start-Sleep -Seconds 10
    }
}
