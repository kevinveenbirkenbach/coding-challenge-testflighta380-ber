<?php
namespace model\gui\cli\material\person;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\data\position\PositionInterface;
use interfaces\repository\output\PrintRepositoryInterface;
use interfaces\model\method\material\person\PersonInterface;
use interfaces\model\method\action\speak\SpeakInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Person extends AbstractMaterial implements PersonInterface, SpeakInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Person created.';
    
    /** 
     * @var PersonInterface
     */
    protected $origin;
    
    /**
     * @param PersonInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(PersonInterface $origin, ?PrintRepositoryInterface $repository=NULL){
        parent::__construct($origin, $repository);
    }
    
    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->repository->addString('Set Position for {0} "{1}".',[$this->getClassShortName(),$this->origin->getName()]);
        $this->origin->getPosition();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\speak\SpeakInterface::speak()
     */
    public function speak(string $sentence): void
    {
        $this->repository->addString($sentence);
    }

}