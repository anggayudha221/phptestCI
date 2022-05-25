
<html>
    <head>
        <meta charset="utf-8">
        <title> Encrypt form data in PHP </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      
      <div class="container py-4" id="form-tampil" style="display: none">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <form method="POST" action="home/send">
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title font-weight-bold"> Encrypt Form Data </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="nama-send" name="name" class="form-control" placeholder="Your name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="password-send" name="password" class="form-control" placeholder="Your Password" required/>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
      <div class="container py-4" id="form-input">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <form method="POST" name="form-saya" id="regForm" action="home/send">
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title font-weight-bold"> Encrypt Form Data </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="namea" name="namea" class="form-control" placeholder="Your name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Your Password" required/>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
     
        

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes-format.js"></script>
        <script>
          $(document).ready(function() {
                
                // Submit form
                $("#regForm").submit(function (event) {
                    event.preventDefault();

                    var name = $("#namea").val();
                    var password = $("#password").val();

                    
                    
                    // Encrypt form data
                      
                      let code = '123456'
                      var namaencrypted = CryptoJSAesJson.encrypt(name, code);
                      var passencrypted = CryptoJSAesJson.encrypt(password, code);
                      console.log('Encrypted:', namaencrypted);
                      console.log('Encrypted:', passencrypted);

                    $('form input[name="namea"]').val(namaencrypted);
                    $('form input[name="password"]').val(passencrypted);
                    document.forms["form-saya"].submit();
                    //Submit form using Ajax 
                    // $.post({
                    //     url: 'home/encrypt',
                    //     data: {
                    //         name: namaencrypted,
                    //         password: passencrypted
                    //     },
                    //     success:function(res) {
                    //       console.log(res)
                    //             $('#form-input').hide();
                    //             $('#nama-send').val(res.nama);
                    //             $('#password-send').val(res.pass);
                    //             $('#form-tampil').show();
                    //     }
                    // });

                });
            });
        </script>
        
        
    </body>
</html>