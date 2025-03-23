<?php
include "jitendraunatti.php";
$check_NB = "";

$ASUR = doctor_strange()["meta_data"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['mn'])) {
    $mobile_no = @$_POST['mn'];
    $count_NB = strlen($mobile_no);
    $check_pass = "10";

    if ($check_pass == $count_NB) {
      if ($mobile_no != "") {

        $check_NB = "<button>" . jiotv_otp_send($mobile_no);
      } else {
        $check_NB = "<button>" . "Enter Mobile number" . "</button>";
      }
    } else {
      $check_NB = "<button> please Enter 10 digits Number </button>";
    }
  } elseif (isset($_POST['OTP'])) {
    $OTP = @$_POST['OTP'];

    $check_NB = "<button >" . jio_tv_login($OTP) . "</button>";
    if (strpos($check_NB, "LOGGED IN SUCCESSFULLY") !== false) {
      header("Location: index.php");
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo "JIOTV+  " . $ASUR['hname']; ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('<?php echo $ASUR["bgpic"]; ?>');
      background-size: cover;
      background-position: center;
      flex-direction: column;
    }

    .wrapper {
      width: 420px;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, .2);
      backdrop-filter: blur(9px);
      color: #fff;
      border-radius: 12px;
      padding: 30px 40px;
    }

    .wrapper h1 {
      font-size: 36px;
      text-align: center;
    }

    .wrapper .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      margin: 30px 0;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: #fff;
      padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder {
      color: #fff;
    }

    .input-box i {
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;
    }

    .wrapper .remember-forgot {
      display: flex;
      justify-content: space-between;
      font-size: 14.5px;
      margin: -15px 0 15px;
    }

    .remember-forgot label input {
      accent-color: #fff;
      margin-right: 3px;
    }

    .remember-forgot a {
      color: #fff;
      text-decoration: none;
    }

    .remember-forgot a:hover {
      text-decoration: underline;
    }

    .wrapper .btn {
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
    }

    .wrapper .register-link {
      font-size: 14.5px;
      text-align: center;
      margin: 20px 0 15px;
    }

    .register-link p a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link p a:hover {
      text-decoration: underline;
    }

    footer {
      margin-top: 40px;
      color: #f3f3f3;
      font-size: 18px;
      text-align: center;
      padding: 20px;
    }

    .footer-text {
      display: inline-block;
    }

    .footer-text span {
      color: #e25555;
    }

    .footer-text b {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <form action="" method="POST">
      <h1>Jio Tv</h1>

      <?php
      if ($check_NB == "") {
        echo '<div class="input-box">';
        echo '<input type="text" name="mn" placeholder="Mobile number" required>';
        echo '<i class="bx bxs-mobile"></i>';
        echo '</div>';
        echo '<button type="submit" class="btn">Submit</button>';
      } else {
        echo '<div class="input-box">';
        echo '<input type="text" name="OTP" placeholder="Enter OTP" required>';
        echo '<i class="bx bxs-lock-alt"></i>';
        echo '</div>';
        echo '<button type="submit" class="btn">Submit OTP</button>';
      }
      ?>

      <center>
        <?php echo $check_NB; ?>
        <?php echo '<p style="color: red;">⚠️Before sending the OTP, please note that you are in India and your server is not blacklisted by JioTV.</p>'; ?>
      </center>
    </form>
  </div>
  <footer>
    <span class="footer-text">
      Coded with <span>❤️</span> by <b>Jitendra Kumar</b>
    </span>
  </footer>
</body>

</html>