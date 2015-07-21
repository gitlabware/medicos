<?php
use Phinx\Migration\AbstractMigration;

class RemoveUbicacionFromMedicos extends AbstractMigration
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
        $table->removeColumn('lat');
        $table->removeColumn('lng');
        $table->update();
    }
}
