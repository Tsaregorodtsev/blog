<?php
/**
 * Created by PhpStorm.
 * User: v.tsaregorodtsev
 * Date: 21.03.2018
 * Time: 8:52 **/
<?foreach($posts as $post):?><div class="span8">
    <p><?=$post['posts_subject']?></p>
    <p><?=$post['post_text']?></p>
<div>
<span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    <span class="badge badge-success"><?=$post['user_id']?></span><div class="pull-right"><span class="label">a
    </div>
</div>
<?endforeach?>
