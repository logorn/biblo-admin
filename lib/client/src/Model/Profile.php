<?php
/**
 * Profile
 *
 * PHP version 5
 *
 * @category Class
 * @package  DBCDK\CommunityServices
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DBCDK\CommunityServices\Model;

use \ArrayAccess;
/**
 * Profile Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DBCDK\CommunityServices
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Profile implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'username' => 'string',
        'displayName' => 'string',
        'favoriteLibrary' => 'object',
        'description' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'created' => '\DateTime',
        'lastUpdated' => '\DateTime',
        'hasFilledInProfile' => 'bool',
        'birthday' => '\DateTime',
        'fullName' => 'string',
        'palleid' => 'double',
        'id' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'username' => 'username',
        'displayName' => 'displayName',
        'favoriteLibrary' => 'favoriteLibrary',
        'description' => 'description',
        'email' => 'email',
        'phone' => 'phone',
        'created' => 'created',
        'lastUpdated' => 'lastUpdated',
        'hasFilledInProfile' => 'hasFilledInProfile',
        'birthday' => 'birthday',
        'fullName' => 'fullName',
        'palleid' => 'palleid',
        'id' => 'id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'username' => 'setUsername',
        'displayName' => 'setDisplayName',
        'favoriteLibrary' => 'setFavoriteLibrary',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'created' => 'setCreated',
        'lastUpdated' => 'setLastUpdated',
        'hasFilledInProfile' => 'setHasFilledInProfile',
        'birthday' => 'setBirthday',
        'fullName' => 'setFullName',
        'palleid' => 'setPalleid',
        'id' => 'setId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'username' => 'getUsername',
        'displayName' => 'getDisplayName',
        'favoriteLibrary' => 'getFavoriteLibrary',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'created' => 'getCreated',
        'lastUpdated' => 'getLastUpdated',
        'hasFilledInProfile' => 'getHasFilledInProfile',
        'birthday' => 'getBirthday',
        'fullName' => 'getFullName',
        'palleid' => 'getPalleid',
        'id' => 'getId'
    );
  
    
    /**
      * $username 
      * @var string
      */
    protected $username;
    
    /**
      * $displayName 
      * @var string
      */
    protected $displayName;
    
    /**
      * $favoriteLibrary 
      * @var object
      */
    protected $favoriteLibrary;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $phone 
      * @var string
      */
    protected $phone;
    
    /**
      * $created 
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $lastUpdated 
      * @var \DateTime
      */
    protected $lastUpdated;
    
    /**
      * $hasFilledInProfile 
      * @var bool
      */
    protected $hasFilledInProfile;
    
    /**
      * $birthday 
      * @var \DateTime
      */
    protected $birthday;
    
    /**
      * $fullName 
      * @var string
      */
    protected $fullName;
    
    /**
      * $palleid 
      * @var double
      */
    protected $palleid;
    
    /**
      * $id 
      * @var double
      */
    protected $id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->username = $data["username"];
            $this->displayName = $data["displayName"];
            $this->favoriteLibrary = $data["favoriteLibrary"];
            $this->description = $data["description"];
            $this->email = $data["email"];
            $this->phone = $data["phone"];
            $this->created = $data["created"];
            $this->lastUpdated = $data["lastUpdated"];
            $this->hasFilledInProfile = $data["hasFilledInProfile"];
            $this->birthday = $data["birthday"];
            $this->fullName = $data["fullName"];
            $this->palleid = $data["palleid"];
            $this->id = $data["id"];
        }
    }
    
    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
  
    /**
     * Sets username
     * @param string $username 
     * @return $this
     */
    public function setUsername($username)
    {
        
        $this->username = $username;
        return $this;
    }
    
    /**
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
  
    /**
     * Sets displayName
     * @param string $displayName 
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        
        $this->displayName = $displayName;
        return $this;
    }
    
    /**
     * Gets favoriteLibrary
     * @return object
     */
    public function getFavoriteLibrary()
    {
        return $this->favoriteLibrary;
    }
  
    /**
     * Sets favoriteLibrary
     * @param object $favoriteLibrary 
     * @return $this
     */
    public function setFavoriteLibrary($favoriteLibrary)
    {
        
        $this->favoriteLibrary = $favoriteLibrary;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
  
    /**
     * Sets phone
     * @param string $phone 
     * @return $this
     */
    public function setPhone($phone)
    {
        
        $this->phone = $phone;
        return $this;
    }
    
    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
  
    /**
     * Sets created
     * @param \DateTime $created 
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets lastUpdated
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }
  
    /**
     * Sets lastUpdated
     * @param \DateTime $lastUpdated 
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        
        $this->lastUpdated = $lastUpdated;
        return $this;
    }
    
    /**
     * Gets hasFilledInProfile
     * @return bool
     */
    public function getHasFilledInProfile()
    {
        return $this->hasFilledInProfile;
    }
  
    /**
     * Sets hasFilledInProfile
     * @param bool $hasFilledInProfile 
     * @return $this
     */
    public function setHasFilledInProfile($hasFilledInProfile)
    {
        
        $this->hasFilledInProfile = $hasFilledInProfile;
        return $this;
    }
    
    /**
     * Gets birthday
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
  
    /**
     * Sets birthday
     * @param \DateTime $birthday 
     * @return $this
     */
    public function setBirthday($birthday)
    {
        
        $this->birthday = $birthday;
        return $this;
    }
    
    /**
     * Gets fullName
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }
  
    /**
     * Sets fullName
     * @param string $fullName 
     * @return $this
     */
    public function setFullName($fullName)
    {
        
        $this->fullName = $fullName;
        return $this;
    }
    
    /**
     * Gets palleid
     * @return double
     */
    public function getPalleid()
    {
        return $this->palleid;
    }
  
    /**
     * Sets palleid
     * @param double $palleid 
     * @return $this
     */
    public function setPalleid($palleid)
    {
        
        $this->palleid = $palleid;
        return $this;
    }
    
    /**
     * Gets id
     * @return double
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param double $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DBCDK\CommunityServices\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DBCDK\CommunityServices\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
