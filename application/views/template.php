<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <html lang="en">

    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/template.css" />
        <link rel="icon" href="/img/favicon.ico" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php#home"><img src="/img/panda.png" width="100"></a>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Dashboard</a></li>
                        <li><a href="/manage">Manage</a></li>
                        <li><a href="/part">Parts</a></li>
                        <li><a href="/assembly">Assembly</a></li>
                        <li><a href="/history">History</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Roles<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#variables">Guest</a></li>
                                <li><a href="#constants">Owner</a></li>
                            </ul>
                        </li>
                        <li class="disabled"><a href="">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid titlediv">
            <h1 class="ptitle">{ptitle}</h1>
        </div>


        {content}


        <footer id="footerucorp">
            <img src="/img/umbrellacorp.png" height="50">
        </footer>
    </body>

    </html>
