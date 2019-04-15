<?php


use Phinx\Migration\AbstractMigration;

class SimplifierSaisieArticle extends AbstractMigration
{
    public function change()
    {
        $this->execute("UPDATE afup_site_article SET chapeau=descriptif WHERE chapeau in null or chapeau = ''");
        $this->execute('ALTER TABLE afup_site_article DROP COLUMN surtitre');
        $this->execute('ALTER TABLE afup_site_article DROP COLUMN descriptif');
    }
}
