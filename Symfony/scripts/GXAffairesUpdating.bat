sqlcmd -h-1 -S SRV-NOX35-APPLI\EVERWIN -d NOX -U NOXGXreader -P NOX35GXreader -s; -W -i %~d0\wamp\www\Symfony\scripts\SQL\getAffaires.sql > %~d0\wamp\www\Symfony\web\DatabasesCSV\Affaires.csv
cmd.exe /a /c TYPE %~d0\wamp\www\Symfony\web\DatabasesCSV\Affaires.csv > %~d0\wamp\www\Symfony\web\DatabasesCSV\AffairesEncode.csv
