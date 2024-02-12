<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaImporter\Domain\Model;

/*
 * This file is part of the "Verowa Importer" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
 
/**
 * Event
 */
class Event extends AbstractEntity
{

  /**
   * eventId
   *
   * @var int
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $eventId = 0:

  /**
   * dateFrom
   *
   * @var int
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $dateFrom = 0;

  /**
   * dateTo
   *
   * @var int
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $dateTo = 0;

  /**
   * dateText
   *
   * @var string
   */
  protected $dateText = '';

  /**
   * hideTime
   *
   * @var bool
   */
  protected $hideTime = false;

  /**
   * title
   *
   * @var string
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $title = '';

  /**
   * topic
   *
   * @var string
   */
  protected $topic = '';

  /**
   * shortDesc
   *
   * @var string
   */
  protected $shortDesc = '';

  /**
   * longDesc
   *
   * @var string
   */
  protected $longDesc = '';

  /**
   * organizer
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
   */
  protected $organizer = null;

  /**
   * coorganizers
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
   */
  protected $coorganizers = null;

  /**
   * furtherCoorganizer
   *
   * @var string
   */
  protected $furtherCoorganizer = '';

  /**
   * service1
   *
   * @var int
   */
  protected $service1 = 0;

  /**
   * service1Label
   *
   * @var string
   */
  protected $service1Label = '';

  /**
   * service2
   *
   * @var int
   */
  protected $service2 = 0;

  /**
   * service2Label
   *
   * @var string
   */
  protected $service2Label = '';

  /**
   * service3
   *
   * @var int
   */
  protected $service3 = 0;

  /**
   * service3Label
   *
   * @var string
   */
  protected $service3Label = '';

  /**
   * service4
   *
   * @var int
   */
  protected $service4 = 0;

  /**
   * service4Label
   *
   * @var string
   */
  protected $service4Label = '';

  /**
   * service5
   *
   * @var int 
   */
  protected $service5 = 0;

  /**
   * service5Label
   *
   * @var string
   */
  protected $service5Label = '';

  /**
   * service6
   *
   * @var int 
   */
  protected $service6 = 0;

  /**
   * service6Label
   *
   * @var string
   */
  protected $service6Label = '';

  /**
   * service7
   *
   * @var int 
   */
  protected $service7 = 0;

  /**
   * service7Label
   *
   * @var string
   */
  protected $service7Label = '';

  /**
   * service8
   *
   * @var int 
   */
  protected $service8 = 0;

  /**
   * service8Label
   *
   * @var string
   */
  protected $service8Label = '';

  /**
   * lectors
   *
   * @var int 
   */
  protected $lectors = 0;

  /**
   * lectorsLabel
   *
   * @var string
   */
  protected $lectorsLabel = '';

  /**
   * organists
   *
   * @var int 
   */
  protected $organists = 0;

  /**
   * organistsLabel
   *
   * @var string
   */
  protected $organistsLabel = '';

  /**
   * vergers
   *
   * @var int 
   */
  protected $vergers = 0;

  /**
   * vergersLabel
   *
   * @var string
   */
  protected $vergersLabel = '';

  /**
   * catering
   *
   * @var string
   */
  protected $catering = '';

  /**
   * withSacrament
   *
   * @var bool
   */
  protected $withSacrament = false;

  /**
   * childcareId
   *
   * @var int 
   */
  protected $childcareId = 0;

  /**
   * childcareText
   *
   * @var string
   */
  protected $childcareText = '';

  /**
   * childcarePerson
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
   */
  protected $childcarePerson = null;

  /**
   * additionalText1
   *
   * @var string
   */
  protected $additionalText1 = '';

  /**
   * additionalText1Label
   *
   * @var string
   */
  protected $additionalText1Label = '';

  /**
   * additionalText2
   *
   * @var string
   */
  protected $additionalText2 = '';

  /**
   * additionalText2Label
   *
   * @var string
   */
  protected $additionalText2Label = '';

  /**
   * additionalText4
   *
   * @var string
   */
  protected $additionalText4 = '';

  /**
   * additionalText4Label
   *
   * @var string
   */
  protected $additionalText4Label = '';

  /**
   * subsModuleActive
   *
   * @var bool
   */
  protected $subsModuleActive = false;

  /**
   * subsDate
   *
   * @var int 
   */
  protected $subsDate = 0;

  /**
   * subsText
   *
   * @var string
   */
  protected $subsText = '';

  /**
   * subsPersonId
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
   */
  protected $subsPersonId = null;

  /**
   * datetimeText
   *
   * @var string
   */
  protected $datetimeText = '';

  /**
   * urlEventDetails
   *
   * @var string
   */
  protected $urlEventDetails = '';

  /**
   * baptismOfferId
   *
   * @var int 
   */
  protected $baptismOfferId = 0;

  /**
   * baptismOfferText
   *
   * @var string
   */
  protected $baptismOfferText = '';

  /**
   * collection
   *
   * @var int 
   */
  protected $collection = 0;

  /**
   * targetGroups
   *
   * @var int 
   */
  protected $targetGroups = 0;

  /**
   * layers
   *
   * @var int 
   */
  protected $layers = 0;

  /**
   * rooms
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Room>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
   */
  protected $rooms = null;

  protected $files = null;

  /**
   * imageUrl
   *
   * @var string
   */
  protected $imageUrl = '';

  /**
   * imageWidth
   *
   * @var int 
   */
  protected $imageWidth = 0;

  /**
   * imageHeight
   *
   * @var int 
   */
  protected $imageHeight = 0;

  /**
   * listImageUrl
   *
   * @var string
   */
  protected $listImageUrl = '';

  /**
   * __construct
   */
  public function __construct()
  {
    // Do not remove the next line: It would break the functionality
    $this->initializeObject();
  }

  /**
   * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
   * Do not modify this method!
   * It will be rewritten on each save in the extension builder
   * You may modify the constructor of this class instead
   *
   * @return void
   */
  public function initializeObject()
  {
    $this->person = $this->person ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    $this->room = $this->room ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
  }

  /**
   * Returns the eventId
   *
   * @return int $eventId
   */
  public function getEventId(): int
  {
    return $this->eventId;
  }

  /**
   * Sets the eventId
   *
   * @param int $eventId
   * @return void
   */
  public function setEventId(int $eventId)
  {
    $this->eventId = $eventId;
  }

  /**
   * Returns the dateFrom
   *
   * @return \DateTime $dateFrom
   */
  public function getDateFrom(): \DateTime
  {
    return $this->dateFrom;
  }

  /**
   * Sets the dateFrom
   *
   * @param \DateTime $dateFrom
   * @return void
   */
  public function setDateFrom(\DateTime $dateFrom)
  {
    $this->dateFrom = $dateFrom;
  }

  /**
   * Returns the dateTo
   *
   * @return \DateTime $dateTo
   */
  public function getDateTo(): \DateTime
  {
    return $this->dateTo;
  }

  /**
   * Sets the dateTo
   *
   * @param \DateTime $dateTo
   * @return void
   */
  public function setDateTo(\DateTime $dateTo)
  {
    $this->dateTo = $dateTo;
  }

  /**
   * Returns the dateText
   *
   * @return string $dateText
   */
  public function getDateText(): string
  {
    return $this->dateText;
  }

  /**
   * Sets the dateText
   *
   * @param string $dateText
   * @return void
   */
  public function setDateText(string $dateText)
  {
    $this->dateText = $dateText;
  }

  /**
   * Returns the hideTime
   *
   * @return bool $hideTime
   */
  public function getHideTime(): bool
  {
    return $this->hideTime;
  }

  /**
   * Sets the hideTime
   *
   * @param bool $hideTime
   * @return void
   */
  public function setHideTime(bool $hideTime)
  {
    $this->hideTime = $hideTime;
  }

  /**
   * Returns the organizer
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person> $organizer
   */
  public function getOrganizer(): ObjectStorage
  {
    return $this->organizer;
  }

  /**
   * Sets the organizer
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person> $organizer
   * @return void
   */
  public function setOrganizer(ObjectStorage $organizer)
  {
    $this->organizer = $organizer;
  }

  /**
   * Returns the coorganizers
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person> $coorganizers
   */
  public function getCoorganizers(): ObjectStorage
  {
    return $this->coorganizers;
  }

  /**
   * Sets the cooorganizers
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Person> $cooorganizers
   * @return void
   */
  public function setCoorganizers(ObjectStorage $cooorganizers)
  {
    $this->cooorganizers = $cooorganizers;
  }

  /**
   * Returns the furtherCoorganizer
   *
   * @return string $furtherCoorganizer
   */
  public function getFurtherCoorganizer(): string
  {
    return $this->furtherCoorganizer;
  }

  /**
   * Sets the furtherCoorganizer
   *
   * @param string $furtherCoorganizer
   * @return void
   */
  public function setFurtherCoorganizer(string $furtherCoorganizer)
  {
    $this->furtherCoorganizer = $furtherCoorganizer;
  }

  /**
   * Returns the service1
   *
   * @return int $service1
   */
  public function getService1(): int
  {
    return $this->service1;
  }

  /**
   * Sets the service1
   *
   * @param int $service1
   * @return void
   */
  public function setService1(int $service1)
  {
    $this->service1 = $service1;
  }

  /**
   * Returns the service1Label
   *
   * @return string $service1Label
   */
  public function getService1Label(): string
  {
    return $this->service1Label;
  }

  /**
   * Sets the service1Label
   *
   * @param string $service1Label
   * @return void
   */
  public function setService1Label(string $service1Label)
  {
    $this->service1Label = $service1Label;
  }

  /**
   * Returns the service2
   *
   * @return int $service2
   */
  public function getService2(): int
  {
    return $this->service2;
  }

  /**
   * Sets the service2
   *
   * @param int $service2
   * @return void
   */
  public function setService2(int $service2)
  {
    $this->service2 = $service2;
  }

  /**
   * Returns the service2Label
   *
   * @return string $service2Label
   */
  public function getService2Label(): string
  {
    return $this->service2Label;
  }

  /**
   * Sets the service2Label
   *
   * @param string $service2Label
   * @return void
   */
  public function setService2Label(string $service2Label)
  {
    $this->service2Label = $service2Label;
  }

  /**
   * Returns the service3
   *
   * @return int $service3
   */
  public function getService3(): int
  {
    return $this->service3;
  }

  /**
   * Sets the service3
   *
   * @param int $service3
   * @return void
   */
  public function setService3(int $service3)
  {
    $this->service3 = $service3;
  }

  /**
   * Returns the service3Label
   *
   * @return string $service3Label
   */
  public function getService3Label(): string
  {
    return $this->service3Label;
  }

  /**
   * Sets the service3Label
   *
   * @param string $service3Label
   * @return void
   */
  public function setService3Label(string $service3Label)
  {
    $this->service3Label = $service3Label;
  }

  /**
   * Returns the service4
   *
   * @return int $service4
   */
  public function getService4(): int
  {
    return $this->service4;
  }

  /**
   * Sets the service4
   *
   * @param int $service4
   * @return void
   */
  public function setService4(int $service4)
  {
    $this->service4 = $service4;
  }

  /**
   * Returns the service4Label
   *
   * @return string $service4Label
   */
  public function getService4Label(): string
  {
    return $this->service4Label;
  }

  /**
   * Sets the service4Label
   *
   * @param string $service4Label
   * @return void
   */
  public function setService4Label(string $service4Label)
  {
    $this->service4Label = $service4Label;
  }

  /**
   * Returns the service5
   *
   * @return int $service5
   */
  public function getService5(): int
  {
    return $this->service5;
  }

  /**
   * Sets the service5
   *
   * @param int $service5
   * @return void
   */
  public function setService5(int $service5)
  {
    $this->service5 = $service5;
  }

  /**
   * Returns the service5Label
   *
   * @return string $service5Label
   */
  public function getService5Label(): string
  {
    return $this->service5Label;
  }

  /**
   * Sets the service5Label
   *
   * @param string $service5Label
   * @return void
   */
  public function setService5Label(string $service5Label)
  {
    $this->service5Label = $service5Label;
  }

  /**
   * Returns the service6
   *
   * @return int $service6
   */
  public function getService6(): int
  {
    return $this->service6;
  }

  /**
   * Sets the service6
   *
   * @param int $service6
   * @return void
   */
  public function setService6(int $service6)
  {
    $this->service6 = $service6;
  }

  /**
   * Returns the service6Label
   *
   * @return string $service6Label
   */
  public function getService6Label(): string
  {
    return $this->service6Label;
  }

  /**
   * Sets the service6Label
   *
   * @param string $service6Label
   * @return void
   */
  public function setService6Label(string $service6Label)
  {
    $this->service6Label = $service6Label;
  }

  /**
   * Returns the service7
   *
   * @return int $service7
   */
  public function getService7(): int
  {
    return $this->service7;
  }

  /**
   * Sets the service7
   *
   * @param int $service7
   * @return void
   */
  public function setService7(int $service7)
  {
    $this->service7 = $service7;
  }

  /**
   * Returns the service7Label
   *
   * @return string $service7Label
   */
  public function getService7Label(): string
  {
    return $this->service7Label;
  }

  /**
   * Sets the service7Label
   *
   * @param string $service7Label
   * @return void
   */
  public function setService7Label(string $service7Label)
  {
    $this->service7Label = $service7Label;
  }

  /**
   * Returns the service8
   *
   * @return int $service8
   */
  public function getService8(): int
  {
    return $this->service8;
  }

  /**
   * Sets the service8
   *
   * @param int $service8
   * @return void
   */
  public function setService8(int $service8)
  {
    $this->service8 = $service8;
  }

  /**
   * Returns the service8Label
   *
   * @return string $service8Label
   */
  public function getService8Label(): string
  {
    return $this->service8Label;
  }

  /**
   * Sets the service8Label
   *
   * @param string $service8Label
   * @return void
   */
  public function setService8Label(string $service8Label)
  {
    $this->service8Label = $service8Label;
  }

  /**
   * Returns the lectors
   *
   * @return int $lectors
   */
  public function getLectors(): int
  {
    return $this->lectors;
  }

  /**
   * Sets the lectors
   *
   * @param int $lectors
   * @return void
   */
  public function setLectors(int $lectors)
  {
    $this->lectors = $lectors;
  }

  /**
   * Returns the lectorsLabel
   *
   * @return string $lectorsLabel
   */
  public function getLectorsLabel(): string
  {
    return $this->lectorsLabel;
  }

  /**
   * Sets the lectorsLabel
   *
   * @param string $lectorsLabel
   * @return void
   */
  public function setLectorsLabel(string $lectorsLabel)
  {
    $this->lectorsLabel = $lectorsLabel;
  }

  /**
   * Returns the organists
   *
   * @return int $organists
   */
  public function getOrganists(): int
  {
    return $this->organists;
  }

  /**
   * Sets the organists
   *
   * @param int $organists
   * @return void
   */
  public function setOrganists(int $organists)
  {
    $this->organists = $organists;
  }

  /**
   * Returns the organistsLabel
   *
   * @return string $organistsLabel
   */
  public function getOrganistsLabel(): string
  {
    return $this->organistsLabel;
  }

  /**
   * Sets the organistsLabel
   *
   * @param string $organistsLabel
   * @return void
   */
  public function setOrganistsLabel(string $organistsLabel)
  {
    $this->organistsLabel = $organistsLabel;
  }

  /**
   * Returns the vergers
   *
   * @return int $vergers
   */
  public function getVergers(): int
  {
    return $this->vergers;
  }

  /**
   * Sets the vergers
   *
   * @param int $vergers
   * @return void
   */
  public function setVergers(int $vergers)
  {
    $this->vergers = $vergers;
  }

  /**
   * Returns the vergersLabel
   *
   * @return string $vergersLabel
   */
  public function getVergersLabel(): string
  {
    return $this->vergersLabel;
  }

  /**
   * Sets the vergersLabel
   *
   * @param string $vergersLabel
   * @return void
   */
  public function setVergersLabel(string $vergersLabel)
  {
    $this->vergersLabel = $vergersLabel;
  }

  /**
   * Returns the catering
   *
   * @return string $catering
   */
  public function getCatering(): string
  {
    return $this->catering;
  }

  /**
   * Sets the catering
   *
   * @param string $catering
   * @return void
   */
  public function setCatering(string $catering)
  {
    $this->catering = $catering;
  }

  /**
   * Returns the withSacrament
   *
   * @return bool $withSacrament
   */
  public function getWithSacrament(): bool
  {
    return $this->withSacrament;
  }

  /**
   * Sets the withSacrament
   *
   * @param bool $withSacrament
   * @return void
   */
  public function setWithSacrament(bool $withSacrament)
  {
    $this->withSacrament = $withSacrament;
  }

  /**
   * Returns the childcareId
   *
   * @return int $childcareId
   */
  public function getChildcareId(): int
  {
    return $this->childcareId;
  }

  /**
   * Sets the childcareId
   *
   * @param int $childcareId
   * @return void
   */
  public function setChildcareId(int $childcareId)
  {
    $this->childcareId = $childcareId;
  }

  /**
   * Returns the childcareText
   *
   * @return string $childcareText
   */
  public function getChildcareText(): string
  {
    return $this->childcareText;
  }

  /**
   * Sets the childcareText
   *
   * @param string $childcareText
   * @return void
   */
  public function setChildcareText(string $childcareText)
  {
    $this->childcareText = $childcareText;
  }

  /**
   * Returns the childcarePerson
   *
   * @return int $childcarePerson
   */
  public function getChildcarePerson(): int
  {
    return $this->childcarePerson;
  }

  /**
   * Sets the childcarePerson
   *
   * @param int $childcarePerson
   * @return void
   */
  public function setChildcarePerson(int $childcarePerson)
  {
    $this->childcarePerson = $childcarePerson;
  }

  /**
   * Returns the additionalText1
   *
   * @return string $additionalText1
   */
  public function getAdditionalText1(): string
  {
    return $this->additionalText1;
  }

  /**
   * Sets the additionalText1
   *
   * @param string $additionalText1
   * @return void
   */
  public function setAdditionalText1(string $additionalText1)
  {
    $this->additionalText1 = $additionalText1;
  }

  /**
   * Returns the additionalText1Label
   *
   * @return string $additionalText1Label
   */
  public function getAdditionalText1Label(): string
  {
    return $this->additionalText1Label;
  }

  /**
   * Sets the additionalText1Label
   *
   * @param string $additionalText1Label
   * @return void
   */
  public function setAdditionalText1Label(string $additionalText1Label)
  {
    $this->additionalText1Label = $additionalText1Label;
  }

  /**
   * Returns the additionalText2
   *
   * @return string $additionalText2
   */
  public function getAdditionalText2(): string
  {
    return $this->additionalText2;
  }

  /**
   * Sets the additionalText2
   *
   * @param string $additionalText2
   * @return void
   */
  public function setAdditionalText2(string $additionalText2)
  {
    $this->additionalText2 = $additionalText2;
  }

  /**
   * Returns the additionalText2Label
   *
   * @return string $additionalText2Label
   */
  public function getAdditionalText2Label(): string
  {
    return $this->additionalText2Label;
  }

  /**
   * Sets the additionalText2Label
   *
   * @param string $additionalText2Label
   * @return void
   */
  public function setAdditionalText2Label(string $additionalText2Label)
  {
    $this->additionalText2Label = $additionalText2Label;
  }

  /**
   * Returns the additionalText4
   *
   * @return string $additionalText4
   */
  public function getAdditionalText4(): string
  {
    return $this->additionalText4;
  }

  /**
   * Sets the additionalText4
   *
   * @param string $additionalText4
   * @return void
   */
  public function setAdditionalText4(string $additionalText4)
  {
    $this->additionalText4 = $additionalText4;
  }

  /**
   * Returns the additionalText4Label
   *
   * @return string $additionalText4Label
   */
  public function getAdditionalText4Label(): string
  {
    return $this->additionalText4Label;
  }

  /**
   * Sets the additionalText4Label
   *
   * @param string $additionalText4Label
   * @return void
   */
  public function setAdditionalText4Label(string $additionalText4Label)
  {
    $this->additionalText4Label = $additionalText4Label;
  }

  /**
   * Returns the subsModuleActive
   *
   * @return bool $subsModuleActive
   */
  public function getSubsModuleActive(): bool
  {
    return $this->subsModuleActive;
  }

  /**
   * Sets the subsModuleActive
   *
   * @param bool $subsModuleActive
   * @return void
   */
  public function setSubsModuleActive(bool $subsModuleActive)
  {
    $this->subsModuleActive = $subsModuleActive;
  }

  /**
   * Returns the subsDate
   *
   * @return \DateTime $subsDate
   */
  public function getSubsDate(): ?\DateTime
  {
    return $this->subsDate;
  }

  /**
   * Sets the subsDate
   *
   * @param \DateTime $subsDate
   * @return void
   */
  public function setSubsDate(?\DateTime $subsDate)
  {
    $this->subsDate = $subsDate;
  }

  /**
   * Returns the subsText
   *
   * @return string $subsText
   */
  public function getSubsText(): string
  {
    return $this->subsText;
  }

  /**
   * Sets the subsText
   *
   * @param string $subsText
   * @return void
   */
  public function setSubsText(string $subsText)
  {
    $this->subsText = $subsText;
  }

  /**
   * Returns the subsPersonId
   *
   * @return int $subsPersonId
   */
  public function getSubsPersonId(): int
  {
    return $this->subsPersonId;
  }

  /**
   * Sets the subsPersonId
   *
   * @param int $subsPersonId
   * @return void
   */
  public function setSubsPersonId(int $subsPersonId)
  {
    $this->subsPersonId = $subsPersonId;
  }

  /**
   * Returns the datetimeText
   *
   * @return string $datetimeText
   */
  public function getDatetimeText(): string
  {
    return $this->datetimeText;
  }

  /**
   * Sets the datetimeText
   *
   * @param string $datetimeText
   * @return void
   */
  public function setDatetimeText(string $datetimeText)
  {
    $this->datetimeText = $datetimeText;
  }

  /**
   * Returns the urlEventDetails
   *
   * @return string $urlEventDetails
   */
  public function getUrlEventDetails(): string
  {
    return $this->urlEventDetails;
  }

  /**
   * Sets the urlEventDetails
   *
   * @param string $urlEventDetails
   * @return void
   */
  public function setUrlEventDetails(string $urlEventDetails)
  {
    $this->urlEventDetails = $urlEventDetails;
  }

  /**
   * Returns the baptismOfferId
   *
   * @return int $baptismOfferId
   */
  public function getBaptismOfferId(): int
  {
    return $this->baptismOfferId;
  }

  /**
   * Sets the baptismOfferId
   *
   * @param int $baptismOfferId
   * @return void
   */
  public function setBaptismOfferId(int $baptismOfferId)
  {
    $this->baptismOfferId = $baptismOfferId;
  }

  /**
   * Returns the baptismOfferText
   *
   * @return string $baptismOfferText
   */
  public function getBaptismOfferText(): string
  {
    return $this->baptismOfferText;
  }

  /**
   * Sets the baptismOfferText
   *
   * @param string $baptismOfferText
   * @return void
   */
  public function setBaptismOfferText(string $baptismOfferText)
  {
    $this->baptismOfferText = $baptismOfferText;
  }

  /**
   * Returns the collection
   *
   * @return int $collection
   */
  public function getCollection(): int
  {
    return $this->collection;
  }

  /**
   * Sets the collection
   *
   * @param int $collection
   * @return void
   */
  public function setCollection(int $collection)
  {
    $this->collection = $collection;
  }

  /**
   * Returns the targetGroups
   *
   * @return int $targetGroups
   */
  public function getTargetGroups(): int
  {
    return $this->targetGroups;
  }

  /**
   * Sets the targetGroups
   *
   * @param int $targetGroups
   * @return void
   */
  public function setTargetGroups(int $targetGroups)
  {
    $this->targetGroups = $targetGroups;
  }

  /**
   * Returns the layers
   *
   * @return int $layers
   */
  public function getLayers(): int
  {
    return $this->layers;
  }

  /**
   * Sets the layers
   *
   * @param int $layers
   * @return void
   */
  public function setLayers(int $layers)
  {
    $this->layers = $layers;
  }

  /**
   * Returns the rooms
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Room> $rooms
   */
  public function getRooms(): ObjectStorage
  {
    return $this->rooms;
  }

  /**
   * Sets the rooms
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\Room> $rooms
   * @return void
   */
  public function setRooms(ObjectStorage $rooms)
  {
    $this->rooms = $rooms;
  }

  /**
   * Returns the files
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\File> $files
   */
  public function getFiles(): ObjectStorage
  {
    return $this->files;
  }

  /**
   * Sets the files
   *
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaImporter\Domain\Model\File> $files
   * @return void
   */
  public function setFiles(ObjectStorage $files)
  {
    $this->files = $files;
  }

  /**
   * Returns the imageUrl
   *
   * @return string $imageUrl
   */
  public function getImageUrl(): string
  {
    return $this->imageUrl;
  }

  /**
   * Sets the imageUrl
   *
   * @param string $imageUrl
   * @return void
   */
  public function setImageUrl(string $imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  /**
   * Returns the imageWidth
   *
   * @return int $imageWidth
   */
  public function getImageWidth(): int
  {
    return $this->imageWidth;
  }

  /**
   * Sets the imageWidth
   *
   * @param int $imageWidth
   * @return void
   */
  public function setImageWidth(int $imageWidth)
  {
    $this->imageWidth = $imageWidth;
  }

  /**
   * Returns the imageHeight
   *
   * @return int $imageHeight
   */
  public function getImageHeight(): int
  {
    return $this->imageHeight;
  }

  /**
   * Sets the imageHeight
   *
   * @param int $imageHeight
   * @return void
   */
  public function setImageHeight(int $imageHeight)
  {
    $this->imageHeight = $imageHeight;
  }

  /**
   * Returns the listImageUrl
   *
   * @return string $listImageUrl
   */
  public function getListImageUrl(): string
  {
    return $this->listImageUrl;
  }

  /**
   * Sets the listImageUrl
   *
   * @param string $listImageUrl
   * @return void
   */
  public function setListImageUrl(string $listImageUrl)
  {
    $this->listImageUrl = $ListImageUrl;
  }

}
