<?php

namespace RandomName;

class Name
{
    public $length = 8;
    
    public function generate($length)
    {
        $this->length = $length;

        $lowerOthers = "bcdfghjklmnpqrstxz";
        $lowerVoyels = "aeiouwy";
        $upper = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
        $name = "";
        $upperlength = strlen($upper) - 1;
        $lowerOtherslength = strlen($lowerOthers) - 1;
        $lowerVoyelslength = strlen($lowerVoyels) - 1;

        for ($i=0; $i < $this->length; $i++) {
            $n = rand(0, $upperlength);
            if ($i == 0) {
                $name .= $upper[$n];
            } else {
                if (strpos($lowerVoyels, $name[$i - 1]) == true) {
                    $n2 = rand(0, $lowerOtherslength);
                    $name .= $lowerOthers[$n2];
                } else {
                    $n3 = rand(0, $lowerVoyelslength);
                    $name .= $lowerVoyels[$n3];
                }
            }
        }
        return $name;
    }
}

?>