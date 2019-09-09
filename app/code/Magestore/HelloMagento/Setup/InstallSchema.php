<?php

namespace Magestore\HelloMagento\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(
    \Magento\Framework\Setup\SchemaSetupInterface $setup,
    \Magento\Framework\Setup\ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $installer->getConnection()->dropTable($installer->getTable('magestore_helloworld'));

        $table = $installer->getConnection()
        ->newTable($installer->getTable('magestore_helloworld'))
        ->addColumn(
        'example_id',
        \Magento\Framework\Db\Ddl\Table::TYPE_INTEGER,
        null,
        ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true],
        'Example Id'
        )->addColumn(
        'title',
        \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
        255,
        ['nullable' => false],
        'Example Title'
        )->addColumn(
        'content',
        \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
        '2M',
        [],
        'Example Content'
        )->addColumn(
        'created_at',
        \Magento\Framework\Db\Ddl\Table::TYPE_TIMESTAMP,
        null,
        ['nullable' => false, 'default' => \Magento\Framework\Db\Ddl\Table::TIMESTAMP_INIT],
        'Created At'
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
