const temperatuur = Math.floor(Math.random() * 45) + 1; // Suvaline temperatuur

// 1. Temperatuur
if (temperatuur > 25) {
    console.log("Väga kuum ilm!");
} else if (temperatuur >= 15 && temperatuur <= 25) {
    console.log("Mõnus temperatuur");
} else {
    console.log("Jahe ilm");
}

// 2. Kasutajanime kontroll
const kasutajanimi = prompt("Sisesta kasutajanimi:");
if (kasutajanimi === "admin") {
    console.log("Tere, administraator!");
} else {
    console.log("Tere, külaline!");
}

// 3. Ürituse piletite hind
const piletitüüp = prompt("Sisesta piletitüüp ('täispilet' või 'sooduspilet'):");
const vanus = prompt("Sisesta vanus:");
if (piletitüüp === "täispilet") {
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
    console.log("Vigane piletitüüp. Kasuta 'täispilet' või 'sooduspilet'.");
}
