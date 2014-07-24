express = require "express"
body_parser = require "body-parser"
redis = require "redis"
redis_client = redis.createClient()

servidor = express()

servidor.use body_parser.json()
servidor.use (request, response, next) ->
        response.set "Access-Control-Allow-Origin", "*"
        response.set "Access-Control-Allow-Headers", "Content-Type, X-Requested-With, Accept"
        next()

servidor.get "/redis/get/:facebook_id", (request, response) ->
        redis_client.get "#{request.params.facebook_id}", (err, valor) ->
                response.send if valor is null then "10" else valor

servidor.post "/redis/set", (request, response)->
        redis_client.set "#{request.body.llave}", "#{request.body.valor}", (err, algo) ->
                response.end()

servidor.listen 1992
