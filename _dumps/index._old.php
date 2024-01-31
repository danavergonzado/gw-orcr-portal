<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORCR Availability Checker - Portal
    </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body class="bg-gray-200 font-sans text-sm">

    <div class="h-2/4 lg:w-3/5 bg-white mx-auto mt-10 mb-5 shadow">

        <div id="header" class="h-20 bg-white">
            <div class="flex justify-between items-center px-5 py-3">
                <!-- logo-->
                <img src="img/Gateway_logo.png" alt="" width="250px">
            
                <!--Profile/logout-->
                <div class="mx-4">
                    <span class="text-red-700 font-bold">NOTE: Use UPPERCASE in CS# input field.</span>
                </div>
            </div>
        </div>

        <div id="navigation" class="h-full bg-blue-900">
            <nav class="p-4">
                <ul class="flex items-center justify-between">
                    <li class="mr-5 text-yellow-300 text-xl font-semibold">ORCR AVAILABILITY CHECKER</li>
                </ul>
            </nav>
        </div>
        
        <!-- seach bar-->
        <div id="search-bar">
            <div class="p-6">
                <form action="#" method="POST">

                    <div class="flex">

                        <div class="form-group1">
                            <label for="Search" class="font-semibold">BRAND: </label> 
                            <select name="brand" class = "border border-gray-500 py-1 px-10">
                                <option value="">--select--</option>
                                <option value="BMW">BMW</option>
								<option value="CHERY">CHERY</option>
								<option value="FOTON">FOTON</option>
				                <option value="FUSO">FUSO</option>
                                <option value="GAC">GAC</option>
								<option value="GEELY">GEELY</option>
								<option value="HONDA">HONDA</option>
								<option value="HYUNDAI">HYUNDAI</option>
								<option value="KIA">KIA</option>
								<option value="MITSUBISHI">MITSUBISHI</option>
								<option value="MG">MG</option>
								<option value="NISSAN">NISSAN</option>
								<option value="MAXUS">MAXUS</option>
								<option value="PEUGEOT">PEUGEOT</option>
								<option value="SUBARU">SUBARU</option>
								<option value="SUZUKI">SUZUKI</option>
								<option value="CHEVROLET">CHEVROLET</option>
								<option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                <option value="CHANGAN">CHANGAN</option>
							    <option value="VOLVO">VOLVO</option>
                                <option value="JETOUR">JETOUR</option>
                            </select>
                        </div>

                        <div class="form-group2 ml-10">
                            <label for="Search" class="font-semibold">CS NO.:</label>    
                            <input  class="border border-gray-500 py-1" type="text" name="cs-num" >
                        </div>
                    
                        <div class="form-group3 ml-2">
                            <button type="submit" class="bg-yellow-300 py-1 px-5 rounded-sm font-semibold">SEARCH</button>
                        </div> 

                    </div> <!-- end of form-groups-->
                </form>
            </div>
        </div>

        <!-- search result-->
        <div class="py-2 px-6 ">

        </div>

        <div id="dl_link" class="mb-10"></div>
        <br>
        
      
    </div>
    <center>=== !! FOR INTERNAL USE ONLY !! === </center>

</body>
</html>
