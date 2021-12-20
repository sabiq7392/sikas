const routes = [
  {
    method: 'GET',
    path: '/',
    handler: (request, h) => {
      return h.response('Ini adalah halaman Home Page')
        .code(200)
        .type('text/plain')
        .header('X-Powered-By', 'NodeJS');
    }
  },
  {
    method: '*',
    path: '/',
    handler: (request, h) => {
      return h.response('Halaman tidak dapat diakses dengan method tersebut')
        .code(404)
        .type('text/plain')
        .header('X-Powered-By', 'NodeJS');
    }
  },
  {
    method: 'GET',
    path: '/about',
    handler: (request, h) => {
      return h.response('About Page')
        .code(200)
        .type('text/plain')
        .header('X-Powered-By', 'NodeJS');
    }
  },
  {
    method: '*',
    path: '/about',
    handler: (request, h) => {
      return h.response('Halaman tidak dapat diakses dengan method tersebut')
        .code(404)
        .type('text/plain')
        .header('X-Powered-By', 'NodeJS');
    }
  },
  {
    method: '*',
    path: '/{any*}',
    handler: (request, h) => {
      return h.response('Halaman tidak ditemukan')
        .code(404)
        .type('text/plain')
        .header('X-Powered-By', 'NodeJS');
    }
  },
  {
    method: 'GET',
    path: '/hello/{name?}',
    handler: (request, h) => {
      const { name = 'Stranger' } = request.params;
      const { lang } = request.query;

      // lang === 'id' ? `Hai, ${name}!` : `Hello, ${name}!`;
      if (lang === 'id') {
        return h.response(`Hai, ${name}!`)
          .code(200)
          .type('text/plain')
          .header('X-Powered-By', 'NodeJS');
        // http://localhost:5000/hello/dicoding?lang=id
      }

      return h.response(`Hello, ${name}!`)
          .code(200)
          .type('text/plain')
          .header('X-Powered-By', 'NodeJS');
      // http://localhost:5000/hello/dicoding
    } 
    // DO curl -X GET http://localhost:5000/hello
    // NOT curl -X GET http://localhost:5000/hello/
  }
];

module.exports = routes;