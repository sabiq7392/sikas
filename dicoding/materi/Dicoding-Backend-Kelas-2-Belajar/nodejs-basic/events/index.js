// TODO 1
const { EventEmitter } = require('events');

const birthdayEventListener = (name) => {
  console.log(`Happy birthday ${name}!`);
}

// TODO 2
const eventEmitter = new EventEmitter();

// TODO 3
eventEmitter.on('birthday', birthdayEventListener);
eventEmitter.emit('birthday', 'Sabiq');
// TODO 4