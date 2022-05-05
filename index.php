<!DOCTYPE html>
<html lang="en">
<head>
	<title>CyberKey | Senha para suas senhas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/favicon.padding"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<script src="js/aes.js"></script>
<script src="js/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript">
	    $(document).ready(function () {
	        $('#encrypt').click(function () {
	            var encrypted = CryptoJS.AES.encrypt($('#message').val(), $('#password').val()).toString();
	            $('#result').html(encrypted).removeClass('invisible');
                $('#textresult').removeClass('invisible');
	        });
	        $('#dencrypt').click(function () {
	            var decrypted = CryptoJS.AES.decrypt($('#message').val(), $('#password').val()).toString(CryptoJS.enc.Utf8);
	            $('#result').html(decrypted).removeClass('invisible');
                $('#textresult').removeClass('invisible');
	        });
	    });
	</script>

<body>

<script src="js/aes.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#encrypt').click(function () {
            var encrypted = CryptoJS.AES.encrypt($('#message').val(), $('#password').val()).toString();
            $('#result').html(encrypted).removeClass('invisible');
        });
        $('#dencrypt').click(function () {
            var decrypted = CryptoJS.AES.decrypt($('#message').val(), $('#password').val()).toString(CryptoJS.enc.Utf8);
            $('#result').html(decrypted).removeClass('invisible');
        });
    });
</script>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <form class="form">
            <h1 style="color: white; text-align: center;">CYBER<strong>KEY</strong> </h1>
            <h6 style="color: white; text-align: center; font-style: italic; padding: 10px 0px;"><i class="fa fa-code"></i> A senha para suas senhas</h6>
          <div class="wrap-input100">

            <textarea class="input100 m-b-10" id="message" rows="4" spellcheck="false" style="height: 120px;padding: 10px 30px 10px 53px;" placeholder="Digite os dados que você deseja criptografar"></textarea>
            	<span class="focus-input100"></span>
				<span class="symbol-input100">
				<i class="fa fa-ellipsis-h"></i>
				</span>
          </div>

          <div class="wrap-input100">
            <input type="password" class="input100 m-b-10" id="password" placeholder="Digite a senha para Encriptar/Decriptar (chave privada)">
            	<span class="focus-input100"></span>
				<span class="symbol-input100">
				<i class="fa fa-lock"></i>
				</span>
          </div>

          	<div class="container-login100-form-btn p-t-10">
				<button style="width: 40%;margin-right: 10%;" id="encrypt" type="button" class="login100-form-btn">Encrypt</button>
				<button style="width: 40%;" id="dencrypt" type="button" class="login100-form-btn2">Decrypt</button>
                <p id="textresult" class="invisible" style="margin-top: 8%; color: white;">Os dados criptografados são:</p>
			</div>

        </form>

        <pre class="container-login100-form-btn" style="display: contents; width: 50%;">
        	<code id="result" class="invisible" style="background-color: #333333; padding: 5px 15px; border-radius: 25px;font-weight: bold; font-size: 12px; color: white; min-width: 61%; max-width: 70%; border-style: solid; white-space: normal; word-wrap:break-word; display:inline-block;"></code>
        </pre>

        <div class="text-center w-full">
           <p class="txt1">
              <a style="font-weight: bold">CyberKey <br>
              <a href="href https://bitbucket.org/cyber1-workspace/key-c1/" target="_blank" style="font-size: 12px;" class="txt1">Repository<br> 
              <img height="45" src="images/open-souce-logo-footer.png"><br>
              <a style="font-size: 12px;" class="txt1">Crypto-js Project <br>
              <a style="font-size: 10px;" class="txt1" href="https://opensource.org/licenses/BSD-3-Clause" target="_blank">New BSD License <br></a>
           </p>
        </div>

    </div>
</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

</body>
</html>