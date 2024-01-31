function enumerateBrands() {
    const brands = [
        "Mitsubishi",
        "Nissan",
        "Honda",
        "BMW",
        "Kia",
        "GAC",
        "Chery",
        "MG",
        "Peugeot",
        "Geely",
        "Fuso",
        "Hyundai",
        "Suzuki",
        "Foton",
        "Subaru",
        "Changan",
        "Volvo"
    ];

    brands.sort();
    brands.reverse();

    return brands;
}

function displayBrands(brands) {
    const brandSelector = document.getElementById('brand-selector');

    brands.forEach(brand => {
        let option = document.createElement("option");
        option.text = brand;
        option.value = brand;
        brandSelector.add(option, 0);
    });
}

function formSubmit() {
    const frmCheckCSR = document.getElementById("frmCheckCSR");
    const txtSearchResult = document.getElementById("txtSearchResult");
    frmCheckCSR.action = "result.php";
    frmCheckCSR.addEventListener('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        // Fetch search results after form submit
        let url = "result.php";
        fetch(url, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                txtSearchResult.innerHTML = data[0].CSNumber + " is available. &nbsp;";
                txtSearchResult.innerHTML += "Click here to download.";
            })
            .catch(error => {
                console.error("Fetch error", error);
            })

    });
}

// Call the functions to execute the script
const brands = enumerateBrands();
displayBrands(brands);
formSubmit();
