@include('partials.header')
<br> <br> <br> <br>
<p style="text-align: center; font-size: 45px"><strong>L'agence</strong></p>
<br>
<div class="divPineapple">
<div class="agencyPrese">
    <img src="./img/agencyimg1.png" alt="Pineapple" class="pineapple" style="float: left">
    <p style="padding: 4%;">
        L’agence Epic c’est tout d’abord des bureaux de 150m2 ouverts 24h/24 pour nos
        influenceurs afin de produire et créer tous leurs contenus dans une ambiance jeune,
        dynamique et accueillante. <br><br>
        Située à Joinville Le Pont desservie par le RER A et bientôt par le projet du Grand
        Paris. <br><br>
        Epic events n’est malheureusement pas en recherche de nouveaux clients, nous
        travaillons uniquement en partenariats sur des projets impactants et fort de sens
        pour mener à bien notre démarche de développement RSE. <br><br>
        Notre projet est avant tout un projet responsable et éthique qui a pour vocation de
        rendre meilleur le monde numérique d’aujourd’hui et de demain grâce aux nouveaux
        leviers et outils du digital.
    </p>
</div>
<div class="agencyPrese">
    <img src="./img/agencyimg1.png" alt="Pineapple"  class="pineapple" style="float: right">
    <p style="padding: 4%;"><br>
        L’agence Epic est composée d’une équipe de différents experts spécialisés
        dans nos différents pôles d’activités. <br><br>
        Un gage de qualité nous permettant de concrétiser vos projets aux mieux et
        avec une expertise de professionnels réputés dans leurs domaines <br><br>
        Notre équipe composée aussi bien de jeunes talents que de seniors vous
        permettra d’orienter votre projet vers une stratégie novatrice et impactante et
        de mener au plus haut vos ambitions pour votre marque. <br><br>
        Faites confiance à des experts et améliorez la qualité de votre marque grâce à
        une expérience client optimisée par des professionnelles.
    </p>
    <br> <br> <br> <br> <br> <br> <br>
</div>
</div>


<p style="text-align: center; font-size: 45px"><strong>L'Equipe</strong></p>
<br> <br> <br> <br>

<div class="">

    <div style="margin-left: 10%; margin-right: 10%">

        <div class=""  style="float: right">
            <div class="teamMember" style="margin-right: 10%">
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember" style="float: left;margin-right: 15%">
                <img src="./img/claudine.png" >
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember"style="margin-right: 10%" >
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>


        <div class="teamMember"  style="float: right">
            <div class="" style="margin-right: 10%">
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember" style="float: left;margin-right: 15%">
                <img src="./img/claudine.png" >
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember"style="margin-right: 10%" >
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div class=""  style="float: right">
            <div class="teamMember" style="margin-right: 10%">
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember" style="float: left;margin-right: 15%">
                <img src="./img/claudine.png" >
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

        <div >
            <div class="teamMember" style="margin-right: 10%" >
                <img src="./img/claudine.png">
                <p class="teamMemberName">@Claudineitsme</p>
            </div>
        </div>

    </div>


    <br> <br> <br> <br>
    <p class="videoPhrase">Epic events c'est vous aussi !</p>
    <br> <br> <br> <br>

    <!--<video> vidéos ici!</video>-->
    <img class="epicVideo" src="./img/imgx.png">
    <br> <br> <br> <br>
    <br> <br> <br> <br>

</div>

<div class="footerColor">
    <div class="Ieum">
        <div class="Ieum1">
            <h1 style="color: white; font-size: 40px"> " L’influence est<br> un métier "</h1>
            <img src="./img/form.png"  style="width: 100%; height: auto"  class="img_service">
        </div>
    </div>

    <div class="Ieum">
        <div class="Ieum1">
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
<div class="footerAgency">
    <br> <br> <br> <br>
    <div class="footerAgencyi" style="float: left; width: 50%">
        <ul class="footerUl">
            <li style=" color: white">Nos services:</li><br>
            <li>Services</li><br>
            <li>Services</li><br>
            <li>Services</li><br>
            <li>Services</li><br>
        </ul>
    </div>

    <div class="" style="float: right; width: 50%">
        <ul class="footerU2">
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

