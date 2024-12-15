
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Email Template</title>
    <style>
        /* Reset styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }
        /* Container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        /* Header */
        .header {
            background-color: #f2f2f2;
            padding: 10px 0;
            text-align: center;
        }
        /* Content */
        .content {
            padding: 20px 0;
            text-align: center;
        }
        /* Footer */
        .footer {
            background-color: #f2f2f2;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Your Company</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>This is a sample HTML email template. You can customize it with your own content and styles.</p>
            <p>Regards,<br>Your Name</p>
            <a href="mailto:jbayron76@gmail.com?subject=Hello%20from%20HTML&body=Hello,%0D%0A%0D%0AThis%20is%20an%20example%20email%20sent%20from%20HTML.%0D%0A%0D%0ABest%20regards,">Send Email</a>
            <h2>Send Email</h2>
            <form action="send_email.php" method="post">
                <label for="recipient">Recipient Email:</label><br>
                <input type="email" id="recipient" name="recipient" required><br>
                <label for="subject">Subject:</label><br>
                <input type="text" id="subject" name="subject" required><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                <button type="submit">Send Email</button>
            </form>
        </div>
        
        <div class="footer">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
