// Krõbin
// 23.10.2023
// Ülesanne 6

const sisestatudNumber = prompt("Sisesta number:"); // kasutaja sisend

// Konverteerime sisestatud sisendi stringist arvuks
const num = parseInt(sisestatudNumber);

// Kontrollime, kas sisestatud sisend on number
if (isNaN(num)) {
    console.log("Palun sisesta korrektne number.");
} else {
    switch (true) {
        case num > 0:
            console.log("Sisestatud number on positiivne.");
            break;
        case num < 0:
            console.log("Sisestatud number on negatiivne.");
            break;
        case num === 0:
            console.log("Sisestatud number on null.");
            break;
        default:
            console.log("Midagi läks valesti.");
    }
}

const broneeringuArv = prompt("Sisesta broneeringu arv:"); // kasutaja sisend

switch (true) {
    case broneeringuArv <= 2:
        console.log("Valige laud kahele inimesele.");
        break;
    case broneeringuArv <= 4:
        console.log("Valige laud neljale inimesele.");
        break;
    case broneeringuArv <= 6:
        console.log("Valige laud kuuele inimesele.");
        break;
    default:
        console.log("Valige suur laud.");
}
