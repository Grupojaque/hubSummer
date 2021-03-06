// Generated by CoffeeScript 1.6.3
var body_parser, express, redis, redis_client, servidor;

express = require("express");

body_parser = require("body-parser");

redis = require("redis");

redis_client = redis.createClient();

servidor = express();

servidor.use(body_parser.json());

servidor.use(function(request, response, next) {
  response.set("Access-Control-Allow-Origin", "*");
  response.set("Access-Control-Allow-Headers", "Content-Type, X-Requested-With, Accept");
  return next();
});

servidor.get("/redis/get/:facebook_id", function(request, response) {
  return redis_client.get("" + request.params.facebook_id, function(err, valor) {
    return response.send(valor === null ? "10" : valor);
  });
});

servidor.post("/redis/set", function(request, response) {
  return redis_client.set("" + request.body.llave, "" + request.body.valor, function(err, algo) {
    return response.end();
  });
});

servidor.listen(1992);
