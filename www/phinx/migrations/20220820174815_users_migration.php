<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = '
            CREATE TABLE "hfx_users" (
                "id_user"	INTEGER,
                "uuid"	TEXT NOT NULL,
                "username"	TEXT,
                "name"	TEXT,
                "password"	TEXT,
                "last_login"	TEXT,
                PRIMARY KEY("id_user" AUTOINCREMENT)
            );
        ';
        
        $this->execute($sql);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $sql = '
            DROP TABLE "hfx_users";
        ';
        
        $this->execute($sql);
    }
}
