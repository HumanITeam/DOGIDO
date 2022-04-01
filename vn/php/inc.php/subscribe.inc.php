<form class="subscribe" action="" method="post">
                        <div class="head">
                          <img src="../images/digidologo.png" alt="" class="logo">
                          <h3>Créez votre compte DigiDo</h3>
                        </div>
                        <div class="personal">
                            <div class="name">
                                <input type="name"name="fname" required>
                                <label>Prénom</label>
                            </div>
                            <div class="name">
                                <input type="name" placeholder="" name="lname" required>
                                <label>Nom</label>
                            </div>
                            <div class="name">
                                <input type="email" placeholder="" name="mail" required>
                                <label>Email</label>
                            </div>
                            <div class="name">
                                <input type="phone" placeholder="Phone" name="phone">
                                <!-- <label>Phone</label> -->
                            </div>
                        </div>
                        
                        <div class="adress">
                            <div class="way adress-item">
                                <input type="text" placeholder="numéro..." name="adway" required>
                            </div>
                            <div class="way adress-item">
                                <input type="text" placeholder="rue..." name="adway" required>
                            </div>
                            <div class="city adress-item">
                                <input type="text" placeholder="ville..." name="adcity" required>
                            </div>
                            <div class="postcode adress-item">
                                <input type="text" placeholder="code postal..." name="adcode" required>
                            </div>
                          <!-- <label>Address</label> -->
                        </div>
                        
                        <article class="pass-confimation">
                            <div class="pass">
                                <input type="password" class="password" id="pass1" name="passwd" required>
                                <label>Mot de passe</label>
                            </div>
                            <div class="pass">
                                <input type="password" class="password" id="pass2" name="confpasswd" required>
                                <label>Confirmer le mot de passe</label>
                            </div>
                        </article>

                        <div class="iconeye">
                            <img src="../images/eyehide.png" onclick="show();" id="eye">
                        </div>
                        <a class="line3">Utilisez un minimum de 8 caractères en utilisant un mélange de lettres, chiffres et symboles</a>
                        <input type="submit" name="register" value="C'est parti !">
                      </form>
                      <script type="text/javascript">
                      function show(){
                        var password= document.getElementById('pass1');
                        confirm= document.getElementById('pass2');
                        image= document.getElementById('eye');
                        if (password.type==="password",confirm.type==="password") {
                          password.type="text";
                          confirm.type="text";
                          image.setAttribute('src', 'eyeshow.png');
                        } else if (password.type==="text",confirm.type==="text"){
                          password.type="password";
                          confirm.type="password";
                          image.setAttribute('src', 'eyehide.png');
                        }
                      }
                      </script>
                </form>
