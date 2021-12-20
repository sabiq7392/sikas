const fs = require('fs');
const { resolve } = require('path');
// ASYNC
const fileReadCallback = (error, data) => error ? console.log('Gagal Membaca berkas') : console.log(data)
fs.readFile(resolve(__dirname, 'note.txt'), 'UTF-8', fileReadCallback);

// SYNC
const data = fs.readFileSync('note.txt', 'UTF-8')
console.log(data)