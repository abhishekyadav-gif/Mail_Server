<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <style>
     .main {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 2rem;
    }
  </style>
</head>

<body>
  <table width="100%">
    <tr>
      <td>
        <?php
        include('nav.php');
        ?>
      </td>
    </tr>
    <tr>
      <td class="main">
        <?php
        include('php/SentMails.php');
        ?>
      </td>

    </tr>
    <tr>
      <td>
        <?php
        include('footer.php');
        ?>
      </td>
    </tr>
  </table>
</body>

</html>