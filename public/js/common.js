// ユーザードロップダウンメニューの切り替え
function toggleDropdown() {
  const dropdown = document.getElementById("userDropdown");
  dropdown.classList.toggle("active");
}

// ドロップダウン外をクリックしたら閉じる
document.addEventListener("click", function (event) {
  const navbar = document.querySelector(".navbar");
  if (!navbar.contains(event.target)) {
    document.getElementById("userDropdown").classList.remove("active");
  }
});
