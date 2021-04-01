
<div class="footerColor">
    <div class="Ieum">
        <div class="Ieum1" style="margin-top: 17%">
            <h1 style="color: white; font-size: 40px"> " L’influence est<br> un métier "</h1>
            <img src="./img/form.png"  style="width: 100%; height: auto"  class="img_service">
        </div>
    </div>

    <div class="Ieum">
        <div class="Ieum1" style="margin-top: 17%">
            <h1 style="color: white">Contactez-nous:</h1>
            <form class="formulaireContact" method="post" action="/contact">
                @csrf
                <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" style="width: 50%; height: 60px; border-radius: 50px;padding: 0 25px;margin-top: 10px" placeholder="Nom"><br><br>
                <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}"  style="width: 50%; height: 60px; border-radius: 50px;padding: 0 25px;" placeholder="Prénom"><br><br>
                <input type="email" id="email" name="email" value="{{old('email')}}"  style="width: 50%; height: 60px; border-radius: 50px;padding: 0 25px;" placeholder="email.gmail.com"><br><br>
                <input id="telNo" value="{{old('name')}}"  name="telNo" type="tel" size="20" minlength="10" maxlength="10" style="width: 50%;padding: 0 25px; height: 60px;border-radius: 50px" placeholder="0102030405"><br><br>
                <button class="btnjenProfite" type="submit"> J'en profite ! </button><br><br>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <br> <br> <br> <br>
    <div class="" style="float: left; width: 50%">
                <ul class="" style="margin-left: 200px;">
                    <li style=" color: white">Nos services:</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                </ul>
            </div>

        <div class="" style="float: right; width: 50%">
            <ul class="">
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
            </ul>
        </div>
</div>
        <!-- <script src="./resources/js/app.js"></script>-->
</body>
</html>
