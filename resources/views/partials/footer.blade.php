
<div class="footerColor">
    <div class="Ieum">
        <div class="Ieum1">
            <h1 class="Ieum12"> "L’influence est<br> un métier "</h1>
            <img src="./img/form.png" class="img_service">
        </div>
    </div>

    <div id="fomulaire" class="Ieum">
        <div class="Ieum1">
            <h1 style="color: white">Contactez-nous:</h1>
            <form
                class="formulaireContact"
                method="post"
                action="/">
                @csrf
                <input class="inputForm" type="text" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Nom"><br><br>
                <input class="inputForm" type="text" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Prénom"><br><br>
                <input class="inputForm" type="email" id="email" name="email" value="{{old('email')}}" placeholder="example.gmail.com"><br><br>
                <input class="inputForm" type="tel" id="tel" name="tel" value="{{old('tel')}}" size="20" minlength="10" maxlength="10" placeholder="0744293829"><br><br>
                <input class="inputForm" id="sujet" value="{{old('sujet')}}"  name="sujet" type="text" placeholder="Votre demande"><br><br>
                <button class="btnjenProfite" type="submit"> J'en profite ! </button><br><br>
                @if (session('status'))
                    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                        <p style="font-size: 10px;background-color: white;color: #0CBFA4">{{ session('status') }}</p>
                    </div>
                @endif

                @if ($errors->any())

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="background-color: white; color: red">{{ $error }}</li><br>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <br> <br> <br> <br>
    <div class="footer5">
                <ul class="ul200">
                    <li style=" color: white">Nos services:</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                    <li>Services</li><br>
                </ul>
            </div>

        <div class="footer5">
            <ul class="ul200">
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
                    <li style="padding: 0 25px;"><img src="./img/snapchat.png"></li>
            </ul>
        </div>
</div>
        <!-- <script src="./resources/js/app.js"></script>-->
</body>
</html>
