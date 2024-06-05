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
          <li><a href=".." class="satu">lokasi anda</a></li>
          <li><a href="" class="dua">maps</a></li>
          <li><a href="" class="tiga">login/sign</a></li>
          <li><img src="sampel2.jpg" alt="" /></li>
        </ul>
      </nav>
    </div>
    <script>
      const lokasiAndaLink = document.querySelector(".satu");
      lokasiAndaLink.textContent = "kembali";
    </script>
    <center>
      <table border="1">
        <tr>
          <th>login dengan email/nomer telpon</th>
        </tr>
        <tr>
          <td>
            <form action="login.php" method="POST">
              <input type="text" name="username" id="username" placeholder="Email/Nomer Telpon" required /> <br />
              <input class="sub" type="submit" value="Submit" />
            </form>
          </td>
        </tr>
      </table>
      <p>jika belum memiliki akun silakan register</p>
      <button><a href="sig_in.php">register</a></button>
    </center>
    <script src="script.js"></script>
  </body>
</html>
