//Enumerate or list down brands
const  brands = [
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

// Sort the brands alphabetically in reverse order
brands.sort();
brands.reverse();

// Get the brands selector element
const BrandSelector = document.getElementById('brand-selector');

// Display or add brands to the selector menu (dropdown menu)
for ( let i = 0; i < brands.length; i++)
{
    let option = document.createElement("option");
    option.text = brands[i];
    option.value = brands[i];
    BrandSelector.add(option,0);
}


// Get the form and result elements
const frmCheckCSR = document.getElementById("frmCheckCSR");
const txtSearchResult = document.getElementById("txtSearchResult");

// Set form action
frmCheckCSR.action="result.php";

// Form submit event listener
frmCheckCSR.addEventListener('submit', function(e)
{
    e.preventDefault(); //prevent default form submission

    // Get form data
    var formData = new FormData(this);
   //console.log(formData.get('cs-num'));

   //fetch search results after form submit
    let url = "result.php";
    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        //Display search results
        txtSearchResult.innerHTML  = data[0].CSNumber + " is available. &nbsp;";
        txtSearchResult.innerHTML += "Click here to download.";
    })
    .catch(error => {
        console.error("Fetch error", error);
    })
        
});




8110008001647513