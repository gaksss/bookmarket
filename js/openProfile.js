const profil = document.querySelector("#profil");

profil.addEventListener("click", handleOpenProfile);

function handleOpenProfile(event) {
  const connexion = document.querySelector("#connexion");
  const modalOverlay = document.querySelector("#modal");

  modalOverlay.classList.remove("hidden");
  connexion.classList.remove("hidden");

  // Bouton de fermeture
  const closeButton = document.querySelector("#close");
  closeButton.addEventListener("click", handleCloseProfile);

  function handleCloseProfile(event) {
    modalOverlay.classList.add("hidden");
  }

  console.log("Open profile");
}
