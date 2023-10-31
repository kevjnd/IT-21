// Krõbin
// 31.10.2023
// Ülesanne 13

// Eemalda id
const element = document.getElementById("eemaldaID");
element.removeAttribute("id");

// Lisa atribuut väärtuseks oma nimi
element.setAttribute("attr", "MinuNimi");

// Kuva atribuudi väärtus konsoolis
const attrValue = element.getAttribute("attr");
console.log("Atribuudi väärtus: " + attrValue);

// Käi läbi kõik card elemendid ja asenda card-title ja card-text väärtused
const cardElements = document.querySelectorAll(".card");
cardElements.forEach((card) => {
    const title = card.querySelector(".card-title");
    const description = card.querySelector(".card-text");
    
    const dataTitle = card.querySelector("img").getAttribute("data-title");
    const dataDescription = card.querySelector("img").getAttribute("data-description");
    
    title.textContent = dataTitle;
    description.textContent = dataDescription;
});