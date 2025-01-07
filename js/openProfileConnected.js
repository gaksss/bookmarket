const profil = document.querySelector("#profil");

profil.addEventListener("click", handleOpenProfile);

function handleOpenProfile(event) {
  // Création de l'arrière-plan
  const modalOverlay = document.createElement("div");
  modalOverlay.classList.add(
    "fixed",
    "inset-0",
    "bg-primary-dark",
    "bg-opacity-50",
    "flex",
    "justify-center",
    "items-center",
    "z-50"
  );

  // Création de la modal
  const modalProfile = document.createElement("div");
  modalProfile.classList.add(
    "bg-red",
    "rounded-lg",
    "shadow-lg",
    "w-[1000px]",
    "h-[1000px]",
    "p-6",
    "relative",
    "flex",
    "flex-col"
  );

  // Contenu de la modal
  const modalContent = document.createElement("div");
  modalContent.textContent = "Vous êtes connecté bienvenu, ";
  modalContent.classList.add("text-lg", "font-bold", "mb-4");

  //   Creation du form et son contenu
  const divForm = modalContent.appendChild(document.createElement("div"));
  divForm.classList.add(
    "flex",
    "flex-col",
    "items-center",
    "space-y-4",
    "justify-center",
    "h-[1000px]"
  );
  const profil = divForm.appendChild(document.createElement("a"));
  profil.setAttribute("href", "profil.php");
  profil.textContent = "Voir profil";

  const disconnect = divForm.appendChild(document.createElement("form"));
  disconnect.classList.add("flex", "flex-col", "items-center", "space-y-4");
  disconnect.setAttribute("method", "POST");
  disconnect.setAttribute("action", "../process/handleLogout.php");

  const submit = disconnect.appendChild(document.createElement("input"));
  submit.setAttribute("type", "submit");
  submit.setAttribute("value", "Se déconnecter");
  submit.classList.add(
    "bg-green",
    "text-primary-white",
    "rounded-lg",
    "p-2",
    "cursor-pointer",
    "hover:bg-primary-white",
    "hover:text-primary-dark"
  );

  // Bouton de fermeture
  const closeButton = document.createElement("i");
  closeButton.classList.add(
    "absolute",
    "top-2",
    "right-2",
    "text-primary-dark",
    "hover:text-primary-dark",
    "focus:outline-none",
    "font-bold",
    "text-sm",
    "bx",
    "bx-x",
    "text-3xl",
    "cursor-pointer"
  );

  closeButton.addEventListener("click", () => {
    modalOverlay.remove();
  });

  // Ajout des éléments à la modal
  modalProfile.appendChild(modalContent);
  modalProfile.appendChild(closeButton);

  // Ajout de la modal à l'arrière-plan
  modalOverlay.appendChild(modalProfile);

  // Ajout de l'arrière-plan au body
  document.body.appendChild(modalOverlay);

  console.log("Open profile");
}
