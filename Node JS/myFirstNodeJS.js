var http = require('http');
var dt = require('./date')
var url = require('url');



http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
//   res.write("The current date is : " + dt.myDateTime());
//   res.write(req.url);
  var q = url.parse(req.url, true).query;
  var txt = q.year + " " + q.month + " " + q.day;
  res.end(txt);
}).listen(8080);