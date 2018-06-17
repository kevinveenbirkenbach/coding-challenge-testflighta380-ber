<?php
namespace model\method\material\vehicle\plane;

use model\data\collection\PassengerCollection;
use model\method\material\vehicle\AbstractVehicle;
use interfaces\model\data\material\vehicle\plane\PlaneInterface as DataPlaneInterface;
use interfaces\model\data\material\person\PilotInterface;
use interfaces\model\method\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Plane extends AbstractVehicle implements PlaneInterface
{
    /**
     * @var DataPlaneInterface
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::getPassengers()
     */
    public function getPassengers(): PassengerCollection
    {
        return $this->origin->getPassengers();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::setPassengers()
     */
    public function setPassengers(PassengerCollection $passengers): void
    {
       $this->origin->setPassengers($passengers);   
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::setPilot()
     */
    public function setPilot($pilot): void
    {
       $this->origin->setPilot($pilot); 
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::getPilot()
     */
    public function getPilot(): PilotInterface
    {
        return $this->origin->getPilot();
    }

}

