document.addEventListener("DOMContentLoaded", () => {
  const notifyButton = document.getElementById("notifyButton");

  if (notifyButton) {
    notifyButton.addEventListener("click", () => {
      alert(
        "Vielen Dank! Wir werden Sie benachrichtigen, sobald die Website verfügbar ist."
      );
    });
  }
});
