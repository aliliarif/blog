<!-- Main Content -->
<div class="container">
    <div class="row">
        <?php if($this->session->userdata('name')){?>
            <!-- logged in user - can create new post -->
            <a href="create_post_controller" class="btnCustom btnCustom-default">New Post</a>
        <?php }else{?>
            <!-- user is not logged in -->
            <a href="" class="btnCustom btnCustom-default" data-toggle="modal" data-target="#cantPost_modal">New Post</a>
        <?php } ?>
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
                    <p class="post-meta" style="margin-top:-30px;">Posted by <?php echo $post->username . " on " . $post->date;?></p>
                </div>
                <hr style="margin-top:-30px;">
            <?php } ?>
            <!-- Pager -->
            <div style="text-align: center;">
                <ul class="pagination pagination-lg" >
                    <!-- make first page active when there is no selected page -->
                    <?php for ($i=1; $i <= $pages; $i++) { ?>
                        <li 
                            <?php 
                            if($selected_page == $i) { ?> 
                                class="active" 
                            <?php }else if($selected_page == '' && $i == 1){ ?> 
                                class="active" 
                            <?php } ?>
                        >
                            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>


    

    

    
