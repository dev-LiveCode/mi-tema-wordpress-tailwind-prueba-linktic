function openContactModal() {
  document.getElementById("contactModal").classList.remove("hidden");
}
  
function closeContactModal() {
  document.getElementById("contactModal").classList.add("hidden");
}

window.addEventListener("click", function (e) {
  const modal = document.getElementById("contactModal");
  if (e.target === modal) {
    closeContactModal();
  }
});