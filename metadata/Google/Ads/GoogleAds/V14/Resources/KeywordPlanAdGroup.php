<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/keyword_plan_ad_group.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class KeywordPlanAdGroup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v14/resources/keyword_plan_ad_group.proto"google.ads.googleads.v14.resourcesgoogle/api/resource.proto"�
KeywordPlanAdGroupJ
resource_name (	B3�A�A-
+googleads.googleapis.com/KeywordPlanAdGroupU
keyword_plan_campaign (	B1�A.
,googleads.googleapis.com/KeywordPlanCampaignH �
id (B�AH�
name (	H�
cpc_bid_micros	 (H�:x�Au
+googleads.googleapis.com/KeywordPlanAdGroupFcustomers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}B
_keyword_plan_campaignB
_idB
_nameB
_cpc_bid_microsB�
&com.google.ads.googleads.v14.resourcesBKeywordPlanAdGroupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

