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
                    <a href="#">
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


    

    

    
