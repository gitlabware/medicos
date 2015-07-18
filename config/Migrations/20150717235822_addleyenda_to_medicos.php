<?php
use Phinx\Migration\AbstractMigration;

class AddleyendaToMedicos extends AbstractMigration
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
        $table = $this->table('medicos');
        $table->addColumn('leyenda', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
