<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArraySunday;

class Sunday extends AbstractFieldArraySunday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'sunday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px'
            ]
        );

        $this->addColumn(
            'sunday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px'
            ]
        );


        $this->_addAfter = false;

    }
}