<?php

namespace WXR\DirectoryBundle\Entity;

use WXR\CommonBundle\Entity\BaseManager;
use WXR\DirectoryBundle\Model\ContactManagerInterface;

class ContactManager extends BaseManager implements ContactManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public function findOneBySlug($slug)
    {
        return $this->findOneBy(array('slug' => $slug));
    }

    /**
     * {@inheritDoc}
     */
    protected function buildOrderClause(QueryBuilder $qb, array $orderBy = null)
    {
        $default = array('lastname' => 'ASC');

        $orderBy = $orderBy ?
            array_merge($default, $orderBy) : $default;

        parent::buildOrderClause($qb, $orderBy);
    }
}
