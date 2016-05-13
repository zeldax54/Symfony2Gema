<?php

namespace GEMA\gemaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager; 
use GEMA\gemaBundle\Entity\TipoPrioridad;

class Prioridad extends AbstractFixture implements OrderedFixtureInterface {
    public function load(ObjectManager $manager) {
        $prioridad = array(            
            array('prioridad' => 'NORMAL', 'descripcion' => 'El mantenimiento debe comenzar dentro de las próximas 48H'),
            array('prioridad' => 'EMERGENCIA', 'descripcion' => 'El mantenimiento debe comenzar de inmediato'),
            array('prioridad' => 'URGENTE', 'descripcion' => 'El mantenimiento debe comenzar dentro de las próximas 24H'),
            array('prioridad' => 'APLAZABLE', 'descripcion' => 'Cuando se cuente con los recursos o en el período de una parada'),
        );
        
        foreach ($prioridad as $p){
            $entidad = new TipoPrioridad();
            $entidad->setPrioridad($p['prioridad']);
            $entidad->setDescripcion($p['descripcion']);
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 2;
    }

}