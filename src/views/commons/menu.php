<?php
if(!function_exists('nav_item')){

        
    /**
     * Génère le lien de navifation dans le site internet
     *
     * @param  string $lien
     * @param  string $titre
     * @return string
     */
    function nav_item(string $lien, string $titre): string{
        $classe= 'nav-item';

        if($_SERVER['SCRIPT_NAME'] === $lien){
            $classe .= ' active';
        }


        return "<li class=\"$classe\">
            <a class=\"nav-link\" href=\"$lien\">$titre <span class=\"sr-only\">(current)</span></a>
          </li>";
        }
}
?>

<?= nav_item('/', 'Accueil')?>
<?= nav_item('/contact', 'Contact')?>