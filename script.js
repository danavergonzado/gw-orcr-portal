function getBrands() {
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

function addBrandsToSelector(brands) {
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
    frmCheckCSR.action = "search.php";
    frmCheckCSR.addEventListener('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        // Fetch search results after form submit
        let url = "search.php";
        fetch(url, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {

                if (!data.length == 0) {
                   // var status = data[0].CSNumber + " is available. &nbsp;";
                   var status = "Storage directory not found."; 
                }else {
                    status = "ORCR not found.";
                }

                txtSearchResult.innerHTML = status;
                
            })
            .catch(error => {
                console.error("Fetch error", error);
            })

    });
}


// initialize brands and add to brands selector
const brands = getBrands();
addBrandsToSelector(brands);

// Submit search form
const btnCheckSubmit = document.getElementById('btnCheckSubmit');
btnCheckSubmit.addEventListener('click', function(){
    formSubmit();
});

