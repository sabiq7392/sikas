const fs = require('fs')

const readableStream = fs.createReadStream('../file-system/note.txt', {
  highWaterMark: 10
});

readableStream.on('readable', () => {
  try {
      process.stdout.write(`[${readableStream.read()}]`);
  } catch(error) {
      // catch the error when the chunk cannot be read.
      console.log(error)
  }
});

readableStream.on('end', () => {
  console.log('Done');
});