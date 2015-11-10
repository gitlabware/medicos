<?php
use Phinx\Migration\AbstractMigration;

class CreateCurriculums2 extends AbstractMigration
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
        $table->addColumn('titulacion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('fecha_ini', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('fecha_fin', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('centro', 'string', [
            'default' => null,
            'limit' => 180,
            'null' => true,
        ]);
        $table->addColumn('puesto', 'string', [
            'default' => null,
            'limit' => 160,
            'null' => true,
        ]);
        $table->addColumn('empresa', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => true,
        ]);
        $table->addColumn('descripcion', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('horas', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('medico_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => FALSE,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
