document.addEventListener("DOMContentLoaded", function () {
    let rows = document.querySelectorAll(".table__items-row");
    rows.forEach(function (row) {
        row.addEventListener("click", function () {
            const itemId = row.getAttribute("data-id");
            console.log("id: ", itemId);
        });
    });
});