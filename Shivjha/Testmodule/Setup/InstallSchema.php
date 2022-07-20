<?php




namespace Shivjha\Testmodule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallData
 */
class InstallSchema implements InstallSchemaInterface
{

    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */


    /**
     * InstallData constructor.
     *
     * @param EavSetupFactory $eavSetupFactory
     */


    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
       $setup->startSetup();
       $table = $setup->getConnection()->newTable($setup->getTable('shiv_jha_testmodule'))->addColumn('id', Table::TYPE_INTEGER, null, ['identity' => true, 'nullable' => false, 'primary' => true],'Item Id')->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => false], 'Item Name')->addIndex($setup->getIdxName('shiv_jha_testmodule', ['Name']),['Name'] )->setComment('Sample Items');
       $setup->getConnection()->createTable($table);
       $setup->endSetup();

    }
}
