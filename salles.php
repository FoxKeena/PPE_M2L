<?php
include("navbar.html");
?>
    <div class="container">   
        <div class="panel panel-default" id="locaux">
            <div class="panel-heading">
                <h1>Description des locaux</h1>
            </div>
            <div class="panel-body">
                <p class="lead">Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux (les bâtiments A et C)
                et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée.
                Les bâtiments C et D sont neufs. Les bâtiments A et B datent d'une quinzaine d'années.<br/> <br/>

                Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des quatre bâtiments héberge des espaces mutualisés :<br/>
                un amphithéâtre de 200 places avec une régie, 8 salles de réunion de 12 à 50 places, un hall d'accueil, <br/>
                une salle de convivialité et son office traiteur, ainsi qu'une salle de formation multimédia dotée de 24 postes. <br/>
                On y trouve également la partie « accueil » des neuf bureaux de l'administration de la M2L. L’autre partie se trouve au premier étage du bâtiment C. <br/>
                Différents locaux de service (archives, stockage local d'entretien ...) se trouvent en sous-sol.<br/> <br/>

                En fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 80 bureaux.<br/>
                A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent sans réservation. <br/>
                L'ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en soirée.<br/></p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                En savoir plus
                </button>
                <div class="collapse" id="collapseExample">
                  <div class="well" id="well">
                    <h3>Implantation des quatres batiments</h3>
                        <img src="Images/locauxM2L.png" class="schema"/>
                        <h3>Implantation des locaux en rez-de-chaussée des quatre bâtiments</h3>
                        <img src="Images/locaux2M2L.png" class="schema"/><br/><br/>
                        Notes : les salles Majorelle, Grüber, Lamour, Longwy, Daum, Gallé, Corbin et Baccarat sont des salles de réunion disponibles à la réservation. La salle multimédia est une salle dédiée aux stages de formation à inscription libre proposés par le CROSL ou pour les stages organisés par les ligues. L'amphithéâtre est réservable pour les assemblées générales ou pour d'autres réunions importantes. La salle de convivialité, et son office attenant, est également disponible à la réservation, souvent pour les repas "traiteur" qui suivent les réunions. Toutes ces salles sont accessibles en soirée : un système de "digicode" permet d'entrer dans les locaux en dehors des heures d'ouverture des bureaux.
                        Différents services peuvent être demandés en parallèle à la réservation : aménagement particulier, fourniture d’eau, de café etc. Ces services sont pour la plupart payants. <br/><br/>

                        La salle de reprographie est un espace commun aux ligues et à l'administration de la M2L.<br/><br/>

                        Les ligues ont la possibilité de réserver gratuitement l'amphithéâtre ou la salle de convivialité une fois par an et six fois les salles de réunion. Au delà, les réservations sont payantes. D’autres structures extérieures peuvent réserver l’ensemble des salles ressources moyennant finance.<br/><br/>

                        <h3>Implantation des ligues dans les bureaux</h3><br/>

                        En fonction de leur importance, les ligues et comités départementaux occupent un ou plusieurs bureaux. Ceux-ci peuvent communiquer entre eux quand ils sont contigus. Chaque bureau dispose d'un espace de rangement. Les employés et les bénévoles des ligues et CD disposent en bout d'étage d'une salle de réunion libre, laquelle est accessible seulement en journée et sans réservation (« premier arrivé, premier servi »). La location se fait sur la base d'un forfait de charges locatives par bureau (5€ par m2 et par mois).<br/><br/>
                        <h3>Plan standard d'étage : l'exemple du deuxième étage du bâtiment A</h3>
                        <img src="Images/locaux3M2L.png" class="schema"/><br/><br/>
                        <h3>Vous souhaitez reserver une sale ? Cliquez <a href="reservation_salle.php">ici</a></h3>
                    </div>
                </div>
            </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>
