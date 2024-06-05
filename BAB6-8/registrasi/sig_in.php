<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Run Tracker - Register</title>
  <link rel="stylesheet" href="../crud/style.css">
  <style>
    /* Tambahan CSS untuk responsif */
    @media only screen and (max-width: 600px) {
      .container {
        padding: 0;
      }
      .wrapper {
        flex-direction: column;
      }
      .nav {
        flex-direction: column;
      }
      .registration-form {
        width: 100%;
      }
    }

    
  </style>
</head>
<body>
  <div class="container">
    <nav class="wrapper">
      <div class="brand">
        <div class="firstname">run</div>
        <div class="lastname">tracker</div>
      </div>
      <ul class="nav">
        <li><a href=".." class="satu">Lokasi anda</a></li>
        <li><a href="" class="dua">Maps</a></li>
        <li><a href="" class="tiga">Login/Sign</a></li>
        <li><img src="sampel2.jpg" alt=""></li>
      </ul>
    </nav>
  </div>

  <div class="registration-container">
    <div class="registration-form">
      <h2>Register</h2>
      <form id="user-registration-form" action="register.php" method="POST">
        <table>
          <tr class="header-row">
            <th>Email/Phone Number</th>
            <th>Nama</th>
            <th>password</th>
            <th>Umur</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Domisili</th>
          </tr>
          <tr class="input-row">
            <td><input type="text" id="email_phone" name="email_phone" required></td>
            <td><input type="text" id="name" name="name" required></td>
            <td><input type="text" id="pasword" name="pasword" required></td>
            <td><input type="number" id="age" name="age" required></td>
            <td><input type="number" id="weight" name="weight" required></td>
            <td><input type="number" id="height" name="height" required></td>
            <td><input type="text" id="domicile" name="domicile" required></td>
          </tr>
        </table>
        <br>
        <button type="submit" class="submit-button"><a href="../login/loginn.php">submit</a></button>
        <button class="back-button"><a href="../login/loginn.php">Kembali</a></button>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
