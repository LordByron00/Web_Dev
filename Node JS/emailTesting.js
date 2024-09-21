var nodeMailer = require('nodemailer');


var transporter = nodeMailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'jbayron76@gmail.com',
      pass: 'xucd ymoy fkut neta'
    }
  });
  
  var mailOptions = {
    from: 'jbayron76@gmail.com',
    to: 'justbayr@gmail.com, j.bayron.538021@umindanao.edu.ph',
    subject: 'Sending Email using Node.js',
    text: 'That was easy!'
  };
  
  transporter.sendMail(mailOptions, function(error, info){
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent: ' + info.response);
    }
  });