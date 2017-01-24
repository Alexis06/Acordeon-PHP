<?php

class custom
{
    public function charset()
    {
        print(' <meta charset="utf-8"> ');
    }
    public function http()
    {
        print(' <meta http-equiv="X-UA-Compatible" content="IE=edge"> ');
    }
    public function viewport()
    {
        print(' <meta name="viewport" content="width=device-width, initial-scale=1"> ');
    }
    public function icons()
    {
        print(' <link href="https://file.myfontastic.com/MTmnqTBVLmiwrReRmMVUhB/icons.css" rel="stylesheet"> ');
    }
    public function fonts()
    {
        print(' <link href="https://fonts.googleapis.com/css?family=Lustria|Playfair+Display|Poppins" rel="stylesheet"> ');
    }
    public function layoutCSS()
    {
        print(' <link rel="stylesheet" href="../Controller/css/style.css"> ');
    }
    public function bootstrapCSS()
    {
        print(' <link rel="stylesheet" href="../Controller/css/bootstrap.min.css"> ');
    }
    public function jQuery()
    {
        print(' <script src="../Controller/js/jquery-3.1.1.min.js"></script> ');
    }
    public function bootstrapJS()
    {
        print(' <script src="..Controller/js/bootstrap.min.js"></script> ');
    }
    public function funtions()
    {
        print(' <script src="../Controller/js/funtions.js"></script> ');
    }
}

?>
