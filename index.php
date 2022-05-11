<!DOCTYPE html>
<html lang="en">
<head>
    <title>CyberKey | The password for your passwords</title>
    <meta charset="UTF-8">
    <meta name="description" content="Save your passwords and store them in a smart vault, encrypted with your own private key.">
    <meta name="keywords" content="Encrypt, Cyberkey, password secure">
    <meta name="author" content="Cyber1.io">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/favicon.png"/>
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<script src="js/aes.js"></script>
<script src="js/vue3.js"></script>
<body>

    <div class="limiter" id="app">
        <div class="container-login100" style="background-image: url('images/password-bg.jpg');">
            <form class="form">
                
                <div class="row">
                    <div class="col-xs-3 col-lg-3 col-md-3 col-sm-2 col-2"></div>
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-8 col-8 m-b-20">
                        <img src="images/cyber1key-full.svg" style="width: 100%;">
                    </div>
                    <div class="col-xs-3 col-lg-3 col-md-3 col-sm-2 col-2"></div>
                </div>
                
                    <div class="wrap-input100">

                        <textarea v-model="texto" class="input100 m-b-10" id="message" rows="4" spellcheck="false"
                        style="height: 120px;padding: 10px 30px 10px 53px;"
                        placeholder="Enter the data you want to encrypt"></textarea>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
                        <input v-model="chave" type="password" class="input100 m-b-10" id="password"
                        placeholder="Enter the password for Encrypt/Decrypt (private key)">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button @click.prevent="encrypt" style="width: 45%;margin-right: 10%;" class="login100-form-btn">
                            Encrypt
                        </button>
                        <button @click.prevent="decrypt" style="width: 45%;" class="login100-form-btn2">Decrypt</button>
                    </div>
            </form>

            <div class="container-login100-form-btn" style="margin-bottom: -20px;">
                <pre v-if="result.length > 0" style="display: contents; width: 50%;">
                    <code id="result" class="result">
                    {{result}}
                    </code>
                </pre>
            </div>

            <div>
                <button @click.prevent="copy" v-if="result.length > 0" class="button-copy"><i
                    class="fa fa-copy"></i> Copy to clipboard
                </button>
            </div>

            <div class="text-center w-full">
                <p class="txt1">
                    <a style="font-weight: bold">CyberKey<br>
                    <a href="https://github.com/cyber1group/cyber1key" target="_blank" style="font-size: 12px;" class="txt1">Repository - Clone this code<br> 
                    <!-- <img height="45" src="images/open-souce-logo-footer.png"><br> -->
                    <a style="font-size: 12px;" class="txt1">Crypto-js Project -</a>
                    <a style="font-size: 12px;" class="txt1" href="https://opensource.org/licenses/BSD-3-Clause" target="_blank">New BSD License <br></a><br>
                    <a href="https://cyber1.io" target="_blank" style="font-size: 12px;font-weight: bold; color: white" class="txt1">This page is maintained by <img height="30" src="images/cyber1io.png"> Cyber.1io</a><br>
                </p>
            </div>

        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script>
        const {createApp} = Vue

        createApp({
            data() {
                return {
                    texto: '',
                    chave: '',
                    result: ''
                }
            },
            methods: {
                encrypt() {
                    var encrypted = CryptoJS.AES.encrypt(this.texto, this.chave);
                    this.result = encrypted.toString();
                },
                decrypt() {
                    var decrypted = CryptoJS.AES.decrypt(this.texto, this.chave);
                    this.result = decrypted.toString(CryptoJS.enc.Utf8);   
                },
                copy() {
                    this.copyToClipboard(this.result)
                    window.alert("The text has been copied to the clipboard: " + this.result);
                },

                copyToClipboard(text) {
                    var dummy = document.createElement("textarea");

                    document.body.appendChild(dummy);

                    dummy.value = text;
                    dummy.select();
                    document.execCommand("copy");
                    document.body.removeChild(dummy);
                }
            }
        }).mount('#app')
    </script>

</body>
</html>