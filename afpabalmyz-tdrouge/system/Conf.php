<?php
class Conf
{
    public static $civilite_femme = 1;
    public static $civilite_homme = 2;
    public static $civilite_mademoiselle = 3;
    public static $lequipe = "https://dwh.lequipe.fr/api/edito/rss?path=/";
    public static $cinema = "https://www.allocine.fr/rss/news-cine.xml";
    public static $science = "https://www.lemonde.fr/sciences/rss_full.xml";

    public static $fluxRSS ;
    
    public static $bdd = array(
        'host' => "ct01.afpa-balma.fr",
        'user' => "td_rouge",
        'pass' => "xwKfjMKXWysHkZQt",
        'database' => "td_rouge",
        'port' => 3306,
    );

    public static $modules = array(
        "contact",
        "system",
        "page",
        "authentification",
        "meteo",
        "fluxRss",
    );

    public static $templates = "templates/";

    public static $salt = "Ceci est moN Grian de Sel";

    public static $url = "https://www.prevision-meteo.ch/services/json/";

    public static function setFlux(){
        self::$fluxRSS = array(
            'Basket' => self::$lequipe . "Basket/",
            'Football' => self::$lequipe . "Football/",
            'Sport' => self::$lequipe,
            'Formule-1' => self::$lequipe . "Formule-1/",
            'Tennis' => self::$lequipe . "Tennis/",
            'Golf' => self::$lequipe . "Golf/",
            'Rugby' => self::$lequipe . "Rugby/",
            'Cinema' => self::$cinema,
            'Science' => self::$science,
        );
    }


}

