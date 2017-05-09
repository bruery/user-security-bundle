<?php
/**
 * This file is part of the Bruery Platform.
 *
 * (c) Viktore Zara <viktore.zara@gmail.com>
 * (c) Mell Zamora <mellzamora@outlook.com>
 *
 * Copyright (c) 2016. For the full copyright and license information, please view the LICENSE  file that was distributed with this source code.
 */

namespace Bruery\UserSecurityBundle\Model\Component\Manager;

use Bruery\UserSecurityBundle\Model\Component\Gateway\GatewayInterface;
use Bruery\UserSecurityBundle\Model\FrontModel\ModelInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface ManagerInterface
{
    /**
     *
     * @access public
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface       $dispatcher
     * @param \Bruery\UserSecurityBundle\Model\Component\Gateway\GatewayInterface $gateway
     */
    public function __construct($class, ManagerRegistry $registry, EventDispatcherInterface $dispatcher, GatewayInterface $gateway);

    /**
     *
     * @access public
     * @param  \Bruery\UserSecurityBundle\Model\FrontModel\ModelInterface                $model
     * @return \Bruery\UserSecurityBundle\Model\Component\Repository\RepositoryInterface
     */
    public function setModel(ModelInterface $model);

    /**
     *
     * @access public
     * @return \Bruery\UserSecurityBundle\Gateway\GatewayInterface
     */
    public function getGateway();

    /**
     *
     * @access public
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilder();

    /**
     *
     * @access public
     * @param  string                                       $column  = null
     * @param  Array                                        $aliases = null
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function createCountQuery($column = null, array $aliases = null);

    /**
     *
     * @access public
     * @param  Array                                        $aliases = null
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function createSelectQuery(array $aliases = null);

    /**
     *
     * @access public
     * @param  \Doctrine\ORM\QueryBuilder                   $qb
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function one(QueryBuilder $qb);

    /**
     *
     * @access public
     * @param  \Doctrine\ORM\QueryBuilder $qb
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function all(QueryBuilder $qb);

    /**
     *
     * @access public
     * @param  Object                                                            $entity
     * @return \Bruery\UserSecurityBundle\Model\Component\Manager\ManagerInterface
     */
    public function persist($entity);

    /**
     *
     * @access public
     * @param  Object                                                            $entity
     * @return \Bruery\UserSecurityBundle\Model\Component\Manager\ManagerInterface
     */
    public function remove($entity);

    /**
     *
     * @access public
     * @return \Bruery\UserSecurityBundle\Model\Component\Manager\ManagerInterface
     */
    public function flush();

    /**
     *
     * @access public
     * @param  Object                                                            $entity
     * @return \Bruery\UserSecurityBundle\Model\Component\Manager\ManagerInterface
     */
    public function refresh($entity);
}
