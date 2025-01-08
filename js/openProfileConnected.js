const profil = document.querySelector("#profil");


profil.addEventListener("click", handleOpenProfile);

function handleOpenProfile(event) {
  
  const connected = document.querySelector("#connected");
  const modalOverlay = document.querySelector("#modal");

  modalOverlay.classList.remove("hidden");
  connected.classList.remove("hidden");

  // Bouton de fermeture
  const closeButton = document.querySelector("#closeConnected");
  closeButton.addEventListener("click", handleCloseProfile);

  function handleCloseProfile(event) {
    modalOverlay.classList.add("hidden");
  }

  console.log("Open profile");
}
