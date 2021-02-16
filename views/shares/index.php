<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success my-3" href="<?php echo ROOT_PATH; ?>shares/add">Share something</a>
    <?php endif; ?>
    <?php foreach($viewmodel as $item) : ?>
        <div class="card card-body bg-light mb-4">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr />
            <p><?php echo $item['body']; ?></p>
            <br />
            <a class="btn btn-outline-primary" href="<?php echo $item['link']; ?>" target="_blank">Go to site</a>
        </div>
    <?php endforeach; ?>
</div>