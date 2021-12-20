// TODO 1
class ValidationError extends Error {
  constructor(message) {
    super(message);
    this.name = "ValidationError";
  }
}
// TODO 2
const validateNumberInput = (a, b, c) => {
  if (typeof a !== 'number') { 
    throw new ValidationError('Argumen pertama harus number') 
  }
    
  if (typeof b !== 'number') {
    throw new ValidationError('Argumen kedua harus number')
  }
  
  if (typeof c !== 'number') {
    throw new ValidationError('Argumen ketiga harus number')
  }
}

const detectTriangle = (a, b ,c) => {
  try {
    if (validateNumberInput(a,b,c)) {
      throw new ValidationError();
    }

    if (a === b && b === c) {
      return 'Segitiga sama sisi';
    }
  
    if (a === b || a === c || b === c) {
      return 'Segitiga sama kaki';
    }
  
    return 'Segitiga sembarang';

  } catch(error) {
    return error.message;
  }
}

console.log(detectTriangle(10, 10, "10"))

// node errorHandling_test.js
















const coba = () => {
  // TODO 3
  let json = '{ "age": 20 }';

  try {
    let user = JSON.parse(json);

    if (!user.name) {
        throw new ValidationError();
    }
    console.log(user.name); // undefined
    console.log(user.age);  // 20

  } catch (error) {
    console.log(`COBA ::: JSON Error: ${error.name}`);
  }
  // return 'Segitiga sembarang';
};

coba()



