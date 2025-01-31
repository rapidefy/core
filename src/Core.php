<?php

namespace Rapidely\Core;

class Core
{
    public function tester()
    {
      dd("Ceci est un test")
    }

    public function getRequest() {
      return "get-request";
    }
}