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
 * Person
 */
class Person extends AbstractEntity
{
  
  /**
   * name
   *
   * @var string
   */
  protected $name = '';

  /**
   * firstname
   *
   * @var string
   */
  protected $firstname = '';

  /**
   * lastname
   *
   * @var string
   */
  protected $lastname = '';

  /**
   * personId
   *
   * @var int
   * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
   */
  protected $personId = 0;

  /**
   * phone
   *
   * @var string
   */
  protected $phone = '';

  /**
   * profession
   *
   * @var string
   */
  protected $profession = '';

  /**
   * email
   *
   * @var string
   */
  protected $email = '';

  /**
   * url
   *
   * @var string
   */
  protected $url = '';

  /**
   * urlType
   *
   * @var int
   */
  protected $urlType = 0;

  /**
   * __construct
   */
  public function __construct()
  {
    // Do not remove the next line: It would break the functionality
    $this->initializeObject();
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
   * Returns the firstname
   *
   * @return string $firstname
   */
  public function getFirstname(): string
  {
    return $this->firstname;
  }

  /**
   * Sets the firstname
   *
   * @param string $firstname
   * @return void
   */
  public function setFirstname(string $firstname)
  {
    $this->firstname = $firstname;
  }

  /**
   * Returns the lastname
   *
   * @return string $lastname
   */
  public function getLastname(): string
  {
    return $this->lastname;
  }

  /**
   * Sets the lastname
   *
   * @param string $lastname
   * @return void
   */
  public function setLastname(string $lastname)
  {
    $this->lastname = $lastname;
  }

  /**
   * Returns the personId
   *
   * @return int $personId
   */
  public function getPersonId(): int
  {
    return $this->personId;
  }

  /**
   * Sets the personId
   *
   * @param int $personId
   * @return void
   */
  public function setPersonId(int $personId)
  {
    $this->personId = $personId;
  }

  /**
   * Returns the phone
   *
   * @return string $phone
   */
  public function getPhone(): string
  {
    return $this->phone;
  }

  /**
   * Sets the phone
   *
   * @param string $phone
   * @return void
   */
  public function setPhone(string $phone)
  {
    $this->phone = $phone;
  }

  /**
   * Returns the profession
   *
   * @return string $profession
   */
  public function getProfession(): string
  {
    return $this->profession;
  }

  /**
   * Sets the profession
   *
   * @param string $profession
   * @return void
   */
  public function setProfession(string $profession)
  {
    $this->profession = $profession;
  }

  /**
   * Returns the email
   *
   * @return string $email
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Sets the email
   *
   * @param string $email
   * @return void
   */
  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  /**
   * Returns the url
   *
   * @return string $url
   */
  public function getUrl(): string
  {
    return $this->url;
  }

  /**
   * Sets the url
   *
   * @param string $url
   * @return void
   */
  public function setUrl(string $url)
  {
    $this->url = $url;
  }

  /**
   * Returns the urlType
   *
   * @return int $urlType
   */
  public function getUrlType(): int
  {
    return $this->urlType;
  }

  /**
   * Sets the urlType
   *
   * @param int $urlType
   * @return void
   */
  public function setUrlType(int $urlType)
  {
    $this->urlType = $urlType;
  }
}
