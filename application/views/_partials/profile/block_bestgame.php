<strong>One Game Stats</strong>
<div class="well well-large">
    <ul class="unstyled">
        <li>
            <span class="row_title">Most Kills</span>
            <span class="row_data"><?= number_format($data['BestGameTotalKills']); ?></span>
        </li>
        <li>
            <span class="row_title">Most Medals</span>
            <span class="row_data"><?= number_format($data['BestGameTotalMedals']); ?></span>
        </li>
        <li>
            <span class="row_title">Most Headshots</span>
            <span class="row_data"><?= number_format($data['BestGameHeadshotTotal']); ?></span>
        </li>
        <li>
            <span class="row_title">Most Assassinations</span>
            <span class="row_data"><?= number_format($data['BestGameAssassinationTotal']); ?></span>
        </li>
        <li>
            <span class="row_title">Furthest Kill Distance</span>
            <span class="row_data"><?= number_format($data['BestGameKillDistance']); ?></span>
        </li>
        </ul>
    </div>