<?php
    /**
     * Plugin Name: short_1 
     * Author: Yordan Toledano Prieto
     * Description: Un premier exemple de plugin utilisant shortcode
     * Plugin URI: https://github.com/Dev2023/31w-extension1
     */
?>

<?php
    function genere_adresse() {
        ////////////////// css
        $contenu = "<style>
        .code__adresse {
            margin: 10px;
            padding: 10px;
            border-left: 4px solid #005;
            background-color: #bbb;
        }
        </style>";
        ///////////////////html


        $contenu .= '<code class="code__adresse">';
        $contenu .= "3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131";
        $contenu .= '</code>';
        $contenu .= '<button id="mon_boutton">Ok</button>';
        ///////////////script
        $contenu .= "<script>
            (funtion)() {
                let elOk = document.querySelector('#mon_boutton')
                elOk.document.addEventListener('mousedown', function() {
                    console.log('Bravo le script fonctionne')
                }) 
            })()
        </script>";
        return $contenu;
    }
    add_shortcode('adresse', 'genere_adresse')
?>