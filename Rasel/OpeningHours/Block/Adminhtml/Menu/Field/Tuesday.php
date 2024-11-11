<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArrayTuesday;

class Tuesday extends AbstractFieldArrayTuesday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'tuesday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px'
            ]
        );

        $this->addColumn(
            'tuesday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px'
            ]
        );


        $this->_addAfter = false;

    }
}