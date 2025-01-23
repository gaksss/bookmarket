const profil = document.querySelector("#profil");

profil.addEventListener("click", handleOpenProfile);

function handleOpenProfile(event) {
  const connected = document.querySelector("#connected");
  const modalOverlay = document.querySelector("#modalConnected");

  modalOverlay.classList.remove("hidden");
  connected.classList.remove("hidden");

  function handleCloseProfile(event) {
    modalOverlay.classList.add("hidden");
    connected.classList.add("hidden");
  }

  console.log("Open profile");
  modalOverlay.addEventListener("click", function(event) {
    if (event.target === modalOverlay) {
      handleCloseProfile();
    }
  });
}
