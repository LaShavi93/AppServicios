<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        /*$table = $this->table('users'); 
        
        //Añadimos a la tabla creada columnas, con sus respectivos nombres, limites de caractetes y demas caracteristicas.
        $table->addColumn('cedula', 'integer', ['limit' => 15])
              ->addColumn('name', 'string', ['limit' => 100])
              ->addColumn('lastname', 'string', ['limit' => 100])
              ->addColumn('email', 'string', ['limit' => 50])
              ->addColumn('password', 'string')
              ->addColumn('photo', 'string', ['limit' => 250])
              ->addColumn('photo_dir', 'string', ['limit' => 250])
              ->addColumn('role', 'integer', ['limit' => 3], array('values' => 'admin', 'user'))
              ->addColumn('cellphone', 'integer', ['limit' => 20])
              ->addColumn('curriculum', 'string', ['limit' => 250])
              ->addColumn('curriculum_dir', 'string', ['limit' => 250])
              ->addColumn('point', 'integer', ['limit' => 15])
              ->addColumn('account', 'integer', ['limit' => 100])
              ->addColumn('birthday', 'datetime')
              ->addColumn('created', 'timestamp')
              ->addColumn('modified', 'datetime')
              ->addColumn('state', 'integer', ['limit' => 3])
              ->create(); //Con esto decimos que se cree la tabla con los campos definidos arriba.
              
        $refTable = $this->table('users');
        $refTable->addColumn('city_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('city_id', 'cities', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        */
              
            //$table->addColumn('first_name', 'string', ['limit' => 100]);
    }
}
