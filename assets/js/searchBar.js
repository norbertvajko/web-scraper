document.getElementById("button-addon1").addEventListener('click', () => {
    let searchQuery = document.getElementById('valueToSearch').value;
    window.location.href = "../views/components/products/search_products.php" + "?query=" + searchQuery;
});