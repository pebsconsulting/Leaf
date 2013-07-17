<h3>Leaf Badges</h3>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <? if ($badges != FALSE): ?>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Gamertag</th>
                        <th>Badge</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach($badges as $badge): ?>
                        <tr>
                            <td><?= $badge['Gamertag']; ?></td>
                            <td><span class="badge badge-<?= $badge['colour']; ?>"><?= $badge['title']; ?></span></td>
                            <td>
                                <a href="#" class="btn btn-small btn-danger" onclick="return confirm('CONFIRM: Delete Badge?');">Delete</a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
                <?= $badge_pagination; ?>
            <? else: ?>
                <div class="alert alert-danger">
                    <strong>Heads Up!</strong> We could not find any badges :(
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
