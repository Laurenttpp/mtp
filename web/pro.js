var oneLikeBadge = document.getElementById("onebl");
var oneDislikeBadge = document.getElementById("onebd");
var oneLikeButton = document.getElementById("onecl");
var oneDislikeButton = document.getElementById("onecd");
var oneLikeCount = 0;
var oneDislikeCount = 0;

oneLikeButton.onclick = function() {
	oneLikeCount += 1;
	oneLikeBadge.innerHTML = oneLikeCount.toString();
};

oneDislikeButton.onclick = function() {
	oneDislikeCount += 1;
	oneDislikeBadge.innerHTML = oneDislikeCount.toString();
};