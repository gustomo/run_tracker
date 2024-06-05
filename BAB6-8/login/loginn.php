<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <nav class="wrapper">
        <div class="brand">
          <div class="firstname">run</div>
          <div class="lastname">tracker</div>
        </div>
        <ul class="nav">
          <li><a href=".." class="satu">home</a></li>
          <li><a href="../crud2/awal.php" class="dua">admin</a></li>
          <li><a href="" class="tiga">login/sign</a></li>
          <li><img src="sampel2.jpg" alt="" /></li>
        </ul>
      </nav>
    </div>
    <script>
      const lokasiAndaLink = document.querySelector(".satu");
      lokasiAndaLink.textContent = "kembali";
    </script>
    
    <table border="1">
      <tr>
        <th>login dengan email/nomer telpon</th>
      </tr>
      <tr>
        <td>
          <form action="login.php" method="POST">
            <input type="text" name="username" id="username" placeholder="username" required /> <br />
            <input type="text" name="pasword" id="upasword" placeholder="masukan pasword" required /> <br />
            <input class="sub" type="submit" value="Submit" />
          </form>
        </td>
      </tr>
    </table>
    
    <button><a href="../registrasi/sig_in.php">register</a></button>
    
    <script src="../script.js"></script>
  </body>
</html>
