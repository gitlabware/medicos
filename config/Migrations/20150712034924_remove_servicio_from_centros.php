<?php
use Phinx\Migration\AbstractMigration;

class RemoveServicioFromCentros extends AbstractMigration
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
        $table = $this->table('centros');
        $table->removeColumn('servicio_id');
        $table->update();
    }
}
