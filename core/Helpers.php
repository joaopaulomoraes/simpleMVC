<?php

function view($name)
{
  return require "app/views/{$name}View.php";
}

function redirect($path)
{
  header("Location: /{$path}");
}
