document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("iframeContainer");
  const openBtn = document.getElementById("bookingButton");
  const closeBtn = document.querySelector(".close-booking");

  openBtn.addEventListener("click", () => modal.style.display = "block");
  closeBtn.addEventListener("click", () => modal.style.display = "none");

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") modal.style.display = "none";
  });
});
