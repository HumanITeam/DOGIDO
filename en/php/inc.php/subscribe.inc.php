<form class="form">
                    <form class="sign" action="" method="post">
                        <div class="head">
                          <img src="../images/digidologo.png" alt="" class="logo">
                          <h3>Create your Digido Account</h3>
                        </div>
                        <div class="personal">
                            <div class="name">
                                <input type="name"name="fname" required>
                                <label>First name</label>
                            </div>
                            <div class="name">
                                <input type="name" placeholder="" name="lname" required>
                                <label>Last name</label>
                            </div>
                            <div class="name">
                                <input type="mail" placeholder="" name="mail" required>
                                <label>Email</label>
                            </div>
                            <div class="name">
                                <input type="phone" placeholder="Phone" name="phone">
                                <!-- <label>Phone</label> -->
                            </div>
                        </div>
                        
                        <div class="adress">
                            <div class="way adress-item">
                                <input type="text" placeholder="way..." name="adway" required>
                            </div>
                            <div class="city adress-item">
                                <input type="text" placeholder="city..." name="adcity" required>
                            </div>
                            <div class="postcode adress-item">
                                <input type="text" placeholder="postcode..." name="adcode" required>
                            </div>
                          <!-- <label>Address</label> -->
                        </div>
                        <div class="line-2">
                            <a class="line1">You can use letters, numbers & periods</a>
                        </div>
                        
                        <article class="pass-confimation">
                            <div class="pass">
                                <input type="password" class="password" id="pass1" name="passwd" required>
                                <label>Password</label>
                            </div>
                            <div class="pass">
                                <input type="password" class="password" id="pass2" name="confpasswd" required>
                                <label>Confirm</label>
                            </div>
                        </article>

                        <div class="iconeye">
                            <img src="images/eyehide.png" onclick="show();" id="eye">
                        </div>
                        <a class="line3">Use 8 or more characters with a mix of letters, numbers & symbols</a>
                        <input type="submit" name="register" value="Get started">
                      </form>
                      <script type="text/javascript">
                      function show(){
                        var password= document.getElementById('pass1');
                        confirm= document.getElementById('pass2');
                        image= document.getElementById('eye');
                        if (password.type==="password",confirm.type==="password") {
                          password.type="text";
                          confirm.type="text";
                          image.setAttribute('src', 'images/eyeshow.png');
                        } else if (password.type==="text",confirm.type==="text"){
                          password.type="password";
                          confirm.type="password";
                          image.setAttribute('src', 'images/eyehide.png');
                        }
                      }
                      </script>
      </form>
