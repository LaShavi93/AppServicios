<?php

use Phinx\Migration\AbstractMigration;

class CreateSpecialtiesUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
      //Con esto creamos nuestra tabla.
        /*$table = $this->table('specialties_users'); 
        
        //Añadimos a la tabla creada columnas, con sus respectivos nombres, limites de caractetes y demas caracteristicas.
        $table->addColumn('state', 'integer', ['limit' => 3])
              ->create(); //Con esto decimos que se cree la tabla con los campos definidos arriba.
              
        $refTable = $this->table('users');
        
        $refTable->addColumn('user_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->addColumn('specialty_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('specialty_id', 'specialties', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 
                 ->update();*/
    }
}
