<?php

namespace App\Data;

use App\Entity\Baby;
use App\Entity\Boy;
use App\Entity\Category;
use App\Entity\Girl;
use App\Entity\Toys;

class SearchData
{

    /**
     * @var string
     */
    public $fille = '';

    /**
     * @var Girl[]
     */
    public $girls = [];

    /**
     * @var string
     */
    public $garcon = '';

    /**
     * @var Boy[]
     */
    public $boys = [];

    /**
     * @var string
     */
    public $bebe = '';

    /**
     * @var Baby[]
     */

    public $babies = [];

    /**
     * @var string
     */
    public $jouet = '';

    /**
     * @var Toys[]
     */

    public $toys = [];

    /**
     * @var Category[]
     */
    public $categories = [];


    /**
     * @var null|integer
     */
    public $max;

    public $min;

}
