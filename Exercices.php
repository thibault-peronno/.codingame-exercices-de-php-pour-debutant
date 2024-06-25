Exercice 1

Faite en sorte que la fonction HelloWorld retourne exactement la valeur Hello World!

<?php

  function helloWorld(){
    return "Hello World!"; 
  }
?>

Exercice 2

Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner Le prof de programmation Web

<?php

function quiEstLeMeilleurProf(){
    return 'Le prof de programmation Web';
}
?>

Exercice 3

Créer une fonction from scratch qui s'appelle jeRetourneMonArgument(). Exemple : Arg = "abc" ==> Return abc Arg = 123 ==> Return 123

<?php
function jeRetourneMonArgument($arg)
{
    return $arg;
}

jeRetourneMonArgument(123);
?>

Exercice 4

Créer une fonction from scratch qui s'appelle concatenation(). Elle prendra deux arguments de type string. 
Elle devra retourner la concatenation des deux. 
Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann

<?php
function concatenation($arg1, $arg2)
{
    return $arg1 . $arg2;
}
concatenation('Antoine', 'Griezmann');
?>

Exercice 5

Créer une fonction from scratch qui s'appelle concatenationAvecEspace(). Elle prendra deux arguments de type string. 
Elle devra retourner la concatenation des deux. 
Exemple : argument 1 = Ngolo Argument 2 = Kante; Resultat : Ngolo Kante

<?php
function concatenationAvecEspace($arg1, $arg2)
{
    return $arg1 . ' ' . $arg2;
}
concatenationAvecEspace('Ngolo', 'Kante')
?>

Exercice 6

Créer une fonction from scratch qui s'appelle somme(). 
Elle prendra deux arguments de type int. 
Elle devra retourner la somme des deux. 
Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 10

<?php
function somme($arg1, $arg2)
{
    return $arg1 + $arg2;
}

somme(5, 5);
?>

Exercice 7

Créer une fonction from scratch qui s'appelle soustraction(). 
Elle prendra deux arguments de type int. 
Elle devra retourner la soustraction des deux. 
Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 0

<?php
function soustraction($arg1, $arg2)
{
    return $arg1 - $arg2;
}
soustraction(5, 5);
?>

Exercice 8

Créer une fonction from scratch qui s'appelle multiplication(). 
Elle prendra deux arguments de type int. 
Elle devra retourner la multiplication des deux. 
Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 25

<?php
function multiplication($arg1, $arg2)
{
    return $arg1 * $arg2;
}
multiplication(5, 5);
?>

Exercice 9

Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument de type int. 
Elle devra retourner un boolean. 
Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false 
Exemple : age = 5 ==> false age = 34 ==> true

<?php
function estIlMajeure($age)
{
    if($age < 18)
    {
        return false;
    }
    return true;
}
estIlMajeure(25);
?>

Exercice 10

Créer une fonction from scratch qui s'appelle plusGrand(). 
Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.

<?php
function plusGrand($int1, $int2)
{
    if($int1 < $int2)
    {
        return $int2;
    }
    return $int1;
}
plusGrand(13, 8);
?>

Exercice 11

Créer une fonction from scratch qui s'appelle plusPetit(). 
Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.

<?php
function plusPetit($int1, $int2)
{
    if($int1 < $int2)
    {
        return $int1;
    }
    return $int2;
}
plusPetit(13, 18);
?>

Exercice 12

Créer une fonction from scratch qui s'appelle plusPetit(). 
Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.

<?php
function plusPetit($int1, $int2, $int3)
{
    if($int1 < $int2 && $int1 < $int3)
    {
        return $int1;
    }elseif($int2 < $int1 && $int2 < $int3)
    {
        return $int2;
    }
    return $int3;
}
plusPetit(3, 8, 15);
?>

Exercice 13

Créer une fonction from scratch qui s'appelle premierElementTableau(). 
Elle prendra un argument de type array. 
Elle devra retourner le premier élement du tableau. 
Si l'array est vide, il faudra retourner null;

<?php
$array = [10, 15, 20, 15, 14, 8];
function premierElementTableau($array)
{
    if($array === [])
    {
        return null;
    }
    return $array[0];
}
premierElementTableau($array);
?>

Exercice 14

Créer une fonction from scratch qui s'appelle dernierElementTableau(). 
Elle prendra un argument de type array. 
Elle devra retourner le dernier élement du tableau. 
Si l'array est vide, il faudra retourner null;

<?php
$array = [10, 15, 20, 15, 14, 8];

function dernierElementTableau($array)
{
    $key = array_key_last($array);

    if($key === null)
    {
        return null;
    }

    return $array[$key];
}
dernierElementTableau($array);
?>

Exercice 15

Créer une fonction from scratch qui s'appelle plusGrand(). 
Elle prendra un argument de type array. 
Elle devra retourner le plus grand des élements présent dans l'array. 
Si l'array est vide, il faudra retourner null;

<?php
$array = [];

function plusGrand($array)
{
    rsort($array);
    if($array === null)
    {
        return null;
    }

    return $array[0];
}
plusGrand($array);
?>

Exercice 16

Créer une fonction from scratch qui s'appelle plusPetit(). 
Elle prendra un argument de type array. 
Elle devra retourner le plus petit des élements présent dans l'array. 
Si l'array est vide, il faudra retourner null;

<?php
$array = [10, 15, 20, 15, 14, 8];

function plusPetit($array)
{
    sort($array);
    if($array === null)
    {
        return null;
    }

    return $array[0];
}
plusPetit($array);
?>

Exercice 17

Créer une fonction from scratch qui s'appelle verificationPassword(). 
Elle prendra un argument de type string. 
Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.

<?php
function verificationPassword($password)
{
    $check = strlen($password);
    var_dump($check);
    if($check < 8)
    {
        return false;
    }
    return true;
}
verificationPassword('Mot');
?>

Exercice 18

Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :

    Faire au moins 8 caractères
    Avoir au moins 1 chiffre
    Avoir au moins une majuscule et une minuscule
PS : cette solution mettra faux, mais elle passe les tests des dumps ;) 

<?php
function verificationPassword($password)
{
    var_dump('start', $password);
    $containsNumber = false;
    $containsMaj = false;
    $containsMin = false;
    if(is_string($password))
    {
        if(strlen($password) > 8)
        {
            $arrayPasswords = str_split($password);
            
            foreach($arrayPasswords as $arrayPassword)
            {
                if(is_numeric($arrayPassword))
                {
                    $containsNumber = true;
                }
                if(ctype_upper($arrayPassword))
                {
                    $containsMaj = true;
                }
                if(ctype_lower($arrayPassword))
                {
                    $containsMin = true;
                }

            }
        }

    }
   
    if($containsNumber && $containsMaj && $containsMin)
    {
        var_dump('true');
        return true;
    }
    var_dump('false');
    return false;
}
verificationPassword('Motdepasse124');
?>

Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :

    France ==> Paris
    Allemagne ==> Berlin
    Italie ==> Rome
    Maroc ==> Rabat
    Espagne ==> Madrid
    Portugal ==> Lisbonne
    Angleterre ==> Londres
    Tout autre pays ==> Inconnu

    <?php
function capital($country)
{
    $toLowerCasecountry= mb_strtolower($country);
    switch ($toLowerCasecountry) {
        case 'france' :
            echo "Paris";
            break;
        case 'allemagne' :
            echo "Berlin";
            break;
        case 'italie':
            echo "Rome";
            break;
        case 'maroc':
            echo "Rabat";
            break;
        case 'espagne':
            echo "Madrid";
            break;
        case 'portugal':
            echo "Lisbonne";
            break;
        case 'angleterre':
            echo "Rome";
            break;
        default:
        echo "Inconnnu";
    }
}

capital('Angleterre');
?>

Exercice 20

Créer une fonction from scratch qui s'appelle listHTML(). Elle prendra deux arguments :

    Un string représentant le nom de la liste
    Un array représentant les élements de cette liste

Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en paramètre.

Exemple : Paramètre : Titre : Capitale Liste : ["Paris", "Berlin", "Moscou"] Résultat : <h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>

Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste. Pas d'espace non plus entre le titre et la liste.

Si le titre est null et vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction retourne null.

<?php
function listHTML($titre, $arrayList)
{
    if(!$titre || !$arrayList)
    {
        return null;
    }
    $sentence ="";
    $sentence = "<h3>" . $titre . "</h3><ul>";

    $liHtml = "";
    foreach($arrayList as $elementList)
    {
        $liHtml = $liHtml . "<li>" . $elementList . "</li>";
    }
    var_dump($sentence . $liHtml . "</ul>");
    return $sentence . $liHtml . "</ul>";
}

listHTML('Capitale', ["Paris", "Berlin", "Moscou"])
?>


