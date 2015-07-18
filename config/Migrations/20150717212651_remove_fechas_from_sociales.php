<?php
use Phinx\Migration\AbstractMigration;

class RemoveFechasFromSociales extends AbstractMigration
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
        $table = $this->table('sociales');
        $table->removeColumn('created');
        $table->removeColumn('modified');
        $table->update();
    }
}
