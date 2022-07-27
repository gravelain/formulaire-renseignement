<!DOCTYPE html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
   

    <!-- Title Page-->
    <title>Enfants du G60</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Repertoire des enfants G60-66</h2>
                    <form method="POST">
                    <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nom et Prenom" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Contact Whatsapp (ex : +237 6 97 77 12 10)" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nom et prénom de papa" name="name">
                        </div>

                        

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="groupeWha">
                                    <option disabled="disabled" selected="selected">Etes-vous dans le groupe enfants-G60 sur whatsapp ? </option>
                                    <option>OUI</option>
                                    <option>NON</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="groupeWha">
                                    <option disabled="disabled" selected="selected">Profession </option>
                                    <option>Etudiant</option>
                                    <option>Travailleur</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Dans quel Domaine etes vous (ex : Informatique etc ...)" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Niveau d'étude atteint ? (ex : Bac+...?) " name="name">
                        </div>

                        

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Votre pays actuel" name="name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Votre ville" name="name">
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Statut </option>
                                            <option>Célibataire</option>
                                            <option>Fiancé</option>
                                            <option>Marié</option>
                                            <option>Relation Simple</option>
                                            <option>C'est compliqué </option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Vous etes ? </option>
                                            <option>FEMME</option>
                                            <option>HOMME</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
