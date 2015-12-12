<!-- Main Content -->
<div class="container">
    <div class="row">
        <a href="index.php/create_post_controller" class="btnCustom btnCustom-default">New Post</a>
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($posts as $post) { ?>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $post->title; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $post->description; ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $post->username;?></a> on September 24, 2014</p>
                </div>
                <hr>
            <?php } ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>


    

    

    
