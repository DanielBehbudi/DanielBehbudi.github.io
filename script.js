document.addEventListener("DOMContentLoaded", function () {
  var notifyButton = document.getElementById("notifyButton");
  if (notifyButton) {
    notifyButton.addEventListener("click", function () {
      alert(
        "Vielen Dank! Wir werden Sie benachrichtigen, sobald die Website verfügbar ist."
      );
    });
  }
});
