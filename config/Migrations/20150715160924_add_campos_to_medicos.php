<?php
use Phinx\Migration\AbstractMigration;

class AddCamposToMedicos extends AbstractMigration
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
        $table->addColumn('sexo', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('lugar', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => true,
        ]);
        $table->addColumn('fecha_nacimiento', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
