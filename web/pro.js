var oneLikeBadge = document.getElementById("onebl");
var oneDislikeBadge = document.getElementById("onebd");
var oneLikeButton = document.getElementById("onecl");
var oneDislikeButton = document.getElementById("onecd");

oneLikeButton.onclick = function() {
  oneLikeCount += 1;
  oneLikeBadge.innerHTML = oneLikeCount.toString();
};