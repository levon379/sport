<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(($this->session->userdata('is_client_login')==false))
{
    redirect('/user/login', 'location');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://sport.dev/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://sport.dev/public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://sport.dev/public/css/style.css">
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">

	
</head>

<div class="navbar navbar-inverse navbar-static-top top-head">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/add">Project name</a>
        </div>
        <div id="responsive-menu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?=base_url()?>index.php/news">News</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Menu<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url()?>index.php/admin/adminnews/newsindex">News Edit</a></li>            
                        <li><a href="<?=base_url()?>index.php/admin/adminnews">Category Edit</a></li>            
                        <li><a href="<?=base_url()?>index.php/signin/registration">Registracia</a></li>            
                        <li class="divider"></li>            
                        <li><a href="#">punkt 4</a></li>            
                    </ul>
                </li>
                <li><a href="/registracia_view">Registracia</a></li>
                <li><a href="#">punkt 4</a></li>
            </ul>
            <form action="<?=base_url()?>index.php/signin/login" class="navbar-form navbar-right hidden-sm" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="" />
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Password" value="" />
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-sign-in">Mutq</i>
                </button>
            </form>


        </div>
      
    </div>
    
</div>
    <script type="text/javascript" src="<?=base_url();?>application/libraries/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>application/libraries/bootstrap/js/jquery.js"></script>
