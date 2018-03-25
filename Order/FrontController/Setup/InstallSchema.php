<?php

namespace Order\FrontController\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

       
            $setup->startSetup();
            /**
             * Create table 'ralf_order'
             */
			 if (!$setup->tableExists('ralf_order')) {
            $table = $setup->getConnection()->newTable(
                $setup->getTable('ralf_order')
            )->addColumn(
                'front_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Order Id'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                225,
                [],
                'Order Name'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                225,
                [],
                'Order Email'
            )->addColumn(
                'mobile',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                10,
                [],
                'Order mobile'
            );

        $setup->getConnection()->createTable($table);
		}
		
        $setup->endSetup();
    }
}