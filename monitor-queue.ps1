# Surveillance du Worker de Queue
# Ce script vérifie l'état du worker et affiche les statistiques

$ProjectPath = "C:\Users\DDOS\Herd\GENESIS\genesiswebsite"
Set-Location $ProjectPath

Write-Host "`n=== Genesis Queue Monitor ===" -ForegroundColor Green
Write-Host "Date: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')`n" -ForegroundColor Cyan

# Vérifier si le worker tourne
$workerProcess = Get-Process -Name "php" -ErrorAction SilentlyContinue | Where-Object { $_.CommandLine -like "*queue:work*" }

if ($workerProcess) {
    Write-Host "✅ Worker Status: RUNNING" -ForegroundColor Green
    Write-Host "   PID: $($workerProcess.Id)" -ForegroundColor Gray
    Write-Host "   Start Time: $($workerProcess.StartTime)" -ForegroundColor Gray
    Write-Host "   CPU: $($workerProcess.CPU)s" -ForegroundColor Gray
    Write-Host "   Memory: $([math]::Round($workerProcess.WorkingSet64/1MB, 2)) MB`n" -ForegroundColor Gray
} else {
    Write-Host "❌ Worker Status: NOT RUNNING" -ForegroundColor Red
    Write-Host "   Recommendation: Start the worker with .\start-queue-worker.ps1`n" -ForegroundColor Yellow
}

# Afficher les jobs en attente
Write-Host "📊 Queue Statistics:" -ForegroundColor Cyan
php artisan queue:monitor database 2>$null

# Afficher les jobs échoués
Write-Host "`n❌ Failed Jobs:" -ForegroundColor Red
$failedJobs = php artisan queue:failed --json 2>$null | ConvertFrom-Json
if ($failedJobs) {
    Write-Host "   Total: $($failedJobs.Count)" -ForegroundColor Yellow
} else {
    Write-Host "   None ✅" -ForegroundColor Green
}

# Afficher les derniers logs
Write-Host "`n📋 Recent Logs (last 10 lines):" -ForegroundColor Cyan
if (Test-Path "storage\logs\laravel.log") {
    Get-Content "storage\logs\laravel.log" -Tail 10 -ErrorAction SilentlyContinue
} else {
    Write-Host "   No logs found" -ForegroundColor Gray
}

Write-Host "`n=== End of Report ===`n" -ForegroundColor Green
