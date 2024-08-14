// ========= entry page =======
if (document.getElementById("entrypage")) {
  //
  $(window).on("load", function () {
    let hash = window.location.hash.substring(1);
    if (hash == 2) {
      $('#tabContact').click();
    } else {
      $('#tabRecruit').click();
    }
  });
  //
  const tabs = document.querySelectorAll(".js-entry-nav li");
  const contents = document.querySelectorAll(".js-entry-content");

  tabs.forEach((tab) =>
    tab.addEventListener("click", function () {
      tabs.forEach((tab) => tab.classList.remove("active"));
      contents.forEach((c) => c.classList.remove("show-content"));
      const contentId = this.dataset.content;
      this.classList.add("active");
      document
        .querySelector(`.js-entry-content[data-content="${contentId}"]`)
        .classList.add("show-content");
    })
  );
}

// ========= lazy loading =======
$("main img")
  .on("load", function () {
    // when the browser cache is disabled, only this code doesn't work:
    $(this).addClass("loaded");
    // console.log("image loaded correctly");
  })
  .each(function () {
    // to make it work you have to add, catch when image is cache
    if ($(this).prop("complete")) $(this).addClass("loaded");
  });
