<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/flight_placeholder_field.proto

namespace Google\Ads\GoogleAds\V14\Enums\FlightPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Flight placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.FlightPlaceholderFieldEnum.FlightPlaceholderField</code>
 */
class FlightPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. Required. Destination id. Example: PAR, LON.
     * For feed items that only have destination id, destination id must be a
     * unique key. For feed items that have both destination id and origin id,
     * then the combination must be a unique key.
     *
     * Generated from protobuf enum <code>DESTINATION_ID = 2;</code>
     */
    const DESTINATION_ID = 2;
    /**
     * Data Type: STRING. Origin id. Example: PAR, LON.
     * Optional. Combination of destination id and origin id must be unique per
     * offer.
     *
     * Generated from protobuf enum <code>ORIGIN_ID = 3;</code>
     */
    const ORIGIN_ID = 3;
    /**
     * Data Type: STRING. Required. Main headline with product name to be shown
     * in dynamic ad.
     *
     * Generated from protobuf enum <code>FLIGHT_DESCRIPTION = 4;</code>
     */
    const FLIGHT_DESCRIPTION = 4;
    /**
     * Data Type: STRING. Shorter names are recommended.
     *
     * Generated from protobuf enum <code>ORIGIN_NAME = 5;</code>
     */
    const ORIGIN_NAME = 5;
    /**
     * Data Type: STRING. Shorter names are recommended.
     *
     * Generated from protobuf enum <code>DESTINATION_NAME = 6;</code>
     */
    const DESTINATION_NAME = 6;
    /**
     * Data Type: STRING. Price to be shown in the ad.
     * Example: "100.00 USD"
     *
     * Generated from protobuf enum <code>FLIGHT_PRICE = 7;</code>
     */
    const FLIGHT_PRICE = 7;
    /**
     * Data Type: STRING. Formatted price to be shown in the ad.
     * Example: "Starting at $100.00 USD", "$80 - $100"
     *
     * Generated from protobuf enum <code>FORMATTED_PRICE = 8;</code>
     */
    const FORMATTED_PRICE = 8;
    /**
     * Data Type: STRING. Sale price to be shown in the ad.
     * Example: "80.00 USD"
     *
     * Generated from protobuf enum <code>FLIGHT_SALE_PRICE = 9;</code>
     */
    const FLIGHT_SALE_PRICE = 9;
    /**
     * Data Type: STRING. Formatted sale price to be shown in the ad.
     * Example: "On sale for $80.00", "$60 - $80"
     *
     * Generated from protobuf enum <code>FORMATTED_SALE_PRICE = 10;</code>
     */
    const FORMATTED_SALE_PRICE = 10;
    /**
     * Data Type: URL. Image to be displayed in the ad.
     *
     * Generated from protobuf enum <code>IMAGE_URL = 11;</code>
     */
    const IMAGE_URL = 11;
    /**
     * Data Type: URL_LIST. Required. Final URLs for the ad when using Upgraded
     * URLs. User will be redirected to these URLs when they click on an ad, or
     * when they click on a specific flight for ads that show multiple
     * flights.
     *
     * Generated from protobuf enum <code>FINAL_URLS = 12;</code>
     */
    const FINAL_URLS = 12;
    /**
     * Data Type: URL_LIST. Final mobile URLs for the ad when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 13;</code>
     */
    const FINAL_MOBILE_URLS = 13;
    /**
     * Data Type: URL. Tracking template for the ad when using Upgraded URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 14;</code>
     */
    const TRACKING_URL = 14;
    /**
     * Data Type: STRING. Android app link. Must be formatted as:
     * android-app://{package_id}/{scheme}/{host_path}.
     * The components are defined as follows:
     * package_id: app ID as specified in Google Play.
     * scheme: the scheme to pass to the application. Can be HTTP, or a custom
     *   scheme.
     * host_path: identifies the specific content within your application.
     *
     * Generated from protobuf enum <code>ANDROID_APP_LINK = 15;</code>
     */
    const ANDROID_APP_LINK = 15;
    /**
     * Data Type: STRING_LIST. List of recommended destination IDs to show
     * together with this item.
     *
     * Generated from protobuf enum <code>SIMILAR_DESTINATION_IDS = 16;</code>
     */
    const SIMILAR_DESTINATION_IDS = 16;
    /**
     * Data Type: STRING. iOS app link.
     *
     * Generated from protobuf enum <code>IOS_APP_LINK = 17;</code>
     */
    const IOS_APP_LINK = 17;
    /**
     * Data Type: INT64. iOS app store ID.
     *
     * Generated from protobuf enum <code>IOS_APP_STORE_ID = 18;</code>
     */
    const IOS_APP_STORE_ID = 18;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DESTINATION_ID => 'DESTINATION_ID',
        self::ORIGIN_ID => 'ORIGIN_ID',
        self::FLIGHT_DESCRIPTION => 'FLIGHT_DESCRIPTION',
        self::ORIGIN_NAME => 'ORIGIN_NAME',
        self::DESTINATION_NAME => 'DESTINATION_NAME',
        self::FLIGHT_PRICE => 'FLIGHT_PRICE',
        self::FORMATTED_PRICE => 'FORMATTED_PRICE',
        self::FLIGHT_SALE_PRICE => 'FLIGHT_SALE_PRICE',
        self::FORMATTED_SALE_PRICE => 'FORMATTED_SALE_PRICE',
        self::IMAGE_URL => 'IMAGE_URL',
        self::FINAL_URLS => 'FINAL_URLS',
        self::FINAL_MOBILE_URLS => 'FINAL_MOBILE_URLS',
        self::TRACKING_URL => 'TRACKING_URL',
        self::ANDROID_APP_LINK => 'ANDROID_APP_LINK',
        self::SIMILAR_DESTINATION_IDS => 'SIMILAR_DESTINATION_IDS',
        self::IOS_APP_LINK => 'IOS_APP_LINK',
        self::IOS_APP_STORE_ID => 'IOS_APP_STORE_ID',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlightPlaceholderField::class, \Google\Ads\GoogleAds\V14\Enums\FlightPlaceholderFieldEnum_FlightPlaceholderField::class);

