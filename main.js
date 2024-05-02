document.addEventListener("DOMContentLoaded", function () {
  const curseur = document.getElementById("monCurseur");
  const messagePort = document.getElementById("messagePort");
  const spanRestant = document.getElementById("restant");

  window.augmenterCurseur = function (increment = 1) {
    let valeurActuelle = parseInt(curseur.value);
    valeurActuelle += increment;
    curseur.value = Math.min(valeurActuelle, 100);

    spanRestant.textContent = Math.max(70 - curseur.value, 0);

    if (curseur.value >= 70) {
      curseur.style.background = "green";
      messagePort.innerHTML =
        "<p class='offert-message texteVert'>Frais de port offerts !</p>";
    } else {
      curseur.style.background = "red";
      messagePort.innerHTML = "";
    }
  };

  const boutonsAjoutPanier = document.querySelectorAll(".add-to-cart");

  boutonsAjoutPanier.forEach(function (bouton) {
    bouton.addEventListener("click", function () {
      augmenterCurseur(10);
    });
  });
});

//  A faire correspondre avec public function add_to_cart
