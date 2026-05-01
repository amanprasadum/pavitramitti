<!DOCTYPE html>
<html>
<head>
  <title>Web3Forms Test</title>
</head>
<body>

  <h2>Test Contact Form</h2>

  <form action="https://api.web3forms.com/submit" method="POST">

    <input type="hidden" name="access_key" value="cf185d87-1b86-4377-88d6-6ff2e0fce031">

    <input type="text" name="name" placeholder="Name" required><br><br>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <textarea name="message" placeholder="Message" required></textarea><br><br>

    <button type="submit">Send</button>

  </form>

</body>
</html>