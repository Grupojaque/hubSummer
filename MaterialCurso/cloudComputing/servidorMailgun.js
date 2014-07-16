var express=require('express');
app=express();

var api_key = 'key-5wds68amszmbnm6h98xmx3m0q5f0i576';
var domain = 'sandbox6f1d638aab7c41bcaec841ef13e17bdd.mailgun.org';
var mailgun = require('mailgun-js')(api_key,domain);

app.post('/mailgun', 
        function(request, response) 
        {
                mailgun.messages.send(request.body, 
                        function(error, response_mailgun, body) 
                        {
                                console.log(request.body);
                                console.log(error);
                                response.writeHead(200, {
                                        'Content-Type': 'text/plain',
                                        'Access-Control-Allow-Origin': '*' 
                                });
                                response.end('Mensaje enviado.');
                        });
        });

app.listen(9000);
console.log('Escuchando en el puerto 9000');
