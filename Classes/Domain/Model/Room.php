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
 * Room
 */
class Room extends AbstractEntity
{
  
  /**
   * locationName
   *
   * @var string
   */
  protected $locationName = '';

  /**
   * locationUrlIsExternal
   *
   * @var bool
   */
  protected $locationUrlIsExternal = false;

  /**
   * locationUrl
   *
   * @var string
   */
  protected $locationUrl = '';

  /**
   * locationAddress
   *
   * @var string
   */
  protected $locationAddress = '';

  /**
   * locationPostcode
   *
   * @var string
   */
  protected $locationPostcode = '';

  /**
   * locationCity
   *
   * @var string
   */
  protected $locationCity = '';

  /**
   * name
   *
   * @var string
   */
  protected $name = '';

  /**
   * id
   *
   * @var int
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $id = 0;

  /**
   * order
   *
   * @var int
   */
  protected $order = 0;

  /**
   * __construct
   */
  public function __construct()
  {
    // Do not remove the next line: It would break the functionality
    $this->initializeObject();
  }

  /**
   * Returns the locationName
   *
   * @return string $locationName
   */
  public function getLocationName(): string
  {
    return $this->locationName;
  }

  /**
   * Sets the locationName
   *
   * @param string $locationName
   * @return void
   */
  public function setLocationName(string $locationName)
  {
    $this->locationName = $locationName;
  }

  /**
   * Returns the locationUrlIsExternal
   *
   * @return bool $locationUrlIsExternal
   */
  public function getLocationUrlIsExternal(): bool
  {
    return $this->locationUrlIsExternal;
  }

  /**
   * Sets the locationUrlIsExternal
   *
   * @param bool $locationUrlIsExternal
   * @return void
   */
  public function setLocationUrlIsExternal(bool $locationUrlIsExternal)
  {
    $this->locationUrlIsExternal = $locationUrlIsExternal;
  }

  /**
   * Returns the locationUrl
   *
   * @return string $locationUrl
   */
  public function getLocationUrl(): string
  {
    return $this->locationUrl;
  }

  /**
   * Sets the locationUrl
   *
   * @param string $locationUrl
   * @return void
   */
  public function setLocationUrl(string $locationUrl)
  {
    $this->locationUrl = $locationUrl;
  }

  /**
   * Returns the locationAddress
   *
   * @return string $locationAddress
   */
  public function getLocationAddress(): string
  {
    return $this->locationAddress;
  }

  /**
   * Sets the locationAddress
   *
   * @param string $locationAddress
   * @return void
   */
  public function setLocationAddress(string $locationAddress)
  {
    $this->locationAddress = $locationAddress;
  }

  /**
   * Returns the locationPostcode
   *
   * @return string $locationPostcode
   */
  public function getLocationPostcode(): string
  {
    return $this->locationPostcode;
  }

  /**
   * Sets the locationPostcode
   *
   * @param string $locationPostcode
   * @return void
   */
  public function setLocationPostcode(string $locationPostcode)
  {
    $this->locationPostcode = $locationPostcode;
  }

  /**
   * Returns the locationCity
   *
   * @return string $locationCity
   */
  public function getLocationCity(): string
  {
    return $this->locationCity;
  }

  /**
   * Sets the locationCity
   *
   * @param string $locationCity
   * @return void
   */
  public function setLocationCity(string $locationCity)
  {
    $this->locationCity = $locationCity;
  }

  /**
   * Returns the name
   *
   * @return string $name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Sets the name
   *
   * @param string $name
   * @return void
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * Returns the id
   *
   * @return int $id
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * Sets the id
   *
   * @param int $id
   * @return void
   */
  public function setId(int $id)
  {
    $this->id = $id;
  }

  /**
   * Returns the order
   *
   * @return int $order
   */
  public function getOrder(): int
  {
    return $this->order;
  }

  /**
   * Sets the order
   *
   * @param int $order
   * @return void
   */
  public function setOrder(int $order)
  {
    $this->order = $order;
  }
  
}
