<?php
$user = Shell_exec('C:\Instaladores\KeePass-2.47\KPScript.exe "C:\Instaladores\KeePass-2.47\db.kdbx" -pw:"1" -c:GetEntryString -Field:UserName  -ref-Title:"google');
$pwd = Shell_exec('C:\Instaladores\KeePass-2.47\KPScript.exe "C:\Instaladores\KeePass-2.47\db.kdbx" -pw:"1" -c:GetEntryString -Field:Password  -ref-Title:"google');
function before($careacter, $inthat)
{
    return substr($inthat, 0, strpos($inthat, $careacter));
};
$Contraseña = before('OK', $pwd);
$Cuenta = before('OK', $user);

echo "Cuenta: $Cuenta, Contraeña:$Contraseña";
