// Krõbin
// 23.10.2023
// Ülesanne 10

// 1. Toote objekt
const toode = {
  nimetus: 'Piim',
  hind: 3.60,
  kogus: 2,
  koguhind: function () {
      return this.hind * this.kogus;
  },
  muudaKogust: function (uusKogus) {
      this.kogus = uusKogus;
  },
  kuvaInfo: function () {
      console.log(`${this.nimetus} - ${this.hind} EUR - Kogus: ${this.kogus}`);
  }
};

console.log("Toote omadused:");
console.log("Nimetus: " + toode.nimetus);
console.log("Hind: " + toode.hind + " EUR");
console.log("Kogus: " + toode.kogus);

console.log("Koguhind: " + toode.koguhind() + " EUR");

toode.muudaKogust(4);
console.log("Uus kogus: " + toode.kogus);

toode.kuvaInfo();

// 2. Ostukorvi objekt
const ostukorv = {
  tooted: [
      { nimi: 'Piim', hind: 3.60, kogus: 2 },
      { nimi: 'Leib', hind: 2.00, kogus: 1 },
      { nimi: 'Munad', hind: 1.50, kogus: 6 },
      { nimi: 'Juust', hind: 4.20, kogus: 1 },
      { nimi: 'Tomatid', hind: 2.30, kogus: 3 }
  ],
  kuvaSisu: function () {
      for (const toode of this.tooted) {
          console.log(`${toode.nimi} - ${toode.hind} EUR - Kogus: ${toode.kogus}`);
      }
  },
  lisaToode: function (nimi, hind, kogus) {
      this.tooted.push({ nimi, hind, kogus });
  },
  koguSumma: function () {
      let summa = 0;
      for (const toode of this.tooted) {
          summa += toode.hind * toode.kogus;
      }
      return summa.toFixed(2);
  }
};

console.log("Ostukorvi sisu:");
ostukorv.kuvaSisu();

ostukorv.lisaToode('Kohv', 5.80, 2);
console.log("Ostukorvi sisu pärast kohvi lisamist:");
ostukorv.kuvaSisu();

console.log('Ostukorvi kogu summa:', ostukorv.koguSumma() + " EUR");