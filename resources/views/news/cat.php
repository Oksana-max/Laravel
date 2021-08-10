<h1>Все о спорте</h1>
<br>
<?php foreach($news as $n): ?>
    <div>
        <strong><a href="<?=route('articale/show', [
            'id' => $n['id']
        ])?>"><?=$n['title']?></a></strong>
        <p><?= $n['description']?></p>
    </div>
<?php endforeach; ?>
