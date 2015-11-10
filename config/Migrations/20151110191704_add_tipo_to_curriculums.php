<?php
use Phinx\Migration\AbstractMigration;

class AddTipoToCurriculums extends AbstractMigration
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
        $table = $this->table('curriculums');
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'limit' => 70,
            'null' => false,
        ]);
        $table->update();
    }
}
