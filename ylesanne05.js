// Krõbin
// 23.10.2023
// Ülesanne 5

const temperatuur = 22; // Asenda temperatuur soovitud väärtusega
const kasutajanimi = "admin"; // Asenda kasutajanimi soovitud väärtusega
const piletitüüp = "sooduspilet"; // Asenda piletitüüp ("taispilet" või "sooduspilet")
const vanus = 30; // Asenda vanus soovitud väärtusega

// 1. Temperatuur
if (temperatuur > 25) {
    console.log("Väga kuum ilm!");
} else if (temperatuur >= 15 && temperatuur <= 25) {
    console.log("Mõnus temperatuur");
} else {
    console.log("Jahe ilm");
}

// 2. Kasutajanime kontroll
if (kasutajanimi === "admin") {
    console.log("Tere, administraator!");
} else {
    console.log("Tere, külaline!");
}

// 3. Ürituse piletite hind
if (piletitüüp === "taispilet") {
    if (vanus < 18) {
        console.log("Pileti hind: 10 eurot");
    } else if (vanus >= 18 && vanus <= 64) {
        console.log("Pileti hind: 20 eurot");
    } else {
        console.log("Pileti hind: 15 eurot");
    }
} else if (piletitüüp === "sooduspilet") {
    if (vanus < 18 || vanus >= 65) {
        console.log("Pileti hind: 8 eurot");
    } else if (vanus >= 18 && vanus <= 64) {
        console.log("Pileti hind: 15 eurot");
    } else {
        console.log("Sisestatud vanus ei sobi.");
    }
} else {
    console.log("Vigane piletitüüp. Kasuta 'taispilet' või 'sooduspilet'.");
}
