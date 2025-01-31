<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/campaign_conversion_goal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class CampaignConversionGoal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v14/enums/conversion_origin.protogoogle.ads.googleads.v14.enums"�
ConversionOriginEnum"�
ConversionOrigin
UNSPECIFIED 
UNKNOWN
WEBSITE
GOOGLE_HOSTED
APP
CALL_FROM_ADS	
STORE
YOUTUBE_HOSTEDB�
"com.google.ads.googleads.v14.enumsBConversionOriginProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
?google/ads/googleads/v14/enums/conversion_action_category.protogoogle.ads.googleads.v14.enums"�
ConversionActionCategoryEnum"�
ConversionActionCategory
UNSPECIFIED 
UNKNOWN
DEFAULT
	PAGE_VIEW
PURCHASE

SIGNUP
DOWNLOAD
ADD_TO_CART
BEGIN_CHECKOUT	
SUBSCRIBE_PAID

PHONE_CALL_LEAD
IMPORTED_LEAD
SUBMIT_LEAD_FORM
BOOK_APPOINTMENT
REQUEST_QUOTE
GET_DIRECTIONS
OUTBOUND_CLICK
CONTACT

ENGAGEMENT
STORE_VISIT

STORE_SALE
QUALIFIED_LEAD
CONVERTED_LEADB�
"com.google.ads.googleads.v14.enumsBConversionActionCategoryProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Agoogle/ads/googleads/v14/resources/campaign_conversion_goal.proto"google.ads.googleads.v14.resources6google/ads/googleads/v14/enums/conversion_origin.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignConversionGoalN
resource_name (	B7�A�A1
/googleads.googleapis.com/CampaignConversionGoal;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaigng
category (2U.google.ads.googleads.v14.enums.ConversionActionCategoryEnum.ConversionActionCategoryU
origin (2E.google.ads.googleads.v14.enums.ConversionOriginEnum.ConversionOrigin
biddable (:��A�
/googleads.googleapis.com/CampaignConversionGoalQcustomers/{customer_id}/campaignConversionGoals/{campaign_id}~{category}~{source}B�
&com.google.ads.googleads.v14.resourcesBCampaignConversionGoalProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

