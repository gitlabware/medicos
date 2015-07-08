<?php
use Phinx\Migration\AbstractMigration;

class CreateConsultorios extends AbstractMigration
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
        $table = $this->table('consultorios');
        $table->addColumn('medico_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('direccion', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ]);
        $table->addColumn('telefonos', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('lat', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('lng', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => true,
        ]);
        $table->addColumn('horarios', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('estado', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => true,
        ]);
        $table->addColumn('descripcion', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
