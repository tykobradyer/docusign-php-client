<?php
/**
 * LoginAccount
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
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

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * LoginAccount Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoginAccount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'account_id' => 'string',
        'account_id_guid' => 'string',
        'base_url' => 'string',
        'is_default' => 'string',
        'user_name' => 'string',
        'user_id' => 'string',
        'email' => 'string',
        'site_description' => 'string',
        'login_account_settings' => '\DocuSign\eSign\Model\NameValue[]',
        'login_user_settings' => '\DocuSign\eSign\Model\NameValue[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'account_id' => 'accountId',
        'account_id_guid' => 'accountIdGuid',
        'base_url' => 'baseUrl',
        'is_default' => 'isDefault',
        'user_name' => 'userName',
        'user_id' => 'userId',
        'email' => 'email',
        'site_description' => 'siteDescription',
        'login_account_settings' => 'loginAccountSettings',
        'login_user_settings' => 'loginUserSettings'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'account_id_guid' => 'setAccountIdGuid',
        'base_url' => 'setBaseUrl',
        'is_default' => 'setIsDefault',
        'user_name' => 'setUserName',
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'site_description' => 'setSiteDescription',
        'login_account_settings' => 'setLoginAccountSettings',
        'login_user_settings' => 'setLoginUserSettings'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'account_id_guid' => 'getAccountIdGuid',
        'base_url' => 'getBaseUrl',
        'is_default' => 'getIsDefault',
        'user_name' => 'getUserName',
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'site_description' => 'getSiteDescription',
        'login_account_settings' => 'getLoginAccountSettings',
        'login_user_settings' => 'getLoginUserSettings'
    );
  
    
    /**
      * $name The name associated with the account.
      * @var string
      */
    protected $name;
    
    /**
      * $account_id The account ID associated with the envelope.
      * @var string
      */
    protected $account_id;
    
    /**
      * $account_id_guid The GUID associated with the account ID.
      * @var string
      */
    protected $account_id_guid;
    
    /**
      * $base_url The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
      * @var string
      */
    protected $base_url;
    
    /**
      * $is_default This value is true if this is the default account for the user, otherwise false is returned.
      * @var string
      */
    protected $is_default;
    
    /**
      * $user_name The name of this user as defined by the account.
      * @var string
      */
    protected $user_name;
    
    /**
      * $user_id 
      * @var string
      */
    protected $user_id;
    
    /**
      * $email 
      * @var string
      */
    protected $email;
    
    /**
      * $site_description An optional descirption of the site that hosts the account.
      * @var string
      */
    protected $site_description;
    
    /**
      * $login_account_settings A list of settings on the acccount that indicate what features are available.
      * @var \DocuSign\eSign\Model\NameValue[]
      */
    protected $login_account_settings;
    
    /**
      * $login_user_settings A list of user-level settings that indicate what user-specific features are available.
      * @var \DocuSign\eSign\Model\NameValue[]
      */
    protected $login_user_settings;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->account_id = $data["account_id"];
            $this->account_id_guid = $data["account_id_guid"];
            $this->base_url = $data["base_url"];
            $this->is_default = $data["is_default"];
            $this->user_name = $data["user_name"];
            $this->user_id = $data["user_id"];
            $this->email = $data["email"];
            $this->site_description = $data["site_description"];
            $this->login_account_settings = $data["login_account_settings"];
            $this->login_user_settings = $data["login_user_settings"];
        }
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
     * @param string $name The name associated with the account.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }
  
    /**
     * Sets account_id
     * @param string $account_id The account ID associated with the envelope.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        
        $this->account_id = $account_id;
        return $this;
    }
    
    /**
     * Gets account_id_guid
     * @return string
     */
    public function getAccountIdGuid()
    {
        return $this->account_id_guid;
    }
  
    /**
     * Sets account_id_guid
     * @param string $account_id_guid The GUID associated with the account ID.
     * @return $this
     */
    public function setAccountIdGuid($account_id_guid)
    {
        
        $this->account_id_guid = $account_id_guid;
        return $this;
    }
    
    /**
     * Gets base_url
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }
  
    /**
     * Sets base_url
     * @param string $base_url The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     * @return $this
     */
    public function setBaseUrl($base_url)
    {
        
        $this->base_url = $base_url;
        return $this;
    }
    
    /**
     * Gets is_default
     * @return string
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }
  
    /**
     * Sets is_default
     * @param string $is_default This value is true if this is the default account for the user, otherwise false is returned.
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        
        $this->is_default = $is_default;
        return $this;
    }
    
    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }
  
    /**
     * Sets user_name
     * @param string $user_name The name of this user as defined by the account.
     * @return $this
     */
    public function setUserName($user_name)
    {
        
        $this->user_name = $user_name;
        return $this;
    }
    
    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }
  
    /**
     * Sets user_id
     * @param string $user_id 
     * @return $this
     */
    public function setUserId($user_id)
    {
        
        $this->user_id = $user_id;
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
     * Gets site_description
     * @return string
     */
    public function getSiteDescription()
    {
        return $this->site_description;
    }
  
    /**
     * Sets site_description
     * @param string $site_description An optional descirption of the site that hosts the account.
     * @return $this
     */
    public function setSiteDescription($site_description)
    {
        
        $this->site_description = $site_description;
        return $this;
    }
    
    /**
     * Gets login_account_settings
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getLoginAccountSettings()
    {
        return $this->login_account_settings;
    }
  
    /**
     * Sets login_account_settings
     * @param \DocuSign\eSign\Model\NameValue[] $login_account_settings A list of settings on the acccount that indicate what features are available.
     * @return $this
     */
    public function setLoginAccountSettings($login_account_settings)
    {
        
        $this->login_account_settings = $login_account_settings;
        return $this;
    }
    
    /**
     * Gets login_user_settings
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getLoginUserSettings()
    {
        return $this->login_user_settings;
    }
  
    /**
     * Sets login_user_settings
     * @param \DocuSign\eSign\Model\NameValue[] $login_user_settings A list of user-level settings that indicate what user-specific features are available.
     * @return $this
     */
    public function setLoginUserSettings($login_user_settings)
    {
        
        $this->login_user_settings = $login_user_settings;
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
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
