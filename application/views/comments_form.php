<div class="block-border">
    <div class="block-header">
        <h1>Comments</h1>
    </div>
    <form  class="block-content form" action="<?php echo base_url();?>home/save_comments" method="post">
        <div class="_100">
            <p>
                <label for="textfield"> Comments Author Name </label><br>
                <input id="textfield" name="comments_author_name" class="required" type="text" value="" />
            </p>
        </div>
        <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id; ?>;" />
        <div class="_100">
            <p>
                <label for="textfield">Email </label><br>
                <input id="textfield" name="comments_author_email" class="required" type="text" value="" />
            </p>
       </div>

        <div class="_100">
            <p>
                <label for="textarea"> Comments Description </label><br>
                <textarea id="textarea" name="comments_description" class="required" rows="5" cols="40"></textarea>
            </p>
        </div>
        <div class="clear"></div>
        <div class="block-actions">
            <input type="submit" class="button" value="Submit Comment">
        </div>
    </form>
</div>