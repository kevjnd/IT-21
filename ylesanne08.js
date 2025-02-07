// Krõbin
// 23.10.2023
// Ülesanne 8

// 1. Mündid
const coins = [200, 0.2, 10, 0.01, 2, 1, 0.1, 0.02, 0.05, 100, 5, 0.5, 50, 20];
const sortedCoins = [];
let totalCoins = 0;
let totalAmount = 0;

while (coins.length > 0) {
  const coin = coins.pop();
  if (coin >= 1) {
    totalCoins += 1;
    totalAmount += coin;
  } else {
    let remainingAmount = coin;
    const smallerCoins = [0.5, 0.2, 0.1, 0.05, 0.02, 0.01];
    for (let i = 0; i < smallerCoins.length; i++) {
      if (remainingAmount >= smallerCoins[i]) {
        const count = Math.floor(remainingAmount / smallerCoins[i]);
        remainingAmount -= count * smallerCoins[i];
        totalCoins += count;
        totalAmount += count * smallerCoins[i];
      }
    }
  }
  sortedCoins.push(coin);
}

console.log("Sorteeritud mündid: " + sortedCoins.join(", "));
console.log("Müntide arv: " + totalCoins);
console.log("Müntide kogusumma: " + totalAmount);
