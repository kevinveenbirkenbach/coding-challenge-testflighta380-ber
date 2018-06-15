<?php
namespace model\data\material\building\tower;

use model\data\position\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportTower extends AbstractTower
{
    public function __construct(){
        $this->position = new Sky(13.04,53.04,0.0);
    }
}

