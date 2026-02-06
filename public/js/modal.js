//functions to open and close a modal for creating todo list

function openModal() {
    document.getElementById("todoModal").classList.remove("hidden");
    document.getElementById("todoModal").classList.add("flex");
}
function closeModal() {
    document.getElementById("todoModal").classList.add("hidden");
    document.getElementById("todoModal").classList.remove("flex");
}
