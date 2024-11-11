<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArraySaturday;

class Saturday extends AbstractFieldArraySaturday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'saturday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px'
            ]
        );

        $this->addColumn(
            'saturday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px'
            ]
        );


        $this->_addAfter = false;

    }
}