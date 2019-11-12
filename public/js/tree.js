$(function () {
    // 6 create an instance when the DOM is ready
    $('#tree_js').jstree();
    // 7 bind to events triggered on the tree
    $('#tree_js').on("changed.jstree", function (e, data) {
        console.log(data.selected);
    });
});

window.onscroll = function () {
    scrollFunction();
};
let treeTop = document.getElementById("treeTop");
if (treeTop) {
    treeTop.onclick = function () {
        topFunction();
    };
}

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        if(treeTop)
        treeTop.style.display = "block";
    } else {
        if(treeTop)
        treeTop.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
