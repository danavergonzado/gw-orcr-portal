<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORCR Availability Checker - Portal</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
</head>
<body class="bg-gray-200 font-sans text-sm">

    <div class="h-1/4 lg:w-2/4 bg-white mx-auto mt-20 mb-5 shadow">

        <div id="header" class="h-20 bg-white">
            <div class="flex justify-between items-center px-5 py-3">
                <!-- logo-->
                <img src="img/Gateway_logo.png" alt="" width="250px">
            
                <!--Profile/logout-->
                <div class="mx-4">
                    <p class="font-bold text-base">ORCR AVAILABILITY CHECKER</p>
                </div>
            </div>
        </div>

        <div id="header-separator" class="h-full bg-green-900 p-1"></div>
        
        <!-- seach form-->
        <div id="search-bar">
            <div class="p-6">


                <form name="frmCheckCSR" id="frmCheckCSR" >
                    <div>
                       
                        <div class="flex flex-row">
                            <label for="Search" class="font-semibold mr-3 w-20 ">Brand: </label> 
                            <select name="brand" id="brand-selector" class = "border border-gray-500 py-1  w-64">
                                <option value="#">--click to see brands--</option>
                            </select>
                        </div>
                        
                        <div class="flex flex-row mt-3">
                            <label for="Search" class="font-semibold mr-3 w-20">CS Number:</label>    
                            <input  class="border border-gray-500 py-1 px-1 w-64" type="text" name="cs-num" id="cs-num">
                        </div>

                        <div>
                            <small  class="ml-24">*use uppercase in CS number input field.</small>
                        </div>

                        <div class="flex flex-row mt-3">
                            <div class="mr-3 w-20"></div>
                            <button id="btnCheckSubmit" class="bg-yellow-300 py-1 px-5 rounded-sm font-semibold  border border-gray-500">Check</button>
                        </div>
                        
                    </div> <!-- end of flex form-groups-->
                </form>
            </div>
        </div>

        <!-- search result-->
        <div class="px-5 ml-24">
            <p id="txtSearchResult"></p>
        </div>

        <div id="dl_link" class="mb-10"></div>
        <br>
        
      
    </div>
    <center>=== !! FOR INTERNAL USE ONLY !! === </center>

    <script src="script.js"></script>
</body>
</html>
