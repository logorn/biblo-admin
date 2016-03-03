<?php
/**
 * Quarantine
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
 *  Copyright 2015 SmartBear Software
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
 * Quarantine Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DBCDK\CommunityServices
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Quarantine implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'reason' => 'string',
        'end' => '\DateTime',
        'start' => '\DateTime',
        'id' => 'double',
        'quarantinedId' => 'double',
        'creatorId' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'reason' => 'reason',
        'end' => 'end',
        'start' => 'start',
        'id' => 'id',
        'quarantinedId' => 'quarantinedId',
        'creatorId' => 'creatorId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'reason' => 'setReason',
        'end' => 'setEnd',
        'start' => 'setStart',
        'id' => 'setId',
        'quarantinedId' => 'setQuarantinedId',
        'creatorId' => 'setCreatorId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'reason' => 'getReason',
        'end' => 'getEnd',
        'start' => 'getStart',
        'id' => 'getId',
        'quarantinedId' => 'getQuarantinedId',
        'creatorId' => 'getCreatorId'
    );
  
    
    /**
      * $reason 
      * @var string
      */
    protected $reason;
    
    /**
      * $end 
      * @var \DateTime
      */
    protected $end;
    
    /**
      * $start 
      * @var \DateTime
      */
    protected $start;
    
    /**
      * $id 
      * @var double
      */
    protected $id;
    
    /**
      * $quarantinedId 
      * @var double
      */
    protected $quarantinedId;
    
    /**
      * $creatorId 
      * @var double
      */
    protected $creatorId;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->reason = $data["reason"];
            $this->end = $data["end"];
            $this->start = $data["start"];
            $this->id = $data["id"];
            $this->quarantinedId = $data["quarantinedId"];
            $this->creatorId = $data["creatorId"];
        }
    }
    
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason 
     * @return $this
     */
    public function setReason($reason)
    {
        
        $this->reason = $reason;
        return $this;
    }
    
    /**
     * Gets end
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
  
    /**
     * Sets end
     * @param \DateTime $end 
     * @return $this
     */
    public function setEnd($end)
    {
        
        $this->end = $end;
        return $this;
    }
    
    /**
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }
  
    /**
     * Sets start
     * @param \DateTime $start 
     * @return $this
     */
    public function setStart($start)
    {
        
        $this->start = $start;
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
     * Gets quarantinedId
     * @return double
     */
    public function getQuarantinedId()
    {
        return $this->quarantinedId;
    }
  
    /**
     * Sets quarantinedId
     * @param double $quarantinedId 
     * @return $this
     */
    public function setQuarantinedId($quarantinedId)
    {
        
        $this->quarantinedId = $quarantinedId;
        return $this;
    }
    
    /**
     * Gets creatorId
     * @return double
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }
  
    /**
     * Sets creatorId
     * @param double $creatorId 
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        
        $this->creatorId = $creatorId;
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
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
