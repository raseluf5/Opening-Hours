<?php 
namespace Rasel\OpeningHours\Block\Adminhtml\Menu\Field;

use Rasel\OpeningHours\Block\System\Config\Form\Field\FieldArray\AbstractFieldArrayFriday;

class Friday extends AbstractFieldArrayFriday
{
    protected $_typeblockOptions;
    protected $_cmsblockOptions;
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'friday_open',
            [
                'label' => __('Opening time'),
                'size' => '300px',
                'class' => 'required-entry'
            ]
        );

        $this->addColumn(
            'friday_close',
            [
                'label' => __('Closing time'),
                'size' => '300px',
                'class' => 'required-entry'
            ]
        );


        $this->_addAfter = false;

    }
}