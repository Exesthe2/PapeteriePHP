<?php

namespace App\Entite;

use ArrayObject;

class Collection extends ArrayObject
{
    public function __construct()
    {
    }

    /*public function contains($item): bool
    {
        if (array_search($item, $this)) {
            return true;
        } else {
            return false;
        }
    }*/

    public function remove($item): bool
    {
        foreach ($this as $key => $value) {
            if ($value === $item) {
                $this->offsetUnset($key);
                return true;
            }
        }
        return false;
    }
}