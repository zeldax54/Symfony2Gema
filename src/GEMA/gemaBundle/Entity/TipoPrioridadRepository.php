<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * TipoPrioridadRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoPrioridadRepository extends EntityRepository {

    public function listarDQL() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->addSelect('TP')
                ->from($this->getClassName(), 'TP');
        return $qb;
    }

    public function filtrar(Request $request) {
        $qb = new QueryBuilder($this->getEntityManager());
        $qb
                ->select("TP")
                ->from($this->getClassName(), "TP");

        if ($request->request->get("searchPhrase") != null) {
            $search = $request->request->get("searchPhrase");
            $qb->where($qb->expr()->like("TP.prioridad", $qb->expr()->literal("%" . $search . "%")));
        }
        if ($request->request->get("sort") != null) {
            $orden = $request->request->get("sort");
            foreach ($orden as $key => $value) {
                $qb->orderBy("TP." . $key, $value);
            }
        }
        return $qb;
    }

}
