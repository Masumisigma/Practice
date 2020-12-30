<?php

namespace Task3\CustomBilling\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Eav\Model\Config;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/*class AddNickNameAttribute implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
/*    private $moduleDataSetup;

    /** @var EavSetupFactory */
  /*  private $eavSetupFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    /*public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
  /*  public function apply()
    {
        /** @var EavSetup $eavSetup */
    /*    $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $eavSetup->addAttribute('customer_address', 'nickname', [
            'group' => 'General',
            'label' => 'Nick Name',
            'input' => 'text',
            'type' => 'text',
            'visible' => true,
            'required' => false,
            'user_defined' => true,
            'global' => true,
            'sort_order' => 45,
            'position' =>45,
            'visible_on_front' => true,
            'is_used_in_grid' => true,
            'is_visible_in_grid' => true,
            'is_filterable_in_grid' => true,
            'is_searchable_in_grid' => true,
            'frontend_input' => 'true',

        ]);
        $customAttribute = $this->moduleDataSetup->getAttribute('customer_address', 'nickname');

        $customAttribute->addData(
            'used_in_forms',
            ['adminhtml_customer_address',
                'customer_address_edit',
                'customer_register_address',
                'adminhtml_customer',
                'customer_address',

            ]
        );
        $customAttribute->save();
    }

    /**
     * {@inheritdoc}
     */
 /*   public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
 /*   public function getAliases()
    {
        return [];
    }
}*/


class AddNickNameAttribute implements DataPatchInterface
{
    /**
     * @var Config
     */
    private $eavConfig;

    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * AddressAttribute constructor.
     *
     * @param Config $eavConfig
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        Config $eavConfig,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->eavConfig = $eavConfig;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $eavSetup = $this->eavSetupFactory->create();

        $eavSetup->addAttribute('customer_address', 'nickname', [
            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            'input' => 'text',
            'label' => 'Nick Name',
            'visible' => true,
            'required' => false,
            'user_defined' => true,
            'system' => false,
            'group' => 'General',
            'global' => true,
            'visible_on_front' => true,
            'is_used_in_grid' => true,
            'is_visible_in_grid' => true,
            'is_filterable_in_grid' => false,
            'is_searchable_in_grid' => false,
            'frontend_input' => 'hidden',
            'backend' => '',
            'source' =>'',
            'position' =>90
        ]);

        $customAttribute = $this->eavConfig->getAttribute('customer_address', 'nickname');

        $customAttribute->setData(
            'used_in_forms',
            ['adminhtml_customer_address',
                'customer_address_edit',
                'customer_register_address',
                'adminhtml_customer',
                'customer_address',
                'customer_account_create',
                'customer_account_edit',
                'adminhtml_checkout',
                'checkout_register',

            ]

        );
        $customAttribute->save();
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases(): array
    {
        return [];
    }
}