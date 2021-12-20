// console.log('Halo, kita akan belajar membuat server')
const http = require('http');

const requestListener = (request, response) => {
  response.setHeader('Content-Type', 'application/json');
  response.setHeader('X-Powered-By', 'NodeJS');
  // response.setHeader('Content-Type', 'text/html')

  response.statusCode = 200;

  const { url, method } = request;

  switch (url) {
    case '/':
      if (method === 'GET') {
        response.statusCode = 200;
        // response.end('<h1>Ini adalah Homepage</h1>');
        response.end(JSON.stringify({
          message: 'Ini adalah Homepage',
        }));

      } else {
        response.statusCode = 404;
        // response.end(`<h1>Halaman tidak dapat diakses dengan ${method}</h1>`);
        response.end(JSON.stringify({
          message: `Halaman tidak dapat diakses dengan ${method} request`,
        }));
      }
      break;

    case '/about': 
      if (method === 'GET') {
        response.statusCode = 200;
        // response.end('<h1>Halo! ini adalah halaman about</h1>');
        response.end(JSON.stringify({
          message: 'Halo! ini adalah halaman about',
        }));

      } else if (method === 'POST') {
        let body = [];

        request.on('data', chunk => body.push(chunk));

        request.on('end', () => {
          body = Buffer.concat(body).toString();
          const { name } = JSON.parse(body);

          response.statusCode = 200;
          // response.end(`<h1>Halo, ${name}! ini adalah halaman about</h1>`);
          response.end(JSON.stringify({
            message: `Halo ${name}! ini adalah halaman about`,
          }));
        });
        
      } else  {
        response.statusCode = 404;
        // response.end(`<h1>Halaman tidak dapat diakses dengan ${method} request</h1>`)
        response.end(JSON.stringify({
          message: `Halaman tidak dapat diakses dengan ${method}, request`,
        }));
      }
      break;

    default:
      response.statusCode = 404;
      // method === 'DELETE' ? response.end('<h1>Halaman tidak ditemukan</h1>') : false;
      response.end(JSON.stringify({
        message: 'Halaman tidak ditemukan!',
      }));
      break;
  } 
};

const server = http.createServer(requestListener);

const port = 5000;
const host = 'localhost';
server.listen(port, host, () => {
  console.log(`Server berjalan pada https://${host}:${port}`)
});

