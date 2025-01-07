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
  modalContent.textContent = "Vous n'êtes pas connecté";
  modalContent.classList.add("text-lg", "font-bold", "mb-4");
  const divForm = modalContent.appendChild(document.createElement("div"));
  divForm.classList.add(
    "flex",
    "flex-col",
    "items-center",
    "space-y-4",
    "justify-center",
    "h-[1000px]"
  );
  const form = divForm.appendChild(document.createElement("form"));
  form.classList.add("flex", "flex-col", "items-center", "space-y-4");
  form.setAttribute("method", "POST");
  form.setAttribute("action", "../process/connect.php");
  const labelEmail = form.appendChild(document.createElement("label"));
  labelEmail.setAttribute("for", "email");
  labelEmail.textContent = "Email";
  const email = form.appendChild(document.createElement("input"));
  email.setAttribute("type", "text");
  email.setAttribute("name", "email");
  email.setAttribute("placeholder", "email");

  const labelPassword = form.appendChild(document.createElement("label"));
  labelPassword.setAttribute("for", "password");
  labelPassword.textContent = "Mot de passe";
  const password = form.appendChild(document.createElement("input"));
  password.setAttribute("type", "password");
  password.setAttribute("name", "password");
  password.setAttribute("placeholder", "password");

  const submit = form.appendChild(document.createElement("input"));
  submit.setAttribute("type", "submit");
  submit.setAttribute("value", "Se connecter");
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
