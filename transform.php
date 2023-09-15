<?php
require "pdfcrowd.php";

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("FlorentViel", "dcf0e44d6c26febc09698cc359108277");

    // configure the conversion
    $client->setUsePrintMedia(true);

    // run the conversion and write the result to a file
    $client->convertFileToFile("cv.html", "vieville_florent_cv.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>