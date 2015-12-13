<!-- Main Content -->

 
<div class="container">
    <div class="row">
        <div id="featured_post"> </div> <!-- display featured posts here using js -->
        

        <div class="col-md-8 col-md-offset-1">
            <?php if($this->session->userdata('name')){?>
            <!-- logged in user - can create new post -->
                <a href="post_controller" class="btnCustom btnCustom-default pull-right">New Post</a>
            <?php }else{?>
            <!-- user is not logged in, show modal -->
                <a href="" class="btnCustom btnCustom-default pull-right" data-toggle="modal" data-target="#cantPost_modal">New Post</a>
            <?php } ?>
            <?php foreach ($posts as $post) { ?>
                <div class="post-preview">
                    <a href="#" class="full_post"
                        data-full="<?php echo $post->description;?>" 
                        data-title="<?php echo $post->title; ?>" 
                        data-username="<?php echo $post->username;?>"
                    >
                        <h2 id="post_title" class="post-title">
                            <?php echo $post->title; ?>
                        </h2>
                        <h3 id="post_description"  class="post-subtitle">
                            <?php 
                                $full_post = $post->description;
                                $post_temp = mb_strimwidth($full_post, 0, 200, "..."); // display only 200 chars 
                                echo $post_temp;
                            ?>
                        </h3>
                    </a>
                    <p id="post_info" class="post-meta" >Posted by <?php echo $post->username . " on " . $post->date;?></p>
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


    

    

    
