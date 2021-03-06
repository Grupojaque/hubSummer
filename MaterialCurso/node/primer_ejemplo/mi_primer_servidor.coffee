# 1. Importar modulos y crear el servidor
express = require "express"
body_parser = require "body-parser"
servidor = express()

# 2. Configuracion
servidor.use body_parser.json()
servidor.use express.static(__dirname)

# 3. Rutas
# 2 tipos de rutas: GET y POST (PUT, DELETE, OPTIONS, etc..)
servidor.get "/hola/mundo", (request, response) ->
        console.log request.get("user-agent")
        response.set "Content-Type", "text/plain"
        response.status 200
        response.send "Hola :)"

servidor.get "/index/chafa", (request, response) ->
        response.set "Content-Type", "text/html"
        response.status 200
        response.send "<section><article><p style='font-weight:bold;font-size:40px;'>Hola super mundo</p></article><article><a href='/index'>click</a></section>"

servidor.get "/index", (request, response) ->
        response.set "Content-Type", "text/html"
        response.status 200
        response.sendfile "index.html"

servidor.get "*", (request, response) ->
        response.set "Content-Type", "text/plain"
        response.status 404
        response.send "NOT FOUND"

# 4. Puerto
servidor.listen 3030

console.log "Escuchando puerto 3030"
