// Krõbin
// 23.10.2023
// Ülesanne 6

const broneeringuArv = 4; // Asenda broneeringu arv soovitud väärtusega

switch (broneeringuArv) {
    case 1:
    case 2:
        console.log("Valige laud kahele inimesele.");
        break;
    case 3:
    case 4:
        console.log("Valige laud neljale inimesele.");
        break;
    case 5:
    case 6:
        console.log("Valige laud kuuele inimesele.");
        break;
    default:
        console.log("Valige suur laud.");
}