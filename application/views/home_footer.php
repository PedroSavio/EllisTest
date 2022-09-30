<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
        }

        .row {
            --bs-gutter-x: 0;
            justify-content: space-around;
        }

        .list-group {
            --bs-list-group-bg: 0;
            --bs-list-group-border-color: 0;
            --bs-list-group-color: 0;
            display: none;
        }

        .h2,
        .h3,
        .h5 {
            word-wrap: normal;
            margin-top: 20px;
            margin-bottom: -0.5rem;
        }

        .listagem {
            cursor: pointer;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .ms-15 {
            margin-left: 15rem;
        }

        .strongFont {
            max-width: 100%;
            min-width: 100%;
        }

        .serviceGroup {
            position: relative;
            top: -30px;
            background-image: ('https://cdn.discordapp.com/attachments/335866142176575488/1025407781500633110/unknown.png', 'https://cdn.discordapp.com/attachments/335866142176575488/1025407781500633110/unknown.png')!important;
            background-color: #a18e72;
            background-repeat: no-repeat, no-repeat, no-repeat;
            background-position: top, bottom, top,
            /* min-height: 32vh;
            max-height: 40vh;
            min-width: 25vh;
            max-width: 29vh; */
        }

        .backgroundInfo {
            background-image: linear-gradient(90deg, #0c6fb9, #0f3991);
            max-height: 25%;
            width: 100%;
            --bs-gutter-x: 0
        }

        .textArea {
            margin-right: 3rem;

            padding: 1rem;
        }

        @media only screen and (max-width: 2700px) {
            .serviceGroup {
                min-width: 27vh;
                max-width: 27vh;
                min-height: 34vh;
                max-height: 46vh;
            }

            .backgroundInfo {
            background-image: linear-gradient(90deg, #0c6fb9, #0f3991);
            max-height: 30%;
            width: 100%;
            --bs-gutter-x: 0
            }

            .h5 {
                font-size: 1.8rem;
            }

            .h3 {
                font-size: 2.5rem;
            }
            
            .ms-15 {
                margin-left: 24rem;
            }

            .textArea {
                margin-right: 24rem;
            }
        }

        @media only screen and (max-width: 2000px) {
            .serviceGroup {
                min-width: 27vh;
                max-width: 27vh;
                min-height: 36vh;
                max-height: 40vh;
            }

            .h5 {
                font-size: 1.15rem;
            }

            .textArea {
                margin-right: 8rem;
            }
        }

        @media only screen and (max-width: 1443px) {
            .serviceGroup {
                min-width: 29vh;
                max-width: 27vh;
                min-height: 36vh;
                max-height: 40vh;
            }

            .h2,
            .h3,
            .h5 {
                margin-top: 8px;
                margin-bottom: -0.5rem;
            }


            .h5 {
                font-size: 1.15rem;
            }

            .textArea {
                margin-right: 5rem;
            }
        }

        @media only screen and (max-width: 1175px) {
            .serviceGroup {
                min-width: 31vh;
                max-width: 22vh;
                min-height: 37vh;
                max-height: 40vh;
            }

            .ms-15 {
                margin-left: 2rem;
            }

            .h5 {
                font-size: 1.3rem;
            }

            .h2,
            .h3,
            .h5 {
                word-wrap: normal;
                margin-top: 10px;
                margin-bottom: -0.5rem;
            }

            .h3 {
                font-size: 2rem;
            }

        }

        @media only screen and (max-width: 768px) {
            .serviceGroup {
                min-width: 32vh;
                max-width: 22vh;
                min-height: 37vh;
                max-height: 40vh;
            }

            .ms-15 {
                margin-left: 1.5rem;
            }

            .h5 {
                font-size: 1.3rem;
            }

            .h3 {
                font-size: 2rem;
            }

            .h2,
            .h3,
            .h5 {
                word-wrap: normal;
                margin-top: -3px;
                margin-bottom: 0.5rem;
            }
        }

        @media only screen and (max-width: 465px) {
            .ms-15 {
                margin-left: 0.5rem;
                margin-top: 18px;
                margin-bottom: -0.5rem;
            }

            .serviceGroup {
                min-width: 20vh;
                max-width: 15vh;
                min-height: 33vh;
                max-height: 34vh;
            }

            .h2,
            .h3,
            .h5 {
                font-size: medium;
                margin-top: 30px;
                margin-bottom: -1.5rem;
            }

            .h2 {
                font-size: medium;
                margin-top: 7px;
                margin-bottom: -1.5rem;
            }

            .textArea {
                margin-right: 2rem;

                padding: 0.5rem;
            }

            .strong {
                margin-right: 5px;
            }

        }
    </style>
</head>

<body>
    <div style="height:100vh;" class="d-flex align-items-center ">

        <div class="row text-white backgroundInfo">

            <div class="col-xl-2 col-sm-2 col-md-2 col-lg-2 col-1 ms-15 overflow-hidden d-block align-items-center rounded serviceGroup">

                <p class="h5 m-3 mt-4 listagem col-xl-10"> O QUE A ELLIS AGÊNCIA FAZ?</p>

                <div class="p-12">
                    <ul class="list-group ">
                        <?php
                        // echo "<p>" .$servicos. "</p>";
                        foreach ($servicos as $sl) {
                            echo "<li class='list-group-item'>" . $sl->servico . "</li>";
                        }
                        ?>
                    </ul>
                </div>

            </div>

            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 col-5 text-white textArea ">
                <p class="h2 strongFont"><strong>#EUSOUELLISAGÊNCIA</strong></p>
                <p class="h3">Uma agência inovadora que vem a mais de 10 anos trabalhando para prosperar empresas na era digital.</p>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <body>

        <script>
            const navSlide = () => {
                const table = document.querySelector('.listagem');
                const listagem = document.querySelector('.list-group');

                table.addEventListener('click', () => {
                    listagem.classList.toggle('d-flex');
                    listagem.classList.toggle('animacao')
                });
            }
            navSlide();
        </script>

</html>