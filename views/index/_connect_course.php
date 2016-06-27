<h2>Mit Moodlekurs verkn�pfen</h2>
<form method="post" action="<?= $controller->url_for('index/connect/') ?>">
    <?= CSRFProtection::tokenTag() ?>

    <select name="moodle_course">
        <? foreach($moodle_courses as $course) : ?>
        <? if ($course['format'] != 'site') : /* skip the installation itself, which is represented as a course as well */ ?>
            <option value="<?= $course['id'] ?>"><?= $course['fullname'] ?></option>
        <? endif ?>
        <? endforeach ?>
    </select>
    <?= \Studip\Button::create(_('Mit Moodlekurs verkn�pfen')) ?>
</form>
