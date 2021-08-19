<?php
namespace AHT\CustomOption\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
   public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
   {
       $setup->startSetup();

       $setup->getConnection()->addColumn(
           $setup->getTable('catalog_product_option'),
           'custom_option_group',
           [
               'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
               'nullable' => true,
               'default'  => '',
               'source' => \AHT\CustomOption\Model\Custom\option\Source\OptionSelect::class,
               'comment'  => 'Custom option group',
           ]
       );

       $setup->endSetup();
   }
}