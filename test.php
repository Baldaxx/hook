<?php
function augmenterCurseur($increment = 1)
{
    $dom = new DOMDocument();
    $dom->loadHTMLFile('index.html');
    $curseur = $dom->getElementById('monCurseur');
    $messagePort = $dom->getElementById('messagePort');
    $spanRestant = $dom->getElementById('restant');
    $valeurActuelle = intval($curseur->getAttribute('value'));
    $valeurActuelle += $increment;
    $curseur->setAttribute('value', min($valeurActuelle, 100));
    $spanRestant->textContent = max(70 - $curseur->getAttribute('value'), 0);

    if ($curseur->getAttribute('value') >= 70) {
        $curseur->setAttribute('style', 'background: green');
        $messagePort->innerHTML = "<p class='offert-message texteVert'>Frais de port offerts !</p>";
    } else {
        $curseur->setAttribute('style', 'background: red');
        $messagePort->innerHTML = "";
    }

    $dom->saveHTMLFile('index.html');
}

function addEventListener($selector, $event, $function)
{
    $dom = new DOMDocument();
    $dom->loadHTMLFile('index.html');
    $elements = $dom->getElementsByTagName($selector);
    foreach ($elements as $element) {
        $element->addEventListener($event, $function);
    }
    $dom->saveHTMLFile('index.html');
}
addEventListener('.add-to-cart', 'click', 'augmenterCurseur');
