<?php
use Phinx\Migration\AbstractMigration;

class CreateCurriculums extends AbstractMigration
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
        $table->addColumn('titulobt', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('anoini', 'string', [
            'default' => null,
            'limit' => 4,
            'null' => true,
        ]);
        $table->addColumn('anofin', 'string', [
            'default' => null,
            'limit' => 4,
            'null' => true,
        ]);
        $table->addColumn('centroestu', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('puestocupado', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('nom_empre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('fechaini', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('fechafin', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('descrip', 'text', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('nomcurso', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('horas', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => true,
        ]);
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => true,
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
