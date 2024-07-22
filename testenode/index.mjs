import testeArray from "./testearray.mjs";
import testevariaveis from "./testevariaveis.mjs";
import testeFetch from "./testefetch.mjs";

// server.mjs
import { createServer } from 'node:http';

const server = createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('#VOLTA LUANA!\n');
});

// starts a simple http server locally on port 3000
server.listen(3000, '127.0.0.1', () => {
  console.log('Listening on 127.0.0.1:3000');
});

// run with `node server.mjs`

// testevariaveis();
// testeArray();
//testeFetch();