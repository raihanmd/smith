window.addEventListener("scroll", function () {
  var nav = this.document.querySelector(".navbar");
  nav.classList.toggle("sticky", this.window.scrollY > 0);
});
