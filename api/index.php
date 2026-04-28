$phpContent = @'
<?php
echo "<html><body style='font-family:sans-serif; text-align:center; padding-top:50px;'>";
echo "<div style='display:inline-block; padding:20px; border:2px solid #4f46e5; border-radius:10px;'>";
echo "<h1 style='color:#4f46e5;'>🚀 Sufiitrq1 DevOps Project Live!</h1>";
echo "<p style='color:#333;'><strong>Status:</strong> System Operational</p>";
echo "<hr>";
echo "<p style='font-size:0.8rem; color:#666;'>Built with GitHub Actions & Vercel</p>";
echo "</div></body></html>";
?>
'@
[System.IO.File]::WriteAllText("$(Get-Location)/public/index.php", $phpContent, (New-Object System.Text.UTF8Encoding($false)))