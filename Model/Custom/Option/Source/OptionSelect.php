<?php

namespace AHT\CustomOption\Model\Custom\Option\Source;

class OptionSelect extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    const CACHE_TAG = 'aht_customoption_option_select';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'custom_option_group';

    public function getAllOptions()
    {
            $this->_options = [
                ['label' => __('Select option ...'), 'value' => ''],
                ['label' => __('Step 1'), 'value' => 1],
                ['label' => __('Step 2'), 'value' => 2],
                ['label' => __('Step 3'), 'value' => 3],
                ['label' => __('Step 4'), 'value' => 4]
            ];
        return $this->_options;
    }
}