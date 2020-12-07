<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 7/12/20
 * Time: 10:51 AM
 */
namespace Example\DatabaseExample\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement install() method.
        $setup->startSetup();
        /*$table=$setup->getConnection()->newTable(
            $setup->getTable(
                tableName:'affiliate_member'
            )->addColumn()
        )*/
        $setup->endSetup();
    }

}
?>