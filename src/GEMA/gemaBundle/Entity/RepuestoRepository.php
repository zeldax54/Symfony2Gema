<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * RepuestoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RepuestoRepository extends EntityRepository {

    public function listarDQL() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->addSelect('R')
                ->from($this->getClassName(), 'R');
        return $qb;
    }

    public function filtrar(Request $request) {
        $qb = new QueryBuilder($this->getEntityManager());
        $qb
                ->select("R")
                ->from("gemaBundle:Repuesto", "R");

        if ($request->request->get("searchPhrase") != null) {
            $search = $request->request->get("searchPhrase");
            $qb->where($qb->expr()->like("R.nombre", $qb->expr()->literal("%" . $search . "%")));
        }
        if ($request->request->get("sort") != null) {
            $orden = $request->request->get("sort");
            foreach ($orden as $key => $value) {
                $qb->orderBy("R." . $key, $value);
            }
        }
        return $qb;
    }

}