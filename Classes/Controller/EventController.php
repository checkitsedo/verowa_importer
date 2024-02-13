<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaImporter\Controller;

/*
 * This file is part of the "Verowa Importer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use Checkitsedo\VerowaImporter\Domain\Model\Event;
use Checkitsedo\VerowaImporter\Domain\Repository\EventRepository;
use GeorgRinger\NumberedPagination\NumberedPagination;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;

/**
 * EventController
 */
class EventController extends ActionController
{

    /**
     * eventRepository
     *
     * @var \Checkitsedo\VerowaImporter\Domain\Repository\EventRepository
     */
    protected $eventRepository = null;

    /**
     * @param \Checkitsedo\VerowaImporter\Domain\Repository\EventRepository $eventRepository
     */
    public function injectEventRepository(\Checkitsedo\VerowaImporter\Domain\Repository\EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
		$this->cacheService->clearPageCache($pid);

        $events = $this->eventRepository->findAll();
		
		// pagination
		$itemsPerPage = 10;
		$maximumLinks = 5;
		$currentPage = $this->request->hasArgument('currentPage') ? (int)$this->request->getArgument('currentPage') : 1;
		$paginator = new \TYPO3\CMS\Extbase\Pagination\QueryResultPaginator($events, $currentPage, $itemsPerPage);
		$pagination = new \GeorgRinger\NumberedPagination\NumberedPagination($paginator, $maximumLinks);
		
		$this->view->assign('pagination', [
			'paginator' => $paginator,
			'pagination' => $pagination,
		]);
    }

    /**
     * action show
     *
     * @param \Checkitsedo\VerowaImporter\Domain\Model\Event $event
     * @return string|object|null|void
     */
    public function showAction(\Checkitsedo\VerowaImporter\Domain\Model\Event $event)
    {
        $this->view->assign('event', $event);
    }
	protected function getErrorFlashMessage()
    {
        return false;
    }
}
