<?php
use Migrations\AbstractMigration;

class CreateFuncionarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('funcionarios');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('nasc', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('usuario', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->create();
    }
}
