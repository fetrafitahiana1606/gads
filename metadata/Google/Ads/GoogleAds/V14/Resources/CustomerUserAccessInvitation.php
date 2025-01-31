<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_user_access_invitation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class CustomerUserAccessInvitation
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
�
=google/ads/googleads/v14/enums/access_invitation_status.protogoogle.ads.googleads.v14.enums"|
AccessInvitationStatusEnum"^
AccessInvitationStatus
UNSPECIFIED 
UNKNOWN
PENDING
DECLINED
EXPIREDB�
"com.google.ads.googleads.v14.enumsBAccessInvitationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
0google/ads/googleads/v14/enums/access_role.protogoogle.ads.googleads.v14.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
"com.google.ads.googleads.v14.enumsBAccessRoleProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Hgoogle/ads/googleads/v14/resources/customer_user_access_invitation.proto"google.ads.googleads.v14.resources0google/ads/googleads/v14/enums/access_role.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerUserAccessInvitationT
resource_name (	B=�A�A7
5googleads.googleapis.com/CustomerUserAccessInvitation
invitation_id (B�AS
access_role (29.google.ads.googleads.v14.enums.AccessRoleEnum.AccessRoleB�A
email_address (	B�A
creation_date_time (	B�Aq
invitation_status (2Q.google.ads.googleads.v14.enums.AccessInvitationStatusEnum.AccessInvitationStatusB�A:��A~
5googleads.googleapis.com/CustomerUserAccessInvitationEcustomers/{customer_id}/customerUserAccessInvitations/{invitation_id}B�
&com.google.ads.googleads.v14.resourcesB!CustomerUserAccessInvitationProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

