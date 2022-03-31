connect
<form class="sign" action="">
      <div class="head">
        <img src="../images/digidologo.png" alt="" class="logo">
        <h3>Sign in to your Digido Account</h3>
      </div>
      <div class="name">
        <input type="mail" required>
        <label>Email</label>
      </div>
      <a class="line1">You can use letters, numbers & periods</a>
      <div class="pass">
        <input type="password" class="password" id="pass1" required>
        <label>Password</label>
      </div>
        <div class="iconeye">
      <img src="../images/eyehide.png" onclick="show();" id="eye">
      </div>
      <input type="submit" value="Connect">
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