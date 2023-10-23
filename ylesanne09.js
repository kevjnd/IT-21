// Krõbin
// 23.10.2023
// Ülesanne 9

function minuNimi() {
    return "Sinu Nimi (Klassikaline)";
  }
  
  const minuNimiNool = () => "Sinu Nimi (Noolefunktsioon)";
  
  function kuupaevEesti(kuupaev) {
    const date = new Date(kuupaev);
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('et-EE', options);
  }
  
  function arvudeKogusummaKeskmine(...arvud) {
    const kogusumma = arvud.reduce((sum, arv) => sum + arv, 0);
    const keskmine = kogusumma / arvud.length;
    return { kogusumma, keskmine };
  }
  
  const salajaneSonum = (sonum) => {
    const taishaalikud = "AEIOUaeiou";
    for (let i = 0; i < sonum.length; i++) {
      if (taishaalikud.includes(sonum[i])) {
        sonum = sonum.substr(0, i) + '*' + sonum.substr(i + 1);
      }
    }
    return sonum;
  }
  
  const leiaUnikaalsedNimed = (nimedeMassiiv) => {
    const unikaalsedNimed = [];
    for (const nimi of nimedeMassiiv) {
      if (!unikaalsedNimed.includes(nimi)) {
        unikaalsedNimed.push(nimi);
      }
    }
    return unikaalsedNimed;
  }
  
  console.log(minuNimi());
  console.log(minuNimiNool());
  console.log(kuupaevEesti("19.07.23"));
  console.log(arvudeKogusummaKeskmine(5, 10, 15));
  console.log(salajaneSonum("Tere tulemast"));
  const nimed = ["Kati", "Mati", "Kati", "Mari", "Mati", "Jüri"];
  console.log(leiaUnikaalsedNimed(nimed));
  