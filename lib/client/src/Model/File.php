<?php
/**
 * File
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
 * File Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DBCDK\CommunityServices
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class File implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'container' => 'string',
        'name' => 'string',
        'type' => 'string',
        'url' => 'string',
        'id' => 'double',
        'imageFile' => 'double',
        'groupCoverImageId' => 'double',
        'postImageFile' => 'double',
        'commentImageFile' => 'double',
        'originalvideoid' => 'double',
        'videoCollectionId' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'container' => 'container',
        'name' => 'name',
        'type' => 'type',
        'url' => 'url',
        'id' => 'id',
        'imageFile' => 'imageFile',
        'groupCoverImageId' => 'groupCoverImageId',
        'postImageFile' => 'postImageFile',
        'commentImageFile' => 'commentImageFile',
        'originalvideoid' => 'originalvideoid',
        'videoCollectionId' => 'videoCollectionId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'container' => 'setContainer',
        'name' => 'setName',
        'type' => 'setType',
        'url' => 'setUrl',
        'id' => 'setId',
        'imageFile' => 'setImageFile',
        'groupCoverImageId' => 'setGroupCoverImageId',
        'postImageFile' => 'setPostImageFile',
        'commentImageFile' => 'setCommentImageFile',
        'originalvideoid' => 'setOriginalvideoid',
        'videoCollectionId' => 'setVideoCollectionId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'container' => 'getContainer',
        'name' => 'getName',
        'type' => 'getType',
        'url' => 'getUrl',
        'id' => 'getId',
        'imageFile' => 'getImageFile',
        'groupCoverImageId' => 'getGroupCoverImageId',
        'postImageFile' => 'getPostImageFile',
        'commentImageFile' => 'getCommentImageFile',
        'originalvideoid' => 'getOriginalvideoid',
        'videoCollectionId' => 'getVideoCollectionId'
    );
  
    
    /**
      * $container 
      * @var string
      */
    protected $container;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    
    /**
      * $id 
      * @var double
      */
    protected $id;
    
    /**
      * $imageFile 
      * @var double
      */
    protected $imageFile;
    
    /**
      * $groupCoverImageId 
      * @var double
      */
    protected $groupCoverImageId;
    
    /**
      * $postImageFile 
      * @var double
      */
    protected $postImageFile;
    
    /**
      * $commentImageFile 
      * @var double
      */
    protected $commentImageFile;
    
    /**
      * $originalvideoid 
      * @var double
      */
    protected $originalvideoid;
    
    /**
      * $videoCollectionId 
      * @var double
      */
    protected $videoCollectionId;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->container = $data["container"];
            $this->name = $data["name"];
            $this->type = $data["type"];
            $this->url = $data["url"];
            $this->id = $data["id"];
            $this->imageFile = $data["imageFile"];
            $this->groupCoverImageId = $data["groupCoverImageId"];
            $this->postImageFile = $data["postImageFile"];
            $this->commentImageFile = $data["commentImageFile"];
            $this->originalvideoid = $data["originalvideoid"];
            $this->videoCollectionId = $data["videoCollectionId"];
        }
    }
    
    /**
     * Gets container
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }
  
    /**
     * Sets container
     * @param string $container 
     * @return $this
     */
    public function setContainer($container)
    {
        
        $this->container = $container;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
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
     * Gets imageFile
     * @return double
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }
  
    /**
     * Sets imageFile
     * @param double $imageFile 
     * @return $this
     */
    public function setImageFile($imageFile)
    {
        
        $this->imageFile = $imageFile;
        return $this;
    }
    
    /**
     * Gets groupCoverImageId
     * @return double
     */
    public function getGroupCoverImageId()
    {
        return $this->groupCoverImageId;
    }
  
    /**
     * Sets groupCoverImageId
     * @param double $groupCoverImageId 
     * @return $this
     */
    public function setGroupCoverImageId($groupCoverImageId)
    {
        
        $this->groupCoverImageId = $groupCoverImageId;
        return $this;
    }
    
    /**
     * Gets postImageFile
     * @return double
     */
    public function getPostImageFile()
    {
        return $this->postImageFile;
    }
  
    /**
     * Sets postImageFile
     * @param double $postImageFile 
     * @return $this
     */
    public function setPostImageFile($postImageFile)
    {
        
        $this->postImageFile = $postImageFile;
        return $this;
    }
    
    /**
     * Gets commentImageFile
     * @return double
     */
    public function getCommentImageFile()
    {
        return $this->commentImageFile;
    }
  
    /**
     * Sets commentImageFile
     * @param double $commentImageFile 
     * @return $this
     */
    public function setCommentImageFile($commentImageFile)
    {
        
        $this->commentImageFile = $commentImageFile;
        return $this;
    }
    
    /**
     * Gets originalvideoid
     * @return double
     */
    public function getOriginalvideoid()
    {
        return $this->originalvideoid;
    }
  
    /**
     * Sets originalvideoid
     * @param double $originalvideoid 
     * @return $this
     */
    public function setOriginalvideoid($originalvideoid)
    {
        
        $this->originalvideoid = $originalvideoid;
        return $this;
    }
    
    /**
     * Gets videoCollectionId
     * @return double
     */
    public function getVideoCollectionId()
    {
        return $this->videoCollectionId;
    }
  
    /**
     * Sets videoCollectionId
     * @param double $videoCollectionId 
     * @return $this
     */
    public function setVideoCollectionId($videoCollectionId)
    {
        
        $this->videoCollectionId = $videoCollectionId;
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