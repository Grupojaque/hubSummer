express = require "express"
php = require("php-express")({binPath: '/usr/bin/php'})
body_parser = require "body-parser"

app = express()

app.use body_parser.json()

app.set "views", __dirname + "/views"
app.engine "php", php.engine
app.set "view engine", "php"

app.get "/", (request, response)->
        response.render "index"

app.listen 3030
