<h2>Mit vorhandenem Nutzer in Moodle verkn�pfen</h2>
<form method="post" action="<?= $controller->url_for('index/connect_user/') ?>">
    <?= CSRFProtection::tokenTag() ?>
    Moodle-User der verkn�pft werden soll:<br> 
    <input name="moodle_username">    
    </input><br>
    Moodle-Passwort des Moodle-Users der verkn�pft werden soll:<br>
    <input name="moodle_user_pw">
    </input><br>
    <?= \Studip\Button::create(_('Mit Nutzer verkn�pfen')) ?>
</form>
