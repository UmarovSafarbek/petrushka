<?php
/**
 * CreateTokenRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ensi\AdminAuthClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ensi Admin Auth
 *
 * Авторизация системных пользователей
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: mail@greensight.ru
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ensi\AdminAuthClient\Dto;

use \ArrayAccess;
use \Ensi\AdminAuthClient\ObjectSerializer;

/**
 * CreateTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  Ensi\AdminAuthClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateTokenRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'grant_type' => 'string',
        'client_id' => 'string',
        'client_secret' => 'string',
        'scope' => 'string[]',
        'username' => 'string',
        'password' => 'string',
        'refresh_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'grant_type' => null,
        'client_id' => null,
        'client_secret' => null,
        'scope' => null,
        'username' => null,
        'password' => null,
        'refresh_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'grant_type' => false,
        'client_id' => false,
        'client_secret' => false,
        'scope' => false,
        'username' => false,
        'password' => false,
        'refresh_token' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

        /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;
        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'grant_type' => 'grant_type',
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'scope' => 'scope',
        'username' => 'username',
        'password' => 'password',
        'refresh_token' => 'refresh_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grant_type' => 'setGrantType',
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'scope' => 'setScope',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'refresh_token' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grant_type' => 'getGrantType',
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'scope' => 'getScope',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'refresh_token' => 'getRefreshToken'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('grant_type', $data, null);
        $this->setIfExists('client_id', $data, null);
        $this->setIfExists('client_secret', $data, null);
        $this->setIfExists('scope', $data, null);
        $this->setIfExists('username', $data, null);
        $this->setIfExists('password', $data, null);
        $this->setIfExists('refresh_token', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['grant_type'] === null) {
            $invalidProperties[] = "'grant_type' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['client_secret'] === null) {
            $invalidProperties[] = "'client_secret' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets grant_type
     *
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grant_type'];
    }

    /**
     * Sets grant_type
     *
     * @param string $grant_type Тип из GrantTypeEnum
     *
     * @return $this
     */
    public function setGrantType($grant_type)
    {


        /*if (is_null($grant_type)) {
            throw new \InvalidArgumentException('non-nullable grant_type cannot be null');
        }*/
        $this->container['grant_type'] = $grant_type;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Id клиентского приложения
     *
     * @return $this
     */
    public function setClientId($client_id)
    {


        /*if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }*/
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret Секрет клиентского приложения
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {


        /*if (is_null($client_secret)) {
            throw new \InvalidArgumentException('non-nullable client_secret cannot be null');
        }*/
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string[]
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string[] $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {


        /*if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }*/
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username Логин пользователя
     *
     * @return $this
     */
    public function setUsername($username)
    {


        /*if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }*/
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Пароль пользователя
     *
     * @return $this
     */
    public function setPassword($password)
    {


        /*if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }*/
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string|null $refresh_token Токен обновления
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {


        /*if (is_null($refresh_token)) {
            throw new \InvalidArgumentException('non-nullable refresh_token cannot be null');
        }*/
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


