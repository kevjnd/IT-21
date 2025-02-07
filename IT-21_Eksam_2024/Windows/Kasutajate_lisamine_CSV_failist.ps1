# Muudame skripti käivitamise poliitika lubavaks
Set-ExecutionPolicy Unrestricted -Scope Process -Force

# Loo vajalikud OU-d, kui neid veel ei ole
$OUList = @("Juhtkond", "Myyk", "Personal", "Toimetajad", "Haldus", "IT")
$domain = "DC=oige,DC=ee"

foreach ($OU in $OUList) {
    $OUPath = "OU=$OU,$domain"
    try {
        if (-not (Get-ADOrganizationalUnit -Filter "DistinguishedName -eq '$OUPath'" -ErrorAction Stop)) {
            New-ADOrganizationalUnit -Name $OU -Path $domain
            Write-Output "OU '$OU' on loodud"
        } else {
            Write-Output "OU '$OU' on juba loodud"
        }
    } catch {
        Write-Output "OU '$OU' loomine ebaõnnestus: $_"
    }
}

# Lae kasutaja andmed CSV failist
$users = Import-Csv -Path "C:\kasutajad.csv"

# Lisa kasutajad vastavalt nende osakonnale
foreach ($user in $users) {
    $givenName = $user.Eesnimi
    $surname = $user.Perekonnanimi
    $department = $user.Osakond
    $ouPath = "OU=$department,$domain"
    
    # Kontrolli, kas OU on olemas
    if (Get-ADOrganizationalUnit -Filter "DistinguishedName -eq '$ouPath'" -ErrorAction SilentlyContinue) {
        $samAccountName = ($givenName.Substring(0,1) + $surname).ToLower()
        $userPrincipalName = "$samAccountName@oige.ee"
        
        # Kontrolli, kas kasutaja juba eksisteerib
        if (-not (Get-ADUser -Filter "SamAccountName -eq '$samAccountName'" -ErrorAction SilentlyContinue)) {
            try {
                # Loo uus kasutaja
                New-ADUser -Name "$givenName $surname" -GivenName $givenName -Surname $surname -SamAccountName $samAccountName `
                           -UserPrincipalName $userPrincipalName -Path $ouPath -AccountPassword (ConvertTo-SecureString "P@ssw0rd!" -AsPlainText -Force) `
                           -Enabled $true
                Write-Output "Kasutaja $givenName $surname lisatud OU-sse $department"
            } catch {
                Write-Output "Kasutaja $givenName $surname lisamine ebaõnnestus: $_"
            }
        } else {
            Write-Output "Kasutaja $givenName $surname juba eksisteerib"
        }
    } else {
        Write-Output "OU '$department' ei leitud kasutaja $givenName $surname jaoks"
    }
}