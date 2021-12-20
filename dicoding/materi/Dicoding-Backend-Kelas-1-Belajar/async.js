// const orderCoffee = callback => {
//   let coffee = null;
//   console.log("Sedang membuat kopi, silakan tunggu...");
//   setTimeout(() => {
//       coffee = "Kopi sudah jadi!";
//       callback(coffee);
//   }, 3000);
// }

// orderCoffee(coffeez => {
//   console.log(coffeez)
// })

// ============================= 

const ambilKopi = () => {
  return 'lagi ambil kopinya'
}

const buatKopi = (callback) => {
  let kopi = null
  setTimeout(() => {
    kopi = ambilKopi()
    callback(kopi)
  }, 2000)
}

buatKopi(kopi => {
  console.log(kopi)
})

// =================================== 

const getCoffee = async () => {
  return 'ngopi'
}

async function makeCoffee() {
  try {
      const coffee = await getCoffee();
      console.log(coffee);
  } catch(error) {
    console.log(error)
  }
}

makeCoffee()


