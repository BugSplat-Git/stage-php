<?php
/**
 * CheckoutSessionArg
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stage Technologies, Inc. API
 *
 * Stage Technologies, Inc. API  Useful links: - [Stage](https://www.heystage.com/)
 *
 * The version of the OpenAPI document: 0.0.43
 * Contact: stage@heystage.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CheckoutSessionArg Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutSessionArg implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutSessionArg';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success_url' => 'string',
        'cancel_url' => 'string',
        'billing_interval' => 'string',
        'is_on_trial' => 'bool',
        'collect_payment_method_when_trialing' => 'bool',
        'vendor_options' => '\OpenAPI\Client\Model\CheckoutSessionArgVendorOptions',
        'plan_overrides' => '\OpenAPI\Client\Model\CheckoutSessionArgPlanOverrides'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'success_url' => null,
        'cancel_url' => null,
        'billing_interval' => null,
        'is_on_trial' => null,
        'collect_payment_method_when_trialing' => null,
        'vendor_options' => null,
        'plan_overrides' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'success_url' => false,
		'cancel_url' => false,
		'billing_interval' => false,
		'is_on_trial' => true,
		'collect_payment_method_when_trialing' => true,
		'vendor_options' => true,
		'plan_overrides' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'success_url' => 'successUrl',
        'cancel_url' => 'cancelUrl',
        'billing_interval' => 'billingInterval',
        'is_on_trial' => 'isOnTrial',
        'collect_payment_method_when_trialing' => 'collectPaymentMethodWhenTrialing',
        'vendor_options' => 'vendorOptions',
        'plan_overrides' => 'planOverrides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success_url' => 'setSuccessUrl',
        'cancel_url' => 'setCancelUrl',
        'billing_interval' => 'setBillingInterval',
        'is_on_trial' => 'setIsOnTrial',
        'collect_payment_method_when_trialing' => 'setCollectPaymentMethodWhenTrialing',
        'vendor_options' => 'setVendorOptions',
        'plan_overrides' => 'setPlanOverrides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success_url' => 'getSuccessUrl',
        'cancel_url' => 'getCancelUrl',
        'billing_interval' => 'getBillingInterval',
        'is_on_trial' => 'getIsOnTrial',
        'collect_payment_method_when_trialing' => 'getCollectPaymentMethodWhenTrialing',
        'vendor_options' => 'getVendorOptions',
        'plan_overrides' => 'getPlanOverrides'
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

    public const BILLING_INTERVAL_MONTH = 'MONTH';
    public const BILLING_INTERVAL_YEAR = 'YEAR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingIntervalAllowableValues()
    {
        return [
            self::BILLING_INTERVAL_MONTH,
            self::BILLING_INTERVAL_YEAR,
        ];
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
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('billing_interval', $data ?? [], null);
        $this->setIfExists('is_on_trial', $data ?? [], null);
        $this->setIfExists('collect_payment_method_when_trialing', $data ?? [], null);
        $this->setIfExists('vendor_options', $data ?? [], null);
        $this->setIfExists('plan_overrides', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBillingIntervalAllowableValues();
        if (!is_null($this->container['billing_interval']) && !in_array($this->container['billing_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'billing_interval', must be one of '%s'",
                $this->container['billing_interval'],
                implode("', '", $allowedValues)
            );
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
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url success_url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url cancel_url
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets billing_interval
     *
     * @return string|null
     */
    public function getBillingInterval()
    {
        return $this->container['billing_interval'];
    }

    /**
     * Sets billing_interval
     *
     * @param string|null $billing_interval billing_interval
     *
     * @return self
     */
    public function setBillingInterval($billing_interval)
    {
        if (is_null($billing_interval)) {
            throw new \InvalidArgumentException('non-nullable billing_interval cannot be null');
        }
        $allowedValues = $this->getBillingIntervalAllowableValues();
        if (!in_array($billing_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'billing_interval', must be one of '%s'",
                    $billing_interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billing_interval'] = $billing_interval;

        return $this;
    }

    /**
     * Gets is_on_trial
     *
     * @return bool|null
     */
    public function getIsOnTrial()
    {
        return $this->container['is_on_trial'];
    }

    /**
     * Sets is_on_trial
     *
     * @param bool|null $is_on_trial is_on_trial
     *
     * @return self
     */
    public function setIsOnTrial($is_on_trial)
    {
        if (is_null($is_on_trial)) {
            array_push($this->openAPINullablesSetToNull, 'is_on_trial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_on_trial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_on_trial'] = $is_on_trial;

        return $this;
    }

    /**
     * Gets collect_payment_method_when_trialing
     *
     * @return bool|null
     */
    public function getCollectPaymentMethodWhenTrialing()
    {
        return $this->container['collect_payment_method_when_trialing'];
    }

    /**
     * Sets collect_payment_method_when_trialing
     *
     * @param bool|null $collect_payment_method_when_trialing collect_payment_method_when_trialing
     *
     * @return self
     */
    public function setCollectPaymentMethodWhenTrialing($collect_payment_method_when_trialing)
    {
        if (is_null($collect_payment_method_when_trialing)) {
            array_push($this->openAPINullablesSetToNull, 'collect_payment_method_when_trialing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collect_payment_method_when_trialing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['collect_payment_method_when_trialing'] = $collect_payment_method_when_trialing;

        return $this;
    }

    /**
     * Gets vendor_options
     *
     * @return \OpenAPI\Client\Model\CheckoutSessionArgVendorOptions|null
     */
    public function getVendorOptions()
    {
        return $this->container['vendor_options'];
    }

    /**
     * Sets vendor_options
     *
     * @param \OpenAPI\Client\Model\CheckoutSessionArgVendorOptions|null $vendor_options vendor_options
     *
     * @return self
     */
    public function setVendorOptions($vendor_options)
    {
        if (is_null($vendor_options)) {
            array_push($this->openAPINullablesSetToNull, 'vendor_options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vendor_options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vendor_options'] = $vendor_options;

        return $this;
    }

    /**
     * Gets plan_overrides
     *
     * @return \OpenAPI\Client\Model\CheckoutSessionArgPlanOverrides|null
     */
    public function getPlanOverrides()
    {
        return $this->container['plan_overrides'];
    }

    /**
     * Sets plan_overrides
     *
     * @param \OpenAPI\Client\Model\CheckoutSessionArgPlanOverrides|null $plan_overrides plan_overrides
     *
     * @return self
     */
    public function setPlanOverrides($plan_overrides)
    {
        if (is_null($plan_overrides)) {
            array_push($this->openAPINullablesSetToNull, 'plan_overrides');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plan_overrides', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['plan_overrides'] = $plan_overrides;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


