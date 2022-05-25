<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $page_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="/asset/main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <hr>
                <p>Scan the below Qr code by Google Authenticator app on your phone and Enter the verification code generated.</p>
                <p>Authenticator Secret Code:  <mark><?= $user_2fa_secret_code ?></mark> <small style="color:#ddd">(save this code)</small></p>
                <img src="<?= $user_2fa_qrCode ?>" />
                <br>
                <form class="form-horizontal form-material" method="post" action="auth/check_2fa">
                    <div class="form-group">
                        <label class="col-md-12">Enter the 2-step verification</label>
                        <div class="col-md-12">
                            <input type="text" name="code" placeholder="Enter the 2-step verification code provided by your authentication app" class="form-control form-control-line" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success">Enable 2F Authentication</button>
                            <input type="text" name="secret_code" value="<?= $user_2fa_secret_code ?>" required>
                        </div>       
                </form>
            </div>
        </div>
    </div>
</body>
</html>