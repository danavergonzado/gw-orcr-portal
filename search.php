<?php

include ('scandir.php');

class CSNumberHandler 
{
    private $response;
    private $isFound;
    private $brand;
    private $csnumber;

    public function __construct() {
        $this->handleCSNumber();
    }

    private function getBrand()
    {
        return $_POST['brand'];
    }
    private function getCSNumber()
    {
        return $_POST['cs-num'];
    }

    private function searchORCR()
    {
        $this->brand = $this->getBrand();
        $this->csnumber = $this->getCSNumber();

        // insert file scan here.............

        $data = array(
            [
                "CSNumber"      => $this->csnumber,
                "Brand"         => $this->brand,
                "UploadDate"    => "2024-01-30"
            ]
        );

        return $data;

    }

    private function handleCSNumber() 
    {
        if (isset($_POST['cs-num'])) 
        {
            $data = $this->searchORCR();
            $this->response = $data;
        } else {
            $this->response = "Search error...";
        }
    }

    public function getResponse() 
    {
        return json_encode($this->response);
    }
}

// Instantiate the class and get the response
$csHandler = new CSNumberHandler();
echo $csHandler->getResponse();

?>
