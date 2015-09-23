<?php
use Phinx\Migration\AbstractMigration;

class RemoveFecIniFromCurriculums extends AbstractMigration
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
        $table->removeColumn('Fech_ini');
        $table->update();
    }
}
