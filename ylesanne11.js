// Krõbin
// 23.10.2023
// Ülesanne 11

// Nimed ja emailid
const nimed = [
  "mari maasikas", "jaan jõesaar", "kristiina kukk", "margus mustikas",
  "jaak järve", "kadi kask", "Toomas Tamm", "Kadi Meri", "Leena Laas",
  "Madis Mets", "Hannes Hõbe", "Anu Allikas", "Kristjan Käär", "Eva Esimene",
  "Jüri Jõgi", "Liis Lepik", "Kalle Kask", "Tiina Teder", "Kaidi Koppel", "tiina Toom"
];

// Funktsioon nimede korrastamiseks
function koristaNimed(nimed) {
  return nimed.map(nimi => {
      const osad = nimi.split(" ");
      const eesnimi = osad[0][0].toUpperCase() + osad[0].slice(1);
      const perenimi = osad[1][0].toUpperCase() + osad[1].slice(1);
      const email = `${perenimi.toLowerCase()}@metshein.com`;
      return `${eesnimi} ${perenimi} - ${email}`;
  });
}

// Funktsioon nime otsimiseks ja täisnime kuvamiseks
function otsiNimiJaKuvaTäisnimi(nimed, otsitavNimi) {
  const leitudNimed = nimed.filter(nimi => nimi.toLowerCase().includes(otsitavNimi.toLowerCase()));
  if (leitudNimed.length === 0) {
      console.log(`Nime "${otsitavNimi}" ei leitud.`);
  } else {
      console.log("Leitud nimed:");
      for (const nimi of leitudNimed) {
          console.log(nimi);
      }
  }
}

// Nimede korrastamise funktsioon
const korrasNimed = koristaNimed(nimed);
console.log("Korrastatud nimed ja emailid:");
korrasNimed.forEach(nimi => console.log(nimi));

// Nime otsimine
otsiNimiJaKuvaTäisnimi(nimed, "jaan jõesaar");

// Sünniaeg ja vanus
const inimesteAndmed = [
  { nimi: "Mari Maasikas", isikukood: "38705123568" },
  { nimi: "Jaan Jõesaar", isikukood: "49811234567" },
  { nimi: "Kristiina Kukk", isikukood: "39203029876" },
  { nimi: "Margus Mustikas", isikukood: "49807010346" },
  { nimi: "Jaak Järve", isikukood: "39504234985" },
  { nimi: "Kadi Kask", isikukood: "39811136789" },
];

// Funktsioon sünniaja ja vanuse leidmiseks
function leiaSünniaegJaVanus(isikukood) {
  const sünniaeg = `19${isikukood.slice(1, 3)}-${isikukood.slice(3, 5)}-${isikukood.slice(5, 7)}`;
  const sünnikuupäev = new Date(sünniaeg);
  const täna = new Date();
  const vanusAastates = täna.getFullYear() - sünnikuupäev.getFullYear();
  return { sünniaeg, vanus: vanusAastates };
}

// Sünniaeg ja vanus inimeste andmete põhjal
console.log("Sünniaeg ja vanus:");
for (const inimene of inimesteAndmed) {
  const { sünniaeg, vanus } = leiaSünniaegJaVanus(inimene.isikukood);
  console.log(`${inimene.nimi} - Sünniaeg: ${sünniaeg}, Vanus: ${vanus} aastat`);
}

// Kaugushüppe tulemused
const opilased = [
  { nimi: "Anna", tulemused: [4.5, 4.8, 4.6] },
  { nimi: "Mart", tulemused: [5.2, 5.1, 5.4] },
  { nimi: "Kati", tulemused: [4.9, 5.0, 4.7] },
  { nimi: "Jaan", tulemused: [4.3, 4.6, 4.4] },
  { nimi: "Liis", tulemused: [5.0, 5.2, 5.1] },
  { nimi: "Peeter", tulemused: [5.5, 5.3, 5.4] },
  { nimi: "Eva", tulemused: [4.8, 4.9, 4.7] },
  { nimi: "Marten", tulemused: [4.7, 4.6, 4.8] },
  { nimi: "Kairi", tulemused: [5.1, 5.3, 5.0] },
  { nimi: "Rasmus", tulemused: [4.4, 4.5, 4.3] }
];

// Funktsioon parima ja keskmise tulemuse leidmiseks
function leiaParimJaKeskmineTulemus(tulemused) {
  const parim = Math.max(...tulemused);
  const keskmine = (tulemused.reduce((sum, tulemus) => sum + tulemus, 0) / tulemused.length).toFixed(2);
  return { parim, keskmine };
}

// Kuvage õpilase nimi, parim tulemus ja keskmine tulemus
console.log("Kaugushüppe tulemused:");
for (const õpilane of opilased) {
  const { nimi, tulemused } = õpilane;
  const { parim, keskmine } = leiaParimJaKeskmineTulemus(tulemused);
  console.log(`${nimi} - Parim: ${parim} m, Keskmine: ${keskmine} m`);
}