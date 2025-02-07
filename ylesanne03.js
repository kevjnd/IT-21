// Krõbin
// 23.10.2023
// Ülesanne 3

// Sõidu aeg ja kaugus
var kaugus = 100; // kilomeetrites
var kiirus = 60; // kilomeetrites tunnis
var sõiduAeg = kaugus / kiirus;
console.log("Sõidu aeg (tundides): " + sõiduAeg);

// Postituste kuvamine
var postitusteKoguarv = 137;
var postitusteLehekülgedeArv = Math.ceil(postitusteKoguarv / 10);
var viimaseLeheküljePostitusteArv = postitusteKoguarv % 10;
console.log("Lehekülgede arv: " + postitusteLehekülgedeArv);
console.log("Viimase lehekülje postituste arv: " + viimaseLeheküljePostitusteArv);

// Serveri töökulu
var võimsusWattides = 400; // W
var elektriHindSentides = 9.69; // senti/kWh
var serveriTöökulu = (võimsusWattides / 1000) * (elektriHindSentides / 100); // kWh * eurod/kWh = eurod
console.log("Serveri töökulu ühe tunni jooksul eurodes: " + serveriTöökulu.toFixed(2) + " eurot");
