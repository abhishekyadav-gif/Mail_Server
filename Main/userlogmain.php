<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <style>
    .center {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding-top: 3rem;
      padding-bottom: 3rem;
      background-color: #fdfbd4;

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
      <td class="center">
        <?php
        include('userlogin.php');
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