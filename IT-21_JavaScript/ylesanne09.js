// Krõbin
// 23.10.2023
// Ülesanne 9


// 1. Erinevad funktsioonid
function klassikaline() {
  console.log("Krõbin");
}
const noolefunktsioon = () => {
  console.log("Krõbin");
};

// 2. Argumendiga funktsioon
function kuupaevEesti(kuupaevaString) {
  const kuupaev = new Date(kuupaevaString.replace(/(\d{2}).(\d{2}).(\d{2})/, '20$3-$2-$1'));
  const kuudEesti = [
      "jaanuar", "veebruar", "märts", "aprill", "mai", "juuni",
      "juuli", "august", "september", "oktoober", "november", "detsember"
  ];

  const paev = kuupaev.getDate();
  const kuu = kuudEesti[kuupaev.getMonth()];
  const aasta = kuupaev.getFullYear();

  console.log(`Praegune kuupäev ja kuu eesti keeles: ${paev}. ${kuu} ${aasta}`);
}

// 3. Teadmata hulk
function koguKeskmine() {
  let arvudeSumma = 0;
  let arvudeArv = 0;

  while (true) {
      const sisend = prompt("Sisesta täisarvud (lõpetamiseks sisesta mõni muu väärtus):");
      
      if (sisend === null || isNaN(parseInt(sisend))) {
          break;
      }

      const arv = parseInt(sisend);
      arvudeSumma += arv;
      arvudeArv++;
  }

  if (arvudeArv > 0) {
      const keskmine = arvudeSumma / arvudeArv;
      console.log(`Täisarvude koguarv: ${arvudeArv}`);
      console.log(`Täisarvude keskmine: ${keskmine}`);
      return { koguarv: arvudeArv, keskmine: keskmine };
  } else {
      console.log("Ühtegi täisarvu ei sisestatud.");
      return null;
  }

}
  
// 4. Salajane sõnum
  const salajaneSonum = (sonum) => {
    const taishaalikud = "AEIOUaeiou";
    for (let i = 0; i < sonum.length; i++) {
      if (taishaalikud.includes(sonum[i])) {
        sonum = sonum.substr(0, i) + '*' + sonum.substr(i + 1);
      }
    }
    return sonum;
  }
  
// 5. Unikaalsed nimed
const leiaUnikaalsedNimed = (nimed) => {
  const tulemus = [];

  for (const nimi of nimed) {
      if (!tulemus.includes(nimi)) {
          tulemus.push(nimi);
      }
  }

  return tulemus;
};
  
klassikaline();
noolefunktsioon();
kuupaevEesti("19.07.23");
const tulemus = koguKeskmine();
console.log(salajaneSonum("Tere maailm!"));
const nimed = ["Kati", "Mati", "Kati", "Mari", "Mati", "Jüri"];
const unikaalsedNimed = leiaUnikaalsedNimed(nimed);
console.log(unikaalsedNimed);