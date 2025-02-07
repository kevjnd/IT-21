// Krõbin
// 23.10.2023
// Ülesanne 2

// Kellaaeg
var tunnid = 2;
var minutid = 38;
var sekundid = 59;
var aeg = `${tunnid}:${minutid}:${sekundid}PM`;
console.log(aeg);

// Tsitaat lause sees
var tsitaat = 'Elu on nagu jalgrattasõit. Et säilitada tasakaalu, pead liikuma.';
var autor = 'Albert Einstein';
var tsitaadiString = `"${tsitaat}" - ${autor}`;
console.log(tsitaadiString);

// Mallide kasutamine
var eesnimi = 'Jüri';
var perenimi = 'Jurakas';
var nimetähed = `${eesnimi[0]}.${perenimi[0]}.`;
console.log(`${eesnimi} ${perenimi} nimetähed on ${nimetähed}`);

// Perenime pikkus
var täisnimi = 'Jurakas, Jüri';
var komaIndeks = täisnimi.indexOf(',');
var perenimiAlatesKoma = täisnimi.substring(0, komaIndeks);
var perenimiSuurtähtedeks = perenimiAlatesKoma.toUpperCase();
console.log(perenimiSuurtähtedeks);
console.log(perenimiSuurtähtedeks.length);

// E-posti aadressi muutmine
let epost = "karrolk@netlog.com";
var uusEpost = epost.replace("netlog", "gmail");
console.log(uusEpost);

// Andmerida analüüs
var andmerida = "1,Marshal,Martinovic,mmartinovic0@dedecms.com,Male,40.19.226.175";
var andmed = andmerida.split(",");
var email = andmed[3];
var ipAadress = andmed[5];
console.log(ipAadress + " ja " + email.split('@')[0]);
