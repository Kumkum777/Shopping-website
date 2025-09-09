function sideButton() {
  const sidebar = document.getElementsByClassName("sidebar")[0];
  if (sidebar.style.display == "none") {
    sidebar.style.display = "flex";
  } else {
    sidebar.style.display = "none";
  }
}
