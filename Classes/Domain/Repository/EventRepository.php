<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaImporter\Domain\Repository;

/**
 * This file is part of the "Verowa Importer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The repository for Events
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
  /**
   * Returns all objects of this repository.
   *
   * @return QueryResultInterface|array
   * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
   */
  public function findAll()
  {
    $query = $this->createQuery();
    $query->matching(
      $query->greaterThanOrEqual('date_from', time())
      );
    $query->setOrderings(['date_from' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);

    return $query->execute();
  }

  /**
   * Returns events greater then specified date.
   * 
   * @param \DateTime $dateFrom
   * @return QueryResultInterface|array
   */
  public function findWhereDateGreaterThen()
  {
    $query = $this->createQuery();
    $date = new \DateTime('now');
    $query->matching(
      $query->greaterThanOrEqual('date_from', $date->format('Y-m-d H:i:s'))
    );
    $query->setOrderings(['date_from' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);

    return $query->execute();
  }
	
}
