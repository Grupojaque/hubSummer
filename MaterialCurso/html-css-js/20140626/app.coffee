express = require 'express'
app = express()

port = 1111

app.use express.static(__dirname + '/html')

console.log 'Escuchando en el puerto ' + port
app.listen port
