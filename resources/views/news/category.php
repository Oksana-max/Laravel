
<?php foreach($catList as $n): ?>
    <div>
        <strong><a href="<?=route('news.cat', [
            'id' => $n['id']
        ])?>"><?=$n['title']?></a></strong>
        
    </div>
<?php endforeach; ?>
