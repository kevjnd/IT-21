# Laadi Active Directory moodul
Import-Module ActiveDirectory

# CSV failide asukohad
$LogimataKontodeFail = "C:\Raportid\LogimataKontod.csv"
$lukustatudKontodeFail = "C:\Raportid\LukustatudKontod.csv"

# Kontod, mis pole kunagi AD domeeni loginud
$LogimataKontod = Get-ADUser -Filter {LastLogonDate -notlike "*"} -Properties LastLogonDate | 
    Select-Object SamAccountName, Name, LastLogonDate

# Salvesta tulemus CSV faili
$LogimataKontod | Export-Csv -Path $LogimataKontodeFail -NoTypeInformation

# Kontod, mis on lukustatud
$lukustatudKontod = Search-ADAccount -LockedOut | 
    Select-Object SamAccountName, Name

# Salvesta tulemus CSV faili
$lukustatudKontod | Export-Csv -Path $lukustatudKontodeFail -NoTypeInformation

Write-Output "Raportid on loodud ja salvestatud asukohta C:\Raportid"

# Laadi DHCP Serveri moodul
Import-Module DhcpServer

# Määra väljund CSV faili asukoht
$dhcpRendidFail = "C:\Raportid\AktiivsedDhcpRendid.csv"

# Hangi kõik aktiivsed DHCP rentimised vahemikust 10.0.11.0
$aktiivsedRendid = Get-DhcpServerv4Lease -ScopeId 10.0.11.0 | 
    Select-Object ClientId, IPAddress

# Salvesta tulemus CSV faili
$aktiivsedRendid | Export-Csv -Path $dhcpRendidFail -NoTypeInformation

Write-Output "DHCP rendi raport on loodud ja salvestatud asukohta C:\Raportid"