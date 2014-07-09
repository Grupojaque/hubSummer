express = require 'express'
app = express()

port = 8080

app.use express.static(__dirname + '/html')
app.use "/css", express.static(__dirname + "/html/css")

app.get "/", (request, response) ->
		response.sendfile "index.html", {root: __dirname + "/html"}

app.get "/index", (request, response) ->
		response.sendfile "index.html", {root: __dirname + "/html"}

app.get "/kiero", (request, response) ->
	response.sendfile "index2.html", {root: __dirname + "/html"}

console.log 'Escuchando en el puerto ' + 8080

app.listen port