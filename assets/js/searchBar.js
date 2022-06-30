document.getElementById("button-addon1").addEventListener('click', () => {
    let searchQuery = document.getElementById('valueToSearch').value;
    window.location.href = "../views/search_products.php" + "?query=" + searchQuery;
});