<?php 
namespace PushpakMods\DatabaseMod\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('employee_table')
        )->addColumn(
            'employee_id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=>true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Employee ID'
        )->addColumn(
            'first_name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'First Name'
        )->addColumn(
            'last_name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'Last Name'
        )->addColumn(
            'email_id',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'Email ID'
        )->setOption('charset','utf8');


        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }

}

?>