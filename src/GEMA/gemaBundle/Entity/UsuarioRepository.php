<?php

namespace GEMA\gemaBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends EntityRepository {

    public function listarDQL() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->addSelect('U')
                ->from($this->getClassName(), 'U');
        return $qb;
    }

    public function filtrar(Request $request) {
        $qb = new QueryBuilder($this->getEntityManager());
        $qb
                ->select("U,R")
                ->from($this->getClassName(), "U")
                ->leftJoin("U.roles", "R");

        if ($request->request->get("searchPhrase") != null) {
            $search = $request->request->get("searchPhrase");
            $qb->where($qb->expr()->like("U.usuario", $qb->expr()->literal("%" . $search . "%")));
        }
        if ($request->request->get("sort") != null) {
            $orden = $request->request->get("sort");
            foreach ($orden as $key => $value) {
                $qb->orderBy("U." . $key, $value);
            }
        }
        return $qb;
    }

}
