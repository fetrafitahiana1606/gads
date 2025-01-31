<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/google_ads_field.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A field or resource (artifact) used by GoogleAdsService.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.GoogleAdsField</code>
 */
class GoogleAdsField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>optional string name = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category = 0;
    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool selectable = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $selectable = null;
    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool filterable = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $filterable = null;
    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in
     * search queries.
     *
     * Generated from protobuf field <code>optional bool sortable = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sortable = null;
    /**
     * Output only. The names of all resources, segments, and metrics that are
     * selectable with the described artifact.
     *
     * Generated from protobuf field <code>repeated string selectable_with = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $selectable_with;
    /**
     * Output only. The names of all resources that are selectable with the
     * described artifact. Fields from these resources do not segment metrics when
     * included in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string attribute_resources = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attribute_resources;
    /**
     * Output only. This field lists the names of all metrics that are selectable
     * with the described artifact when it is used in the FROM clause. It is only
     * set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string metrics = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metrics;
    /**
     * Output only. This field lists the names of all artifacts, whether a segment
     * or another resource, that segment metrics when included in search queries
     * and when the described artifact is used in the FROM clause. It is only set
     * for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string segments = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $segments;
    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated string enum_values = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $enum_values;
    /**
     * Output only. This field determines the operators that can be used with the
     * artifact in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_type = 0;
    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>optional string type_url = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type_url = null;
    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>optional bool is_repeated = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $is_repeated = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the artifact.
     *           Artifact resource names have the form:
     *           `googleAdsFields/{name}`
     *     @type string $name
     *           Output only. The name of the artifact.
     *     @type int $category
     *           Output only. The category of the artifact.
     *     @type bool $selectable
     *           Output only. Whether the artifact can be used in a SELECT clause in search
     *           queries.
     *     @type bool $filterable
     *           Output only. Whether the artifact can be used in a WHERE clause in search
     *           queries.
     *     @type bool $sortable
     *           Output only. Whether the artifact can be used in a ORDER BY clause in
     *           search queries.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $selectable_with
     *           Output only. The names of all resources, segments, and metrics that are
     *           selectable with the described artifact.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $attribute_resources
     *           Output only. The names of all resources that are selectable with the
     *           described artifact. Fields from these resources do not segment metrics when
     *           included in search queries.
     *           This field is only set for artifacts whose category is RESOURCE.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Output only. This field lists the names of all metrics that are selectable
     *           with the described artifact when it is used in the FROM clause. It is only
     *           set for artifacts whose category is RESOURCE.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $segments
     *           Output only. This field lists the names of all artifacts, whether a segment
     *           or another resource, that segment metrics when included in search queries
     *           and when the described artifact is used in the FROM clause. It is only set
     *           for artifacts whose category is RESOURCE.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $enum_values
     *           Output only. Values the artifact can assume if it is a field of type ENUM.
     *           This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *     @type int $data_type
     *           Output only. This field determines the operators that can be used with the
     *           artifact in WHERE clauses.
     *     @type string $type_url
     *           Output only. The URL of proto describing the artifact's data type.
     *     @type bool $is_repeated
     *           Output only. Whether the field artifact is repeated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\GoogleAdsField::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the artifact.
     * Artifact resource names have the form:
     * `googleAdsFields/{name}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>optional string name = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. The name of the artifact.
     *
     * Generated from protobuf field <code>optional string name = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Output only. The category of the artifact.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory category = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\GoogleAdsFieldCategoryEnum\GoogleAdsFieldCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool selectable = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSelectable()
    {
        return isset($this->selectable) ? $this->selectable : false;
    }

    public function hasSelectable()
    {
        return isset($this->selectable);
    }

    public function clearSelectable()
    {
        unset($this->selectable);
    }

    /**
     * Output only. Whether the artifact can be used in a SELECT clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool selectable = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSelectable($var)
    {
        GPBUtil::checkBool($var);
        $this->selectable = $var;

        return $this;
    }

    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool filterable = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getFilterable()
    {
        return isset($this->filterable) ? $this->filterable : false;
    }

    public function hasFilterable()
    {
        return isset($this->filterable);
    }

    public function clearFilterable()
    {
        unset($this->filterable);
    }

    /**
     * Output only. Whether the artifact can be used in a WHERE clause in search
     * queries.
     *
     * Generated from protobuf field <code>optional bool filterable = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setFilterable($var)
    {
        GPBUtil::checkBool($var);
        $this->filterable = $var;

        return $this;
    }

    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in
     * search queries.
     *
     * Generated from protobuf field <code>optional bool sortable = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSortable()
    {
        return isset($this->sortable) ? $this->sortable : false;
    }

    public function hasSortable()
    {
        return isset($this->sortable);
    }

    public function clearSortable()
    {
        unset($this->sortable);
    }

    /**
     * Output only. Whether the artifact can be used in a ORDER BY clause in
     * search queries.
     *
     * Generated from protobuf field <code>optional bool sortable = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSortable($var)
    {
        GPBUtil::checkBool($var);
        $this->sortable = $var;

        return $this;
    }

    /**
     * Output only. The names of all resources, segments, and metrics that are
     * selectable with the described artifact.
     *
     * Generated from protobuf field <code>repeated string selectable_with = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectableWith()
    {
        return $this->selectable_with;
    }

    /**
     * Output only. The names of all resources, segments, and metrics that are
     * selectable with the described artifact.
     *
     * Generated from protobuf field <code>repeated string selectable_with = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectableWith($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->selectable_with = $arr;

        return $this;
    }

    /**
     * Output only. The names of all resources that are selectable with the
     * described artifact. Fields from these resources do not segment metrics when
     * included in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string attribute_resources = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeResources()
    {
        return $this->attribute_resources;
    }

    /**
     * Output only. The names of all resources that are selectable with the
     * described artifact. Fields from these resources do not segment metrics when
     * included in search queries.
     * This field is only set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string attribute_resources = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attribute_resources = $arr;

        return $this;
    }

    /**
     * Output only. This field lists the names of all metrics that are selectable
     * with the described artifact when it is used in the FROM clause. It is only
     * set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string metrics = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Output only. This field lists the names of all metrics that are selectable
     * with the described artifact when it is used in the FROM clause. It is only
     * set for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string metrics = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Output only. This field lists the names of all artifacts, whether a segment
     * or another resource, that segment metrics when included in search queries
     * and when the described artifact is used in the FROM clause. It is only set
     * for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string segments = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Output only. This field lists the names of all artifacts, whether a segment
     * or another resource, that segment metrics when included in search queries
     * and when the described artifact is used in the FROM clause. It is only set
     * for artifacts whose category is RESOURCE.
     *
     * Generated from protobuf field <code>repeated string segments = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated string enum_values = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnumValues()
    {
        return $this->enum_values;
    }

    /**
     * Output only. Values the artifact can assume if it is a field of type ENUM.
     * This field is only set for artifacts of category SEGMENT or ATTRIBUTE.
     *
     * Generated from protobuf field <code>repeated string enum_values = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnumValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->enum_values = $arr;

        return $this;
    }

    /**
     * Output only. This field determines the operators that can be used with the
     * artifact in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Output only. This field determines the operators that can be used with the
     * artifact in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType data_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\GoogleAdsFieldDataTypeEnum\GoogleAdsFieldDataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>optional string type_url = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTypeUrl()
    {
        return isset($this->type_url) ? $this->type_url : '';
    }

    public function hasTypeUrl()
    {
        return isset($this->type_url);
    }

    public function clearTypeUrl()
    {
        unset($this->type_url);
    }

    /**
     * Output only. The URL of proto describing the artifact's data type.
     *
     * Generated from protobuf field <code>optional string type_url = 30 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTypeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_url = $var;

        return $this;
    }

    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>optional bool is_repeated = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getIsRepeated()
    {
        return isset($this->is_repeated) ? $this->is_repeated : false;
    }

    public function hasIsRepeated()
    {
        return isset($this->is_repeated);
    }

    public function clearIsRepeated()
    {
        unset($this->is_repeated);
    }

    /**
     * Output only. Whether the field artifact is repeated.
     *
     * Generated from protobuf field <code>optional bool is_repeated = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRepeated($var)
    {
        GPBUtil::checkBool($var);
        $this->is_repeated = $var;

        return $this;
    }

}

