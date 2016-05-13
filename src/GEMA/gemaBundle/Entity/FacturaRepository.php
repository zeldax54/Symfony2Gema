<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * FacturaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FacturaRepository extends EntityRepository {

    public function listarDQL() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->addSelect('F')
                ->from($this->getClassName(), 'F');
        return $qb;
    }

    public function filtrar(Request $request) {
        $qb = new QueryBuilder($this->getEntityManager());
        $qb
                ->select("F,P")
                ->from($this->getClassName(), "F")
                ->leftJoin("F.proveedor", "P");


        if ($request->request->get("searchPhrase") != null) {
            $search = $request->request->get("searchPhrase");
            $qb->where($qb->expr()->like("F.precio", $qb->expr()->literal("%" . $search . "%")));
            $qb->orwhere($qb->expr()->like("F.codigo", $qb->expr()->literal("%" . $search . "%")));
            $qb->orwhere($qb->expr()->like("P.proveedor", $qb->expr()->literal("%" . $search . "%")));
        }
        if ($request->request->get("sort") != null) {
            $orden = $request->request->get("sort");
            foreach ($orden as $key => $value) {
                $qb->orderBy("F." . $key, $value);
            }
        }
        return $qb;
    }

}
